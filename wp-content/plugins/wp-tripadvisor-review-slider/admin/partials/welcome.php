<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    WP_FB_Reviews
 * @subpackage WP_FB_Reviews/admin/partials
 */
 
     // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
?>

<div class="wrap wp_tripadvisor-settings" id="">
<h1></h1>
	<img src="<?php echo plugin_dir_url( __FILE__ ) . 'logo.png'; ?>">
<?php 
include("tabmenu.php");
?>
<div class="wptripadvisor_margin10">
<div class="w3-col m8 welcomediv">

	<h3>Welcome! </h3>
	<p>Thank you for being an awesome WP Review Slider customer! If you have trouble, please don't hesitate to contact me. </p>
	<h3>Getting Started: </h3>
	<p>1) Use the "Get TripAdvisor Reviews" Page to Download your reviews and save them to your database.</p>
	<p>2) Once downloaded, all the reviews should show up on the "Review List" page of the plugin. </p>
	<p>3) Create a Review Slider or Grid for your site on the "Templates" page. By default the review template will show all your reviews, you can use the filters to only show the reviews you want. </p>
	
	If you have any trouble please check the <a href="https://wordpress.org/support/plugin/wp-tripadvisor-review-slider/" target="_blank">Support Forum</a> first. If you want to contact me privately you can use the form on my website <a href="https://ljapps.com/contact/">here</a>. I'm always happy to help!	</p>
	<p>Thanks!<br>Josh<br>Developer/Creator </p>

</div>

</div>
</div>
	

