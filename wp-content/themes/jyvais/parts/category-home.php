<div class="filter-group">
	<div id="filter-icon">
		<?php include (TEMPLATEPATH . '/assets/images/filter.svg'); ?>
	</div>

<?php
$parent_cats = $wpdb->get_results("SELECT *
    FROM $wpdb->term_taxonomy
    WHERE taxonomy = 'category' AND parent = 0");

$result = (100/count($parent_cats));
echo "<div class='filter-group-list'>";
echo "<div class='row'>";
foreach ($parent_cats as $parent) {
$cat_name = get_the_category_by_ID($parent->term_id);

$thisCat = get_category($parent->term_id);
$cat_nicename = $thisCat->category_nicename;

echo '<div class="columns" style="width:'.$result.'%">';
// echo '<a href="' . get_category_link($parent->term_id) . '" title="' . sprintf(__("View all posts in %s"), $cat_name) . '">' . $cat_name . '</a>
// ';
echo '<h4 data-filter=".'.$cat_nicename.'">'.$cat_name.'</h4>';

$categories_child =get_categories(
    array( 'parent' => $parent->term_id )
);
foreach ($categories_child as $child) {


	$cat_name = get_the_category_by_ID($child->term_id);
	$thisCat = get_category($child->term_id);
	$cat_nicename = $thisCat->category_nicename;

	echo '<li data-filter=".'.$cat_nicename.'">' . $cat_name . '</a>';
}
echo "</div>";
}
echo "</div>";

?>
</div>
</div>
