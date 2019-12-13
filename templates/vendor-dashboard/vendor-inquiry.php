<?php
/**
 * The template for displaying vendor dashboard
 *
 * Override this template by copying it to yourtheme/dc-product-vendor/vendor-dashboard/vendor-university.php
 *
 * @author 		WC Marketplace
 * @package 	WCMp/Templates
 * @version   2.2.0
 */
if (!defined('ABSPATH')) {
    // Exit if accessed directly
    exit;
}
global $woocommerce, $WCMp;

?>

<div class="col-md-12">

<?php 
    if (get_field('theme_vendor_inquiry_shortcode', 'option')):
        echo do_shortcode(get_field('theme_vendor_inquiry_shortcode', 'option'));
    endif;
?>

</div>
