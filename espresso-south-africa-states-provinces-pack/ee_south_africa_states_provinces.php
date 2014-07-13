<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: South Africa
  Plugin URI: http://www.eventespresso.com
  Description: The Event Espresso New Addon adds South Africa States/Provinces to Event Espresso 4
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

function ee_south_africa_states_provinces_activate() {
  $installed = get_option( 'ee_south_africa_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('ZA', 'ZA-EC', 'Eastern Cape', 1),
    ('ZA', 'ZA-FS', 'Free State', 1),
    ('ZA', 'ZA-GT', 'Gauteng', 1),
    ('ZA', 'ZA-NL', 'KwaZulu-Natal', 1),
    ('ZA', 'ZA-LP', 'Limpopo', 1),
    ('ZA', 'ZA-MP', 'Mpumalanga', 1),
    ('ZA', 'ZA-NC', 'Northern Cape', 1),
    ('ZA', 'ZA-NW', 'North-West', 1),
    ('ZA', 'ZA-WC', 'Western Cape', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_south_africa_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_south_africa_states_provinces_activate' );