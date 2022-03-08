<?php

class CentralNoticeCampaignLogPager extends ReverseChronologicalPager {
	var $viewPage, $special;

	function __construct( $special ) {
		$this->special = $special;
		parent::__construct();

		// Override paging defaults
		list( $this->mLimit, /* $offset */ ) = $this->mRequest->getLimitOffset( 20, '' );
		$this->mLimitsShown = array( 20, 50, 100 );

		$this->viewPage = SpecialPage::getTitleFor( 'CentralNotice' );
	}

	/**
	 * Sort the log list by timestamp
	 */
	function getIndexField() {
		return 'notlog_timestamp';
	}

	/**
	 * Pull log entries from the database
	 */
	function getQueryInfo() {
		$request = $this->getRequest();

		$filterStartDate = 0;
		$filterEndDate = 0;
		$start = $this->special->getDateValue( 'start' );
		$end = $this->special->getDateValue( 'end' );

		if ( $start ) {
			$filterStartDate = substr( $start, 0, 8 );
		}
		if ( $end ) {
			$filterEndDate = substr( $end, 0, 8 );
		}
		$filterCampaign = $request->getVal( 'campaign' );
		$filterUser = $request->getVal( 'user' );
		$reset = $request->getVal( 'centralnoticelogreset' );

		$info = array(
			'tables' => array( 'cn_notice_log' ),
			'fields' => '*',
			'conds' => array()
		);

		if ( !$reset ) {
			if ( $filterStartDate > 0 ) {
				$filterStartDate = intval( $filterStartDate.'000000' );
				$info['conds'][] = "notlog_timestamp >= $filterStartDate";
			}
			if ( $filterEndDate > 0 ) {
				$filterEndDate = intval( $filterEndDate.'000000' );
				$info['conds'][] = "notlog_timestamp < $filterEndDate";
			}
			if ( $filterCampaign ) {
				$info['conds'][] = "notlog_not_name LIKE '$filterCampaign'";
			}
			if ( $filterUser ) {
				$user = User::newFromName( $filterUser );
				$userId = $user->getId();
				$info['conds'][] = "notlog_user_id = $userId";
			}
		}

		return $info;
	}

	/**
	 * Generate the content of each table row (1 row = 1 log entry)
	 */
	function formatRow( $row ) {
		global $wgExtensionAssetsPath;

		$lang = $this->getLanguage();

		// Create a user object so we can pull the name, user page, etc.
		$loggedUser = User::newFromId( $row->notlog_user_id );
		// Create the user page link
		$userLink = Linker::linkKnown(
			$loggedUser->getUserPage(),
			$loggedUser->getName()
		);
		$userTalkLink = Linker::linkKnown(
			$loggedUser->getTalkPage(),
			$this->msg( 'centralnotice-talk-link' )->escaped()
		);

		// Create the campaign link
		$campaignLink = Linker::linkKnown(
			$this->viewPage,
			htmlspecialchars( $row->notlog_not_name ),
			array(),
			array(
				'method' => 'listNoticeDetail',
				'notice' => $row->notlog_not_name
			)
		);

		// Begin log entry primary row
		$htmlOut = Xml::openElement( 'tr' );

		$htmlOut .= Xml::openElement( 'td', array( 'valign' => 'top' ) );
		if ( $row->notlog_action !== 'removed' ) {
			$htmlOut .= '<a href="javascript:toggleLogDisplay(\''.$row->notlog_id.'\')">'.
				'<img src="'.$wgExtensionAssetsPath.'/CentralNotice/collapsed.png" id="cn-collapsed-'.$row->notlog_id.'" style="display:block;"/>'.
				'<img src="'.$wgExtensionAssetsPath.'/CentralNotice/uncollapsed.png" id="cn-uncollapsed-'.$row->notlog_id.'" style="display:none;"/>'.
				'</a>';
		}
		$htmlOut .= Xml::closeElement( 'td' );
		$htmlOut .= Xml::tags( 'td', array( 'valign' => 'top', 'class' => 'primary' ),
			$lang->date( $row->notlog_timestamp ) . $this->msg( 'word-separator' )->plain() . $lang->time( $row->notlog_timestamp )
		);
		$htmlOut .= Xml::tags( 'td', array( 'valign' => 'top', 'class' => 'primary' ),
			$this->msg( 'centralnotice-user-links', $userLink, $userTalkLink )->text()
		);
		$htmlOut .= Xml::tags( 'td', array( 'valign' => 'top', 'class' => 'primary' ),
			$this->msg( 'centralnotice-action-'.$row->notlog_action )->text()
		);
		$htmlOut .= Xml::tags( 'td', array( 'valign' => 'top', 'class' => 'primary' ),
			$campaignLink
		);
		$htmlOut .= Xml::tags( 'td', array(),
			'&nbsp;'
		);

		// End log entry primary row
		$htmlOut .= Xml::closeElement( 'tr' );

		if ( $row->notlog_action !== 'removed' ) {
			// Begin log entry secondary row
			$htmlOut .= Xml::openElement( 'tr', array( 'id' => 'cn-log-details-'.$row->notlog_id, 'style' => 'display:none;' ) );

			$htmlOut .= Xml::tags( 'td', array( 'valign' => 'top' ),
				'&nbsp;' // force a table cell in older browsers
			);
			$htmlOut .= Xml::openElement( 'td', array( 'valign' => 'top', 'colspan' => '5' ) );
			if ( $row->notlog_action == 'created' ) {
				$htmlOut .= $this->showInitialSettings( $row );
			} elseif ( $row->notlog_action == 'modified' ) {
				$htmlOut .= $this->showChanges( $row );
			}
			$htmlOut .= Xml::closeElement( 'td' );

			// End log entry primary row
			$htmlOut .= Xml::closeElement( 'tr' );
		}

		return $htmlOut;
	}

	/**
	 * @param $row
	 * @return string
	 */
	function showInitialSettings( $row ) {
		$lang = $this->getLanguage();
		$details = '';
		$wordSeparator = $this->msg( 'word-separator' )->plain();
		$details .= $this->msg(
			'centralnotice-log-label',
			$this->msg( 'centralnotice-start-date' )->text(),
			$lang->date( $row->notlog_end_start ) . $wordSeparator . $lang->time( $row->notlog_end_start )
		)->text() . "<br />";
		$details .= $this->msg(
			'centralnotice-log-label',
			$this->msg( 'centralnotice-end-date' )->text(),
			$lang->date( $row->notlog_end_end ) . $wordSeparator . $lang->time( $row->notlog_end_end )
		)->text() . "<br />";
		$details .= $this->msg(
			'centralnotice-log-label',
			$this->msg( 'centralnotice-projects' )->text(),
			$row->notlog_end_projects
		)->text() . "<br />";
		$language_count = count( explode ( ', ', $row->notlog_end_languages ) );
		$languageList = '';
		if ( $language_count > 15 ) {
			$languageList = $this->msg( 'centralnotice-multiple-languages' )->numParams( $language_count )->text();
		} elseif ( $language_count > 0 ) {
			$languageList = $row->notlog_end_languages;
		}
		$details .= $this->msg(
			'centralnotice-log-label',
			$this->msg( 'centralnotice-languages' )->text(),
			$languageList
		)->text() . "<br />";
		$details .= $this->msg(
			'centralnotice-log-label',
			$this->msg( 'centralnotice-geo' )->text(),
			($row->notlog_end_geo ? 'on' : 'off')
		)->text() . "<br />";
		if ( $row->notlog_end_geo ) {
			$country_count = count( explode ( ', ', $row->notlog_end_countries ) );
			$countryList = '';
			if ( $country_count > 20 ) {
				$countryList = $this->msg( 'centralnotice-multiple-countries' )->numParams( $country_count )->text();
			} elseif ( $country_count > 0 ) {
				$countryList = $row->notlog_end_countries;
			}
			$details .= $this->msg(
				'centralnotice-log-label',
				$this->msg( 'centralnotice-countries' )->text(),
				$countryList
			)->text() . "<br />";
		}
		return $details;
	}

	/**
	 * @param $row
	 * @return string
	 */
	function showChanges( $row ) {
		$lang = $this->getLanguage();
		$details = '';
		$wordSeparator = $this->msg( 'word-separator' )->plain();
		if ( $row->notlog_begin_start !== $row->notlog_end_start ) {
			$details .= $this->msg(
				'centralnotice-log-label',
				$this->msg( 'centralnotice-start-date' )->text(),
				$this->msg(
					'centralnotice-changed',
					$lang->date( $row->notlog_begin_start ) . $wordSeparator . $lang->time( $row->notlog_begin_start ),
					$lang->date( $row->notlog_end_start ) . $wordSeparator . $lang->time( $row->notlog_end_start )
				)->text()
			)->text() . "<br />";
		}
		if ( $row->notlog_begin_end !== $row->notlog_end_end ) {
			$details .= $this->msg(
				'centralnotice-log-label',
				$this->msg( 'centralnotice-end-date' )->text(),
				$this->msg(
					'centralnotice-changed',
					$lang->date( $row->notlog_begin_end ) . $wordSeparator . $lang->time( $row->notlog_begin_end ),
					$lang->date( $row->notlog_end_end ) . $wordSeparator . $lang->time( $row->notlog_end_end )
				)->text()
			)->text() . "<br />";
		}
		$details .= $this->testBooleanChange( 'enabled', $row );
		$details .= $this->testPriorityChange( 'preferred', $row );
		$details .= $this->testBooleanChange( 'locked', $row );
		$details .= $this->testBooleanChange( 'geo', $row );
		$details .= $this->testBooleanChange( 'buckets', $row );
		$details .= $this->testSetChange( 'projects', $row );
		$details .= $this->testSetChange( 'languages', $row );
		$details .= $this->testSetChange( 'countries', $row );
		if ( $row->notlog_begin_banners !== $row->notlog_end_banners ) {
			// Show changes to banner weights and assignment
			$beginBannersObject = json_decode( $row->notlog_begin_banners, true );
			$endBannersObject = json_decode( $row->notlog_end_banners, true );
			$beginBanners = array();
			$endBanners = array();
			foreach( $beginBannersObject as $key => $params ) {
				if ( is_array( $params ) ) {
					$weight = $params['weight'];
					$bucket = chr( 65 + $params['bucket'] );
				} else {
					// Legacy, we used to only store the weight
					$weight = $params;
					$bucket = 0;
				}
				$beginBanners[$key] = "$key ($bucket, $weight)";
			}
			foreach( $endBannersObject as $key => $params ) {
				if ( is_array( $params ) ) {
					$weight = $params['weight'];
					$bucket = chr( 65 + $params['bucket'] );
				} else {
					// Legacy, we used to only store the weight
					$weight = $params;
					$bucket = 0;
				}
				$endBanners[$key] = "$key ($bucket, $weight)";
			}
			if ( $beginBanners ) {
				$before = $lang->commaList( $beginBanners );
			} else {
				$before = $this->msg( 'centralnotice-no-assignments' )->text();
			}
			if ( $endBanners ) {
				$after = $lang->commaList( $endBanners );
			} else {
				$after = $this->msg( 'centralnotice-no-assignments' )->text();
			}
			$details .= $this->msg(
				'centralnotice-log-label',
				$this->msg( 'centralnotice-templates' )->text(),
				$this->msg( 'centralnotice-changed', $before, $after)->text()
			)->text() . "<br />";
		}
		return $details;
	}

	/**
	 * @param $param
	 * @param $row
	 * @return string
	 */
	private function testBooleanChange( $param, $row ) {
		$result = '';
		$beginField = 'notlog_begin_' . $param;
		$endField = 'notlog_end_' . $param;
		if ( $row->$beginField !== $row->$endField ) {
			$result .= $this->msg(
				'centralnotice-log-label',
				$this->msg( 'centralnotice-'.$param )->text(),
				$this->msg(
					'centralnotice-changed',
					( $row->$beginField ? $this->msg( 'centralnotice-on' )->text() : $this->msg( 'centralnotice-off' )->text() ),
					( $row->$endField ? $this->msg( 'centralnotice-on' )->text() : $this->msg( 'centralnotice-off' )->text() )
				)->text()
			)->text() . "<br />";
		}
		return $result;
	}

	private function testSetChange( $param, $row ) {
		$result = '';
		$beginField = 'notlog_begin_'.$param;
		$endField = 'notlog_end_'.$param;

		if ( $row->$beginField !== $row->$endField ) {
			$lang = $this->getLanguage();
			$beginSet = array();
			$endSet = array();
			if ( $row->$beginField ) {
				$beginSet = explode( ', ', $row->$beginField );
			}
			if ( $row->$endField ) {
				$endSet = explode( ', ', $row->$endField );
			}
			$added = array_diff( $endSet, $beginSet );
			$removed = array_diff( $beginSet, $endSet );
			$differences = '';
			if ( $added ) {
				$differences .= $this->msg( 'centralnotice-added', $lang->commaList( $added ) )->text();
				if ( $removed ) $differences .= '; ';
			}
			if ( $removed ) {
				$differences .= $this->msg( 'centralnotice-removed', $lang->commaList( $removed ) )->text();
			}
			$result .= $this->msg(
				'centralnotice-log-label',
				$this->msg( 'centralnotice-'.$param )->text(),
				$differences
			)->text() . "<br />";
		}
		return $result;
	}

	/**
	 * Test for changes to campaign priority
	 * @param $param
	 * @param $row
	 * @return string
	 */
	private function testPriorityChange( $param, $row ) {
		$result = '';
		$beginField = 'notlog_begin_' . $param;
		$endField = 'notlog_end_' . $param;
		if ( $row->$beginField !== $row->$endField ) {
			switch ( $row->$beginField ) {
				case CentralNotice::LOW_PRIORITY:
					$beginMessage = $this->msg( 'centralnotice-priority-low' )->text();
					break;
				case CentralNotice::NORMAL_PRIORITY:
					$beginMessage = $this->msg( 'centralnotice-priority-normal' )->text();
					break;
				case CentralNotice::HIGH_PRIORITY:
					$beginMessage = $this->msg( 'centralnotice-priority-high' )->text();
					break;
				case CentralNotice::EMERGENCY_PRIORITY:
					$beginMessage = $this->msg( 'centralnotice-priority-emergency' )->text();
					break;
			}
			switch ( $row->$endField ) {
				case CentralNotice::LOW_PRIORITY:
					$endMessage = $this->msg( 'centralnotice-priority-low' )->text();
					break;
				case CentralNotice::NORMAL_PRIORITY:
					$endMessage = $this->msg( 'centralnotice-priority-normal' )->text();
					break;
				case CentralNotice::HIGH_PRIORITY:
					$endMessage = $this->msg( 'centralnotice-priority-high' )->text();
					break;
				case CentralNotice::EMERGENCY_PRIORITY:
					$endMessage = $this->msg( 'centralnotice-priority-emergency' )->text();
					break;
			}
			$result .= $this->msg(
				'centralnotice-log-label',
				$this->msg( 'centralnotice-'.$param )->text(),
				$this->msg(
					'centralnotice-changed',
					$beginMessage,
					$endMessage
				)->text()
			)->text() . "<br />";
		}
		return $result;
	}

	/**
	 * Specify table headers
	 */
	function getStartBody() {
		$htmlOut = '';
		$htmlOut .= Xml::openElement( 'table', array( 'id' => 'cn-campaign-logs', 'cellpadding' => 3 ) );
		$htmlOut .= Xml::openElement( 'tr' );
		$htmlOut .= Xml::element( 'th', array( 'style' => 'width: 20px;' ) );
		$htmlOut .= Xml::element( 'th', array( 'align' => 'left', 'style' => 'width: 130px;' ),
			$this->msg( 'centralnotice-timestamp' )->text()
		);
		$htmlOut .= Xml::element( 'th', array( 'align' => 'left', 'style' => 'width: 160px;' ),
			$this->msg( 'centralnotice-user' )->text()
		);
		$htmlOut .= Xml::element( 'th', array( 'align' => 'left', 'style' => 'width: 100px;' ),
			$this->msg( 'centralnotice-action' )->text()
		);
		$htmlOut .= Xml::element( 'th', array( 'align' => 'left', 'style' => 'width: 160px;' ),
			$this->msg( 'centralnotice-notice' )->text()
		);
		$htmlOut .= Xml::tags( 'td', array(),
			'&nbsp;'
		);
		$htmlOut .= Xml::closeElement( 'tr' );
		return $htmlOut;
	}

	/**
	 * Close table
	 */
	function getEndBody() {
		$htmlOut = '';
		$htmlOut .= Xml::closeElement( 'table' );
		return $htmlOut;
	}
}
