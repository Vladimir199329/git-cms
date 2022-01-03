<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/


use Tygh\Tygh;
use Tygh\Registry;
use Tygh\Languages\Languages;

defined('BOOTSTRAP') or die('Access denied');

$suffix = '';

fn_trusted_vars(
    'departament_data'
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if ($mode == 'update_departament') {
        $departament_id = !empty($_REQUEST['departament_id']) ? $_REQUEST['departament_id'] : 0;
        $data = !empty($_REQUEST['departament_data']) ? $_REQUEST['departament_data'] : 0;
        $departament_id = fn_update_departament($data, $departament_id);

        if (!empty($departament_id)) {
            return array(CONTROLLER_STATUS_OK, "departaments.update_departament?departament_id={$departament_id}");
        } else {
            return array(CONTROLLER_STATUS_REDIRECT, "departaments.add_departament");
        }

    } elseif ($mode === 'delete_departament') {
        $departament_id = !empty($_REQUEST['departament_id']) ? $_REQUEST['departament_id'] : 0;
        fn_delete_departament($departament_id);
        return array(CONTROLLER_STATUS_REDIRECT, "departaments.manage_departaments");
        

    } elseif ($mode == 'delete_departaments') {
        if (!empty($_REQUEST['departament_ids'])) {
            foreach ($_REQUEST['departament_ids'] as $departament_id) {
                fn_delete_departament($departament_id);
            }
        }
        return array(CONTROLLER_STATUS_REDIRECT, "departaments.manage_departaments");
    } elseif (
        $mode === 'm_update_statuses'
        && !empty($_REQUEST['departament_ids'])
        && is_array($_REQUEST['departament_ids'])
        && !empty($_REQUEST['status'])
    ) {
        $status_to = (string) $_REQUEST['status'];

        foreach ($_REQUEST['departament_ids'] as $departament_id) {
            if (!fn_check_company_id('departaments', 'departament_id', $bdepartament_id)) {
                continue;
            }
            fn_tools_update_status([
                'table'             => 'departaments',
                'status'            => $status_to,
                'id_name'           => 'departament_id',
                'id'                => $departament_id,
                'show_error_notice' => false
            ]);
        }

        if (defined('AJAX_REQUEST')) {
            $redirect_url = fn_url('departaments.manage_departaments');
            if (isset($_REQUEST['redirect_url'])) {
                $redirect_url = $_REQUEST['redirect_url'];
            }
            Tygh::$app['ajax']->assign('force_redirection', $redirect_url);
            Tygh::$app['ajax']->assign('non_ajax_notifications', true);
            return [CONTROLLER_STATUS_NO_CONTENT];
        }
    }

} elseif ($mode == 'add_departament' || $mode == 'update_departament') {
    
    $departament_id = !empty($_REQUEST['departament_id']) ? $_REQUEST['departament_id'] : 0;
    $departament_data = fn_get_departament_data($departament_id , DESCR_SL);

    if (empty($departament_data) && $mode == 'update') {
        return [CONTROLLER_STATUS_NO_PAGE];
    }

    Tygh::$app['view']->assign([
        'departament_data' => $departament_data,
        'd_info' => !empty($departament_data['director_id']) ? fn_get_user_short_info($departament_data['director_id']) : [],
        'w_info' => !empty($departament_data['workers_id']) ? fn_get_user_short_info($departament_data['workers_id']) : []
    ]);

} elseif ($mode === 'manage_departaments') {
    
    list($departaments, $search) = fn_get_departaments($_REQUEST, 4, DESCR_SL);

    $page = $search['page'];
    $valid_page = db_get_valid_page($page, $search['items_per_page'], $search['total_items']);

    Tygh::$app['view']->assign('departaments', $departaments);
    Tygh::$app['view']->assign('search', $search);

}