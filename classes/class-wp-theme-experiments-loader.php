<?php
class WPThemeExperimentsLoader {

    /**
     * Setup the plugin
     */
    static public function init() {
        add_filter('template_include', 'WPThemeExperimentsLoader::filter_template');
    }

    /**
     * Swap out the template
     */
    static public function filter_template($path) {
        global $original_path;

        $original_path = $path;
        return dirname(dirname(__file__)) . '/includes/document.php';
    }
}
WPThemeExperimentsLoader::init();
