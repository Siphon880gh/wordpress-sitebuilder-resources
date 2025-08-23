<?php
/**
 * Plugin Name: WF Resources
 * Plugin URI: https://domain.com/wf-wp-resources
 * Description: Help documentation inside WP Admin Dashboard for Wordpress and the most common site builders like Gutenberg, Classic Editor, WPBakery, and Elementor Pro.
 * Version: 1.1.0
 * Author: Weng Fei Fung
 * Author URI: https://domain.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wf-wordpress-resources
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    exit;
}

class WF_Resources {

    public function __construct() {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_styles'));
    }

    /**
     * Enqueue admin styles
     */
    public function enqueue_admin_styles($hook) {
        // Only load on our plugin's admin pages
        if (strpos($hook, 'wf-wordpress-resources') !== false) {
            wp_enqueue_style(
                'wf-resources-styles',
                plugin_dir_url(__FILE__) . 'css/plugins.css',
                array(),
                '1.1.0'
            );
        }
    }

    /**
     * Add a top-level menu in the admin sidebar
     */
    public function add_admin_menu() {
        add_menu_page(
            __('WordPress Resources', 'wf-wordpress-resources'), // Page title
            __('WordPress Resources', 'wf-wordpress-resources'), // Menu title
            'manage_options',                              // Capability
            'wf-wordpress-resources',                      // Menu slug
            array($this, 'render_resources_page'),         // Callback
            'dashicons-wordpress-alt',                     // Icon
            25                                             // Position
        );
    }
    
    public function render_resources_page() {
        // Default tab is "general" if none selected
        $active_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : 'general';
        ?>
    
        <div class="wrap">
            <h1><?php esc_html_e('WordPress Resources', 'wf-wordpress-resources'); ?></h1>
    
            <h2 class="nav-tab-wrapper">
                <a href="?page=wf-wordpress-resources&tab=wp"
                   class="nav-tab <?php echo $active_tab === 'wp' ? 'nav-tab-active' : ''; ?>">
                    Wordpress
                </a>
                <a href="?page=wf-wordpress-resources&tab=gutenberg"
                   class="nav-tab <?php echo $active_tab === 'gutenberg' ? 'nav-tab-active' : ''; ?>">
                    Gutenberg
                </a>
                <a href="?page=wf-wordpress-resources&tab=wpbakery"
                   class="nav-tab <?php echo $active_tab === 'wpbakery' ? 'nav-tab-active' : ''; ?>">
                    WPBakery
                </a>
            </h2>
    
            <div class="tab-content">
                <?php
                if ($active_tab === 'wp') {
                    include plugin_dir_path(__FILE__) . 'views/main-page.php';
                }
    
                else if ($active_tab === 'gutenberg') {
                    include plugin_dir_path(__FILE__) . 'views/gutenberg-page.php';
                }
    
                else if ($active_tab === 'wpbakery') {
                    include plugin_dir_path(__FILE__) . 'views/wpbakery-page.php';
                }

                else {
                    echo '
                        <p>Welcome to Weng\'s help documents! Click a tab to continue.</p>
                        ';
                }
                ?>
            </div>
        </div>
        <?php
    }
}

/**
 * Initialize the plugin
 */
function wff_add_resources() {
    new WF_Resources();
}
add_action('plugins_loaded', 'wff_add_resources');

