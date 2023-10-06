<?php 
$current_tab = isset($_GET['page']) ? esc_attr($_GET['page']) : '';

$tabs = array(
	'houzez_plugins' => esc_html__('Plugins', 'houzez-child'),
	'houzez_fbuilder' => esc_html__('Fields Builder', 'houzez-child'),
	'houzez_post_types' => esc_html__('Post Types', 'houzez-child'),
	'houzez_taxonomies' => esc_html__('Taxonomies', 'houzez-child'),
	'houzez_permalinks' => esc_html__('Permalinks', 'houzez-child'),
	'fcc_api_settings' => esc_html__('Currency Switcher', 'houzez-child'),
	'houzez_currencies' => esc_html__('Currencies', 'houzez-child'),
	'houzez_help' => esc_html__('Documentation', 'houzez-child'),
	'houzez_feedback' => esc_html__('Feedback', 'houzez-child'),
	'houzez_purchase' => esc_html__('Purchase Code', 'houzez-child'),

);

if( ! class_exists('Houzez') ) {
	unset($tabs['houzez_fbuilder']);
	unset($tabs['houzez_post_types']);
	unset($tabs['houzez_taxonomies']);
	unset($tabs['houzez_permalinks']);
	unset($tabs['fcc_api_settings']);
	unset($tabs['houzez_currencies']);
	unset($tabs['houzez_purchase']);
}
?>
<h2 class="nav-tab-wrapper admin-houzez-nav-tab-wrapper">
	<?php 
	foreach( $tabs as $slug => $name ) { 

		$active_tab = ( $current_tab === $slug ) ? ' nav-tab-active' : '';
		?>
		<a href="?page=<?php echo esc_attr($slug); ?>" class="nav-tab <?php echo esc_attr($active_tab);?>"><?php echo esc_attr($name); ?></a>
	<?php } ?>
</h2>