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

function fn_get_departament_data($departament_id = 0, $lang_code = CART_LANGUAGE) 
{
    $departament = [];
    if (!empty($departament_id)){
        list($departaments) = fn_get_departaments([
            'departament_id' => $departament_id
        ], 1, $lang_code);

        if (!empty($departaments)) {
            $departament = reset($departaments);
            $departament['workers_ids'] = fn_departament_get_links($departament['departament_id']);
        }
    }
    return $departament;
}

function fn_get_departaments($params = [], $items_per_page = 0, $lang_code = CART_LANGUAGE) 
{
   // Set default values to input params
   $default_params = array(
    'page' => 1,
    'items_per_page' => $items_per_page
);

$params = array_merge($default_params, $params);

if (AREA == 'C') {
    $params['status'] = 'A';
}

$sortings = array(
    'timestamp' => '?:departaments.timestamp',
    'name' => '?:departaments_descriptions.departament',
    'status' => '?:departaments.status',
);

$condition = $limit = $join = '';

if (!empty($params['limit'])) {
    $limit = db_quote(' LIMIT 0, ?i', $params['limit']);
}

$sorting = db_sort($params, $sortings, 'name', 'asc');

if (!empty($params['item_ids'])) {
    $condition .= db_quote(' AND ?:departaments.departament_id IN (?n)', explode(',', $params['item_ids']));
}

if (!empty($params['name'])) {
    $condition .= db_quote(' AND ?:departaments_descriptions.departament LIKE ?l', '%' . trim($params['name']) . '%');
}

if (!empty($params['departament_id'])) {
    $condition .= db_quote(' AND ?:departaments.departament_id = ?i', $params['departament_id']);
}

if (!empty($params['status'])) {
    $condition .= db_quote(' AND ?:departaments.status = ?s', $params['status']);
}

$fields = array (
    '?:departaments.departament_id',
    '?:departaments.status',
    '?:departaments.director_id',
    '?:departaments.timestamp',
    '?:departaments_descriptions.departament',
    '?:departaments_descriptions.description',
);

$join .= db_quote(' LEFT JOIN ?:departaments_descriptions ON ?:departaments_descriptions.departament_id = ?:departaments.departament_id AND ?:departaments_descriptions.lang_code = ?s', $lang_code);

if (!empty($params['items_per_page'])) {
    $params['total_items'] = db_get_field("SELECT COUNT(*) FROM ?:departaments $join WHERE 1 $condition");
    $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
}

$departaments = db_get_hash_array(
    "SELECT ?p FROM ?:departaments " .
    $join .
    "WHERE 1 ?p ?p ?p",
    'departament_id', implode(', ', $fields), $condition, $sorting, $limit
);

$departament_image_ids = array_keys($departaments);
$images = fn_get_image_pairs($departament_image_ids, 'departament', 'M', true, false, $lang_code);

foreach ($departaments as $departament_id => $departament) {
    $departaments[$departament_id]['main_pair'] = !empty($images[$departament_id]) ? reset($images[$departament_id]) : array();
}

return array($departaments, $params);
}

function fn_update_departament($data, $departament_id, $lang_code = DESCR_SL)
{

    if (isset($data['timestamp'])) {
        $data['timestamp'] = fn_parse_date($data['timestamp']);
    }

    if (!empty($departament_id)) {
        db_query("UPDATE ?:departaments SET ?u WHERE departament_id = ?i", $data, $departament_id);
        db_query("UPDATE ?:departaments_descriptions SET ?u WHERE departament_id = ?i AND lang_code = ?s", $data, $departament_id, $lang_code);

    } else {
        $departament_id = $data['departament_id'] = db_replace_into('departaments', $data);

        foreach (Languages::getAll() as $data['lang_code'] => $v) {
            db_query("REPLACE INTO ?:departaments_descriptions ?e", $data);
        }

    } if (!empty($departament_id)) {
        fn_attach_image_pairs('departament_main', 'departament', $departament_id, $lang_code);
    } 

    $workers_ids = !empty($data['workers_ids']) ? $data['workers_ids'] : [];
    fn_departament_delete_links($departament_id);
    fn_departament_add_links($departament_id, $workers_ids);

    return $departament_id;
} 
function fn_delete_departament($departament_id)
{

    if (!empty($departament_id)) {
        $res = db_query("DELETE FROM ?:departaments WHERE departament_id = ?i", $departament_id);
        db_query("DELETE FROM ?:departaments_descriptions WHERE departament_id = ?i", $departament_id);
        fn_delete_image_pairs($departament_id, 'departament');
        fn_departament_delete_links($departament_id);
    }
}
function fn_departament_delete_links($departament_id)
{
    db_query("DELETE FROM ?:departament_links WHERE departament_id = ?i", $departament_id);
}
function fn_departament_add_links($departament_id, $workers_ids)
{
    if (!empty($workers_ids)) {
        $workers_ids = explode(',',$workers_ids);
        foreach ($workers_ids as $workers_id) {
            db_query("REPLACE INTO ?:departament_links ?e", [
                'workers_id' => $workers_id,
                'departament_id' => $departament_id,
            ]);
        }
    }
}
function fn_departament_get_links($departament_id)
{
    return !empty($departament_id) ? db_get_fields('SELECT workers_id FROM ?:departament_links WHERE departament_id = ?i', $departament_id) : [];
}