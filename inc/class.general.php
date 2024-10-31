<?php

if ( ! class_exists( 'Page_Template_Column_General' ) ) {

    /**
     * The general/main class for the plugin
     * 
     * @since 1.0.0
     */
    class Page_Template_Column_General {

        /**
         * Add filters/actions
         * 
         * @since 1.0.0
         */
        function __construct() {

            add_action( 'init', array( $this, 'load_textdomain' ) );
            add_filter( 'manage_pages_columns', array( $this, 'add_column' ), 10, 1 );
            add_action( 'manage_pages_custom_column', array( $this, 'display_column' ), 10, 2 );

        }

        /**
         * Translations
         * 
         * @since 1.0.0
         */
        function load_textdomain() {

            load_plugin_textdomain( 'page-template-column', false, PAGE_TEMPLATE_COLUMN_DIR_NAME . '/languages' ); 

        }

        /**
         * Add column
         * 
         * @since 1.0.0
         */
        function add_column( $columns ) {

            $custom_columns = array(
                'page-template-column' => __( 'Template', 'page-template-column' )
            );
        
            $columns = array_merge( $columns, $custom_columns );
        
            return $columns;

        }

        /**
         * Display column
         * 
         * @since 1.0.0
         */
        function display_column( $column, $post_id ) {

            if ( $column == 'page-template-column' ) {
                echo basename( get_page_template() );
            }

        }

    }

}

new Page_Template_Column_General();