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

} if ($mode == 'departaments_views') {


        // Save current url to session for 'Continue shopping' button
        Tygh::$app['session']['continue_url'] = "departaments.departaments_views";

        $params = $_REQUEST;

        $params['user_id'] = Tygh::$app['session']['auth']['user_id'];
    //fn_print_die(Tygh::$app['session']['auth']['user_id']);
        list($departaments, $search) = fn_get_departaments($params, Registry::get('settings.Appearance.products_per_page'), CART_LANGUAGE);

        //$selected_layout = fn_get_products_layout($_REQUEST);
       
        Tygh::$app['view']->assign('departaments', $departaments);
        Tygh::$app['view']->assign('search', $search);
        Tygh::$app['view']->assign('columns', 3);

        fn_add_breadcrumb(__("departaments"));
        // [/Breadcrumbs]

} elseif ($mode === 'departament') {
    $departament_data = [];
    $departament_id = !empty($_REQUEST['departament_id']) ? $_REQUEST['departament_id'] : 0;
    $departament_data = fn_get_departament_data($departament_id , CART_LANGUAGE);
//fn_print_die($departament_data);
    if (empty($departament_data)) {
        return [CONTROLLER_STATUS_NO_PAGE];
    }
    foreach ($departaments as $departament => $key) {
        if($key['director_id']) {
            $departaments[$departament]['director_id'] = fn_get_user_short_info($departaments[$departament]['director_id']);
        } else {
            $departaments[$departament]['director_id'] = '';
        }
        $departaments = $departaments;
    }
    foreach ($departament_data['workers_ids'] as $worker => $id) {
        $departament_data['workers_ids'][$worker] = fn_get_user_short_info($id);
        $worker++;
    }
    Tygh::$app['view']->assign('workers', $departament_data['workers_ids']);
    Tygh::$app['view']->assign('departament_data', $departament_data);

    fn_add_breadcrumb(__("departaments"), [$departament_data['departament']]);

    
}