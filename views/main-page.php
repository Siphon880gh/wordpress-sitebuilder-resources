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

<div class="resource-panel">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-3 typing-animation">WordPress Core Resources</h2>
        <p class="text-gray-600 text-lg">Essential WordPress development and support resources to help you build better websites.</p>
    </div>

    <div class="resource-grid">
        <div class="resource-card">
            <div class="card-icon wordpress floating-icon">
                <i class="fab fa-wordpress"></i>
            </div>
            <h3 class="card-title">Developer Resources</h3>
            <p class="card-description">
                Comprehensive documentation, code references, and best practices for WordPress developers.
            </p>
            <a href="https://developer.wordpress.org/" target="_blank" class="card-link">
                Explore Documentation
            </a>
        </div>

        <div class="resource-card">
            <div class="card-icon wordpress floating-icon">
                <i class="fas fa-users"></i>
            </div>
            <h3 class="card-title">Support Forums</h3>
            <p class="card-description">
                Get help from the WordPress community, ask questions, and share your knowledge with others.
            </p>
            <a href="https://wordpress.org/support/" target="_blank" class="card-link">
                Visit Forums
            </a>
        </div>

        <div class="resource-card">
            <div class="card-icon wordpress floating-icon">
                <i class="fas fa-hammer"></i>
            </div>
            <h3 class="card-title">Make WordPress</h3>
            <p class="card-description">
                Join the contributor community and help improve WordPress for millions of users worldwide.
            </p>
            <a href="https://make.wordpress.org/" target="_blank" class="card-link">
                Start Contributing
            </a>
        </div>

        <div class="resource-card">
            <div class="card-icon wordpress floating-icon">
                <i class="fas fa-book"></i>
            </div>
            <h3 class="card-title">Codex</h3>
            <p class="card-description">
                The online manual for WordPress with comprehensive guides and tutorials for all skill levels.
            </p>
            <a href="https://codex.wordpress.org/" target="_blank" class="card-link">
                Browse Codex
            </a>
        </div>

        <div class="resource-card">
            <div class="card-icon wordpress floating-icon">
                <i class="fas fa-plug"></i>
            </div>
            <h3 class="card-title">Plugin Directory</h3>
            <p class="card-description">
                Discover thousands of free plugins to extend your WordPress site's functionality.
            </p>
            <a href="https://wordpress.org/plugins/" target="_blank" class="card-link">
                Find Plugins
            </a>
        </div>

        <div class="resource-card">
            <div class="card-icon wordpress floating-icon">
                <i class="fas fa-palette"></i>
            </div>
            <h3 class="card-title">Theme Directory</h3>
            <p class="card-description">
                Browse beautiful, responsive WordPress themes to give your site a professional look.
            </p>
            <a href="https://wordpress.org/themes/" target="_blank" class="card-link">
                Browse Themes
            </a>
        </div>
    </div>
</div>
