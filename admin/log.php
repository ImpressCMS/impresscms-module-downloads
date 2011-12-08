<?php
/**
 * 'Downloads' is a light weight download handling module for ImpressCMS
 *
 * File: /admin/indexpage.php
 * 
 * edit, view Downloads log
 * 
 * @copyright	Copyright QM-B (Steffen Flohrer) 2011
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * ----------------------------------------------------------------------------------------------------------
 * 				Downloads
 * @since		1.00
 * @author		QM-B <qm-b@hotmail.de>
 * @version		$Id$
 * @package		downloads
 *
 */

include_once "admin_header.php";

$clean_log_id = isset($_GET['log_id']) ? (int)$_GET['log_id'] : 0 ;

$downloads_log_handler = icms_getModuleHandler("log", basename(dirname(dirname(__FILE__))), "downloads");

$valid_op = array ('del', 'view', '');

$clean_op = isset($_GET['op']) ? filter_input(INPUT_GET, 'op') : '';

if (in_array($clean_op, $valid_op, TRUE)){
	switch ($clean_op) {
		case 'del':
			$controller = new icms_ipf_Controller($downloads_log_handler);
			$controller->handleObjectDeletion();
			break;

		case 'view' :
			$logObj = $downloads_log_handler->get($clean_log_id);
			icms_cp_header();
			downloads_adminmenu( 0, _MI_DOWNLOADS_MENU_LOG );
			$logObj->displaySingleObject();
			break;
		
		default:
			icms_cp_header();
			downloads_adminmenu( 0, _MI_DOWNLOADS_MENU_LOG );
			$criteria = '';
			if ($clean_log_id) {
				$logObj = $downloads_log_handler->get($clean_log_id);
				if ($logObj->id()) {
					$logObj->displaySingleObject();
				}
			}
			if (empty($criteria)) {
				$criteria = null;
			}
			// create downloads table
			$objectTable = new icms_ipf_view_Table($downloads_log_handler, $criteria);
			$objectTable->addColumn( new icms_ipf_view_Column( 'log_item_id', 'center', 50, 'log_item_id' ) );
			$objectTable->addColumn( new icms_ipf_view_Column( 'log_item', FALSE, FALSE, 'getLogItem' ) );
			$objectTable->addColumn( new icms_ipf_view_Column( 'log_case',FALSE, FALSE, 'getLogCase'));
			$objectTable->addColumn( new icms_ipf_view_Column( 'log_date', 'center', 50, 'getLogDate' ) );			
			$icmsAdminTpl->assign( 'downloads_log_table', $objectTable->fetch() );
			$icmsAdminTpl->display( 'db:downloads_admin.html' );
			break;
	}
	icms_cp_footer();
}