<?php
/**
 * Plugin Name:       Corona Bangladesh Live
 * Plugin URI:        http://corona-bd-live.herokuapp.com
 * Description:       This plugin used for get update the coronavirous live update of Bangladesh & all over the world.
 * Version:           1.2.1
 * Requires at least: 4.0
 * Requires PHP:      5.6
 * Author:            Amdadul Haq
 * Author URI:        https://codeofamdad.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

 /*
{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {URI to Plugin License}.
*/

require_once plugin_dir_path(__FILE__) . 'shortcode.php';
require_once plugin_dir_path(__FILE__) . 'widget_1.php';
require_once plugin_dir_path(__FILE__) . 'widget_2.php';
require_once plugin_dir_path(__FILE__) . 'widget_3.php';

if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

function cbdl_scripts()
{
    wp_register_script('cbdl_widget3', plugin_dir_url(__FILE__) . 'public/js/widget.min.js', [], '', true);
    wp_enqueue_script('cbdl_widget3');

    wp_register_style('cbdl_widget1', plugin_dir_url(__FILE__) . 'public/css/widget1.min.css');
    wp_register_style('cbdl_widget2', plugin_dir_url(__FILE__) . 'public/css/widget2.min.css');
    wp_register_style('cbdl_widget3', plugin_dir_url(__FILE__) . 'public/css/widget3.min.css');
    wp_register_style('cbdl_SolaimanLipi', plugin_dir_url(__FILE__) . 'public/css/SolaimanLipi.min.css');
    wp_enqueue_style('cbdl_widget1');
    wp_enqueue_style('cbdl_widget2');
    wp_enqueue_style('cbdl_widget3');
    wp_enqueue_style('cbdl_SolaimanLipi');
}

add_action('wp_enqueue_scripts', 'cbdl_scripts');

function cbdl_widget()
{
    register_widget('cbdl_widget_one');
    register_widget('cbdl_widget_two');
    register_widget('cbdl_widget_three');
}
add_action('widgets_init', 'cbdl_widget');

// Translation code by : Md. Minhazul Haque
function cbdl_enToBn($number)
{
    $bn = ['১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০'];
    $en = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];

    return str_replace($en, $bn, $number);
}

// BD API is developed by me
function cbdl_getBNStatsData()
{
    $api = 'http://corona-bd-live.herokuapp.com/api/stats';
    $args = [
        'timeout' => 60
    ];
    $request = wp_remote_get($api, $args);
    $body = wp_remote_retrieve_body($request);
    return json_decode($body);
}

function cbdl_getBNDistrictsData()
{
    $api = 'http://corona-bd-live.herokuapp.com/api/districts';
    $args = [
        'timeout' => 60
    ];
    $request = wp_remote_get($api, $args);
    $body = wp_remote_retrieve_body($request);
    return json_decode($body);
}

// World API from mathdro.id
function cbdl_getWorldData()
{
    $api = 'https://api.covid19api.com/summary';
    $args = [
        'timeout' => 60
    ];
    $request = wp_remote_get($api, $args);
    $body = wp_remote_retrieve_body($request);
    return json_decode($body);
}
