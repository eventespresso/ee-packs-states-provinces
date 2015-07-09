<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Germany
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Germany to Event Espresso 4.
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

function ee_germany_states_provinces_activate() {
  $installed = get_option( 'ee_germany_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('DE', 'BW', 'Baden-Württemberg', 1),
    ('DE', 'BY', 'Bayern', 1),
    ('DE', 'BE', 'Berlin', 1),
    ('DE', 'BB', 'Brandenburg', 1),
    ('DE', 'HB', 'Bremen', 1),
    ('DE', 'HH', 'Hamburg', 1),
    ('DE', 'HE', 'Hessen', 1),
    ('DE', 'MV', 'Mecklenburg-Vorpommern', 1),
    ('DE', 'NI', 'Niedersachsen', 1),
    ('DE', 'NW', 'Nordrhein-Westfalen', 1),
    ('DE', 'RP', 'Rheinland-Pfalz', 1),
    ('DE', 'SL', 'Saarland', 1),
    ('DE', 'SN', 'Sachsen', 1),
    ('DE', 'ST', 'Sachsen-Anhalt', 1),
    ('DE', 'SH', 'Schleswig-Holstein', 1),
    ('DE', 'TH', 'Thüringen', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_germany_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_germany_states_provinces_activate' );
