<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Netherlands
  Plugin URI: http://www.eventespresso.com
  Description: The Event Espresso New Addon adds Netherlands States/Provinces to Event Espresso 4
  Version: 1.0
  Author: Event Espresso
  Author URI: http://www.eventespresso.com
  Copyright 2014 Event Espresso (email : support@eventespresso.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA02110-1301USA
*/

function ee_netherlands_states_provinces_activate() {
  $installed = get_option( 'ee_netherlands_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('NL', 'DR', 'Drenthe', 1),
    ('NL', 'FL', 'Flevoland', 1),
    ('NL', 'FR', 'Friesland', 1),
    ('NL', 'GE', 'Gelderland', 1),
    ('NL', 'GR', 'Groningen', 1),
    ('NL', 'LI', 'Limburg', 1),
    ('NL', 'NB', 'Noord-Brabant', 1),
    ('NL', 'NH', 'Noord-Holland', 1),
    ('NL', 'OV', 'Overijssel', 1),
    ('NL', 'UT', 'Utrecht', 1),
    ('NL', 'ZE', 'Zeeland', 1),
    ('NL', 'ZH', 'Zuid-Holland', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_netherlands_states_provinces_added', 1, '', 'no' )

  }

}
register_activation_hook( __FILE__, 'ee_netherlands_states_provinces_activate' );
