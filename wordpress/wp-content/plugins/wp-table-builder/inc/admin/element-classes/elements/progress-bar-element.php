<?php

namespace WP_Table_Builder\Inc\Admin\Element_Classes\Elements;

use WP_Table_Builder\Inc\Admin\Managers\Controls_Manager;
use WP_Table_Builder\Inc\Admin\Element_Classes\Base\Dummy_Element_base;
use WP_Table_Builder as NS;

/**
 * Class Progress_Bar_Element dummy
 *
 * Dummy pro element.
 * @package WP_Table_Builder\Inc\Admin\Element_Classes\Elements
 */
class Progress_Bar_Element extends Dummy_Element_base {

    /**
     * Name for dummy element.
     * @return string dummy name
     */
    public function dummy_name() {
        return 'progress_bar';
    }

    /**
     * Get element title.
     * @return string element title
     */
    public function get_title() {
        return esc_html_e('Progress Bar', 'wp-table-builder');
    }

    /**
     * Get directory icon.
     *
     * Retrieve directory item icon.
     *
     * @return string Directory Item icon.
     * @since 1.1.2
     * @access public
     *
     */
    public function get_directory_icon() {
        return wp_normalize_path(NS\WP_TABLE_BUILDER_DIR . 'inc/admin/views/builder/icons/progress-bar.svg');
    }

    /**
     * Get url icon.
     *
     * Return url icon.
     *
     * @return string Url Item icon.
     * @since 1.1.2
     * @access public
     *
     */
    public function get_url_icon() {
        return wp_normalize_path(NS\WP_TABLE_BUILDER_URL . 'inc/admin/views/builder/icons/progress-bar.svg');
    }
}
