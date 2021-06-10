<?php
// Add subcategories automatically
//you can add them with the filter wp_get_nav_menu_items
//*********** it works for ony depth 1 *****

add_filter("wp_get_nav_menu_items", function ($items, $menu, $args) {

// don't add child categories in administration of menus
if (is_admin()) {
return $items;
}


foreach ($items as $index => $i) {

if ("product_cat" !== $i->object) {
continue;
}


$term_children = get_term_children($i->object_id, "product_cat");


// add child categories

foreach ($term_children as $index2 => $child_id) {

$child = get_term($child_id);

$url = get_term_link($child);


$e = new \stdClass();

$e->title = $child->name;
$e->url = $url;
$e->menu_order = 500 * ($index + 1) + $index2;
$e->post_type = "nav_menu_item";
$e->post_status = "published";
$e->post_parent = $i->ID;
$e->menu_item_parent = $i->ID;
$e->type = "custom";
$e->object = "custom";
$e->description = "";
$e->object_id = 0;
$e->db_id = 0;
$e->ID = 0;
$e->classes = array();

$items[] = $e;

}


}


return $items;

}, 10, 3);










// https://wordpress.stackexchange.com/questions/340307/create-a-custom-menu-item-fetched-by-product-categories-and-sub-categories

/*function prefix_add_categories_to_menu($items, $menu, $args) {
    // Make sure we only run the code on the applicable menu
    if($menu->slug !== 'application-menu' || is_admin()) return $items;

    // Get all the product categories
    $categories = get_categories(array(
        'taxonomy' => 'product_cat',
        'orderby' => 'name',
        'show_count' => 0,
        'pad_counts' => 0,
        'hierarchical' => 1,
        'hide_empty' => 0,
        'depth' => $depth,
        'title_li' => '',
        'echo' => 0 
    ));

    $menu_items = array();
    // Create menu items
    foreach($categories as $category) {
        $new_item = (object)array(
            'ID' => intval($category->term_id),
            'db_id' => intval($category->term_id),
            'menu_item_parent' => intval($category->category_parent),
            'post_type' => "nav_menu_item",
            'object_id' => intval($category->term_id),
            'object' => "product_cat",
            'type' => "taxonomy",
            'type_label' => __("Product Category", "textdomain"),
            'title' => $category->name,
            'url' => get_term_link($category),
            'classes' => array()
        );
        array_push($menu_items, $new_item);
    }
    $menu_order = 0;
    // Set the order property
    foreach ($menu_items as &$menu_item) {
        $menu_order++;
        $menu_item->menu_order = $menu_order;
    }
    unset($menu_item);

    return $menu_items;
}


add_filter('wp_get_nav_menu_items', 'prefix_add_categories_to_menu', 10, 3);*/


// End other code





// https://www.daggerhartlab.com/dynamically-add-item-to-wordpress-menus/
       //****** it can sent menu set to menu edit  
