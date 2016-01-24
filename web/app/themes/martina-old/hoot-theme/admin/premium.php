<?php
/**
 * Premium Theme Options displayed in admin
 *
 * @package hoot
 * @subpackage responsive-brix
 * @since responsive-brix 1.0
 * @return array Return Hoot Options array to be merged to the original Options array
 */

$hoot_options_premium = array();

$hoot_options_premium[] = array(
		'std' => sprintf( __("%1sUpgrade to Responsive Brix Premium%2sIf you've enjoyed using Responsive Brix, you're going to love Responsive Brix Premium. It's a robust upgrade to Responsive Brix that gives you useful features.", 'hoot'), '<h4 class="heading">', '</h4>' ) );

$hoot_options_premium[] = array(
		'name' => __('Complete Style Customization', 'hoot'),
		'desc' => __('Responsive Brix Premium lets you select different colors for different sections of your site.<hr>Assign different typography (fonts, text size, font color) to menu, topbar, content headings, sidebar, footer etc.', 'hoot'),
		'img' => 'premium-style.jpg',
		);

$hoot_options_premium[] = array(
		'name' => __('Unlimites Sliders, Unlimites Slides', 'hoot'),
		'desc' => __('Responsive Brix Premium allows you to create unlimited sliders with as many slides as you need.<hr>You can use these sliders on your Homepage widgetized template, or add them anywhere using shortcodes - like in your Posts, Sidebars or Footer.', 'hoot'),

		'img' => 'premium-sliders.jpg',
		);

$hoot_options_premium[] = array(
		'name' => __('600+ Google Fonts', 'hoot'),
		'desc' => __("With the integrated Google Fonts library, you can find the fonts that match your site's personality, and there's over 600 options to choose from.", 'hoot'),
		'img' => 'premium-googlefonts.jpg',
		);

$hoot_options_premium[] = array(
		'name' => __('Shortcodes with Easy Generator', 'hoot'),
		'desc' => __('Enjoy the flexibility of using shortcodes throughout your site with Responsive Brix premium. These shortcodes were specially designed for this theme and are very well integrated into the code to reduce loading times, thereby maximizing performance!<hr>Use shortcodes to insert buttons, sliders, tabs, toggles, columns, breaks, icons, lists, and a lot more design and layout modules.<hr>The intuitive Shortcode Generator has been built right into the Edit screen, so you dont have to hunt for shortcode syntax.', 'hoot'),
		'img' => 'premium-shortcodes.jpg',
		);

$hoot_options_premium[] = array(
		'name' => __('Image Carousals', 'hoot'),
		'desc' => __('Add carousals to your post, in your sidebar, on your frontpage or in your footer. A simple drag and drop interface allows you to easily create and manage carousals.', 'hoot'),
		'img' => 'premium-carousals.jpg',
		);

$hoot_options_premium[] = array(
		'name' => __("Floating 'Sticky' Header &amp; 'Goto Top' button (optional)", 'hoot'),
		'desc' => __("The floating header follows the user down your page as they scroll, which means they never have to scroll back up to access your navigation menu, improving user experience.<hr>Or, use the 'Goto Top' button appears on the screen when users scroll down your page, giving them a quick way to go back to the top of the page.", 'hoot'),
		'img' => 'premium-header-top.jpg',
		);

$hoot_options_premium[] = array(
		'name' => __('3 Blog Layouts (including pinterest type mosaic)', 'hoot'),
		'desc' => __('Responsive Brix Premium gives you the option to display your post archives in 3 different layouts including a mosaic type layout similar to pinterest.', 'hoot'),
		'img' => 'premium-blogstyles.jpg',
		);

$hoot_options_premium[] = array(
		'name' => __('Custom Widgets', 'hoot'),
		'desc' => __('Custom widgets crafted and designed specifically for Responsive Brix Premium Theme to give you the flexibility of adding stylized content.', 'hoot'),
		'img' => 'premium-widgets.jpg',
		);

$hoot_options_premium[] = array(
		'name' => __('Menu Icons', 'hoot'),
		'desc' => __('Select from over 500 icons for your main navigation menu links.', 'hoot'),
		'img' => 'premium-menuicons.jpg',
		);

$hoot_options_premium[] = array(
		'name' => __('Premium Background Patterns (CC0)', 'hoot'),
		'desc' => __('Responsive Brix Premium comes with many additional premium background patterns. You can always upload your own background image/pattern to match your site design.', 'hoot'),
		'img' => 'premium-backgrounds.jpg',
		);

$hoot_options_premium[] = array(
		'name' => __('Automatic Image Lightbox and WordPress Gallery', 'hoot'),
		'desc' => __('Automatically open image links on your site with the integrates lightbox in Responsive Brix Premium.<hr>Automatically convert standard WordPress galleries to beautiful lightbox gallery slider.', 'hoot'),
		'img' => 'premium-lightbox.jpg',
		);

$hoot_options_premium[] = array(
		'name' => __('Developers love {LESS}', 'hoot'),
		'desc' => __('CSS is passe. Developers love the modularity and ease of using LESS, which is why Responsive Brix Premium comes with properly organized LESS files for the main stylesheet. You can even turn on less.js during development to increase productivity.', 'hoot'),
		'img' => 'premium-lesscss.jpg',
		);

$hoot_options_premium[] = array(
		'name' => __('Easy Import/Export', 'hoot'),
		'desc' => __('Moving to a new host? Easily import/export your admin panel settings with just a few clicks - right from the backend.', 'hoot'),
		'img' => 'premium-import-export.jpg',
		);

$hoot_options_premium[] = array(
		'std' => sprintf( __("%1sCustom Javascript &amp; Google Analytics%2sEasily insert any javascript snippet to your header without modifying the code files. This helps in adding scripts for Google Analytics, Adsense or any other custom code.", 'hoot'), '<h4 class="heading">', '</h4>' ) );

$hoot_options_premium[] = array(
		'std' => sprintf( __("%1sCustom CSS%2sAdd custom CSS to your theme right from the backend. If you are not a developer yourself, you can count on our support staff to help you with CSS snippets to get the look you're after. Best of all, your changes will persist across theme updates.", 'hoot'), '<h4 class="heading">', '</h4>' ) );

$hoot_options_premium[] = array(
		'std' => sprintf( __("%1sContinued Updates%2sYou'll help support the continued development of Responsive Brix - ensuring it works with future versions of WordPress for years to come.", 'hoot'), '<h4 class="heading">', '</h4>' ) );

$hoot_options_premium[] = array(
		'name' => __('Premium Priority Support', 'hoot'),
		'desc' => __('Need help setting up Responsive Brix? Upgrading to Responsive Brix Premium gives you prioritized forum support. We have a growing support team ready to help you with your questions.', 'hoot'),
		'img' => 'premium-support.jpg',
		);

$hoot_options_premium[] = array(
		'std' => '<a class="button button-primary button-buy-premium" href="http://wphoot.com/themes/responsive-brix/" target="_blank">' . __('Buy Now', 'hoot') . '</a>', );

return $hoot_options_premium;