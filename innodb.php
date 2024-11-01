<?php
/*
Plugin Name: Use InnoDB
Description: Increases performance by changing the storage engine of the options table from MyISAM to InnoDB.
Author: WPChef
Author URI: https://wpchef.org
Version: 1.0.2
Text Domain: use-innodb
*/

define( 'INNODB_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

register_activation_hook( __FILE__, array( 'InnoDB', 'on_activate' ) );

/**
 * Class InnoDB
 */
class InnoDB {

    /**
     * Init plugin.
     */
    public static function init() {
        self::register_actions();
    }

    /**
     * Register WP actions
     */
    private static function register_actions() {}

    /**
     * Run when the plugin is activated.
     */
    public static function on_activate() {

        global $wpdb;

        $table_info = $wpdb->get_row( "SHOW TABLE STATUS WHERE Name = '{$wpdb->options}'" );

        if( is_object( $table_info ) && isset( $table_info->Engine ) ) {

            if( 'myisam' === strtolower( $table_info->Engine ) ) {

                $query_result = $wpdb->query( "ALTER TABLE {$wpdb->options} ENGINE = InnoDB;" );

            }

        }

    }

}

InnoDB::init();