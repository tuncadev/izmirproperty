<?php 
$header_width = houzez_option('header_4_width');
if( houzez_is_splash() ) {
	$header_width = houzez_option('splash_layout');
}
if(houzez_is_half_map()) {
    $header_width = 'container-fluid';
}
$sticky_header = houzez_option('main-menu-sticky', 0);
?>
<div id="header-section" class="header-desktop header-v4" data-sticky="<?php echo intval($sticky_header); ?>">
	<div class="<?php echo esc_attr($header_width); ?>">
		<div class="header-inner-wrap">
			<div class="navbar d-flex align-items-center">

				<?php get_template_part('template-parts/header/partials/logo'); ?>

				<nav class="main-nav on-hover-menu navbar-expand-lg flex-grow-1">
					<?php get_template_part('template-parts/header/partials/nav'); ?>
				</nav><!-- main-nav -->
				<?php
$currency_switcher_enable = houzez_option('currency_switcher_enable');
$is_multi_currency = houzez_option('multi_currency');
if( $is_multi_currency != 1 ) {
    if (class_exists('FCC_Rates')) {

        $supported_currencies = houzez_get_list_of_supported_currencies();

        if (0 < count($supported_currencies)) {

            $current_currency = houzez_get_wpc_current_currency();
            ?>
			<div class="switcher-wrap currency-switcher-wrap">
				<button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span><?php echo esc_attr($current_currency); ?></span>
				</button>
				<ul id="hz-currency-switcher-list" class="dropdown-menu" aria-labelledby="dropdown">
					<?php
					foreach ($supported_currencies as $currency_code) {
		                echo '<li data-currency-code="' . esc_attr($currency_code) . '">' . esc_attr($currency_code) . '</li>';
		            }
					?>
				</ul>
				<input type="hidden" id="hz-switch-to-currency" value="<?php echo esc_attr($current_currency); ?>" />
			</div><!-- currency-switcher-wrap -->
			<?php
		}
    }
}
?>
				<?php get_template_part('template-parts/header/user-nav'); ?>

			</div><!-- navbar -->
		</div><!-- header-inner-wrap -->
	</div><!-- .container -->    
</div><!-- .header-v1 -->