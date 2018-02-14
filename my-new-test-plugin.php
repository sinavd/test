<?php
/*
Plugin Name: my new test plugin
Plugin URI: http://sinavd.ir
Description: a new test plugin to learn how to make a plugin
Version: 1.0
Author: sina vadodi
Author URI: http://sinavd.ir
License: gold
*/

function add_settings_page()
{
	add_menu_page( __('تنظیمات'.'wpschool'), __('تنظیمات'. 'wpschool'), 'manage_options', 'settings', 'theme_settings_page');
}

$themename = "";
$shortname = "shortname";

$categories = get_categories('hide_empty=0&orderby=name');
$all_cats = array();
foreach($categories as $category_item)
{
	$all_cats[$category_item->cat_ID] = $category_item->cat_name;
}

array_unshift($all_cats, 'انتخاب دسته بندی');

function theme_settings_page()
{
	echo '<div class="wrap">';
	echo '<div id="icon-options-general"></div>';
	echo '<h2>';
	_e('تنظیمات wpschool');
	echo '</h2>';
	echo '<ul>';
	echo '<li>مستندات|</li>';
	echo '<li>پشتیبانی</li>';
	echo '</ul>';
	echo '<p><span>نسخه قالب</span></p>';
	echo '<div class="footer-credit">';
	echo '<p>این یک نمونه ساختنی توسط سینا ودودی است</p>';
	echo '</div>';
	echo '</div>';
}

function theme_settings_init()
{
	register_setting('theme_settings', 'theme_settings');
}

add_action('admin_menu', 'add_settings_page');
add_action('admin_init', 'theme_settings_init');
?>