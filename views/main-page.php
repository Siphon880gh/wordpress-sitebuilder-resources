<?php
/**
 * Main WordPress Resources Page View
 * 
 * @package WF_Resources
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="wrap">
    <h1><?php esc_html_e('WordPress Resources', 'wf-wordpress-resources'); ?></h1>
    <p>Here are some helpful WordPress resources:</p>
    <ul>
        <li><a href="https://developer.wordpress.org/" target="_blank">WordPress Developer Resources</a></li>
        <li><a href="https://wordpress.org/support/" target="_blank">WordPress Support Forums</a></li>
        <li><a href="https://make.wordpress.org/" target="_blank">Make WordPress (Contributor Portal)</a></li>
    </ul>
</div>
