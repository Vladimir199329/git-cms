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
    

    Tygh::$app['view']->assign('departament_data', $departament_data);

    fn_add_breadcrumb(__("departaments"), [$departament_data['departament']]);

    $params = $_REQUEST;
    $params['extend'] = array('description');
    $params['item_ids'] = !empty($departament_data['workers_ids']) ? implode(',', $departament_data['workers_ids']) : -1;

    if ($items_per_page = fn_change_session_param(Tygh::$app['session']['search_params'], $_REQUEST, 'items_per_page')) {
        $params['items_per_page'] = $items_per_page;
    }
    if ($sort_by = fn_change_session_param(Tygh::$app['session']['search_params'], $_REQUEST, 'sort_by')) {
        $params['sort_by'] = $sort_by;
    }
    if ($sort_order = fn_change_session_param(Tygh::$app['session']['search_params'], $_REQUEST, 'sort_order')) {
        $params['sort_order'] = $sort_order;
    }

    if (isset($params['order_ids'])) {
        $order_ids = is_array($params['order_ids']) ? $params['order_ids'] : explode(',', $params['order_ids']);
        foreach ($order_ids as $order_id) {
            /** @psalm-suppress UndefinedGlobalVariable */
            if (!fn_is_order_allowed($order_id, $auth)) {
                return [CONTROLLER_STATUS_NO_PAGE];
            }
        }
    }

    list($products, $search) = fn_get_products($params, Registry::get('settings.Appearance.products_per_page'));

    fn_filters_handle_search_result($params, $products, $search);

    fn_gather_additional_products_data($products, [
        'get_icon'      => true,
        'get_detailed'  => true,
        'get_options'   => true,
        'get_discounts' => true,
        'get_features'  => false
    ]);

    $selected_layout = fn_get_products_layout($_REQUEST);

    Tygh::$app['view']->assign('products', $products);
    Tygh::$app['view']->assign('search', $search);
    Tygh::$app['view']->assign('selected_layout', $selected_layout);
}