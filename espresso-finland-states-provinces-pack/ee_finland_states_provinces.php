<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Finland
  Plugin URI: http://www.eventespresso.com
  Description: This plugin adds Finland States/Provinces to Event Espresso 4.
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

function ee_finland_states_provinces_activate() {
  $installed = get_option( 'ee_finland_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('FI', 'FI-01', 'Ahvenanmaan maakunta', 1),
    ('FI', 'FI-02', 'Etelä-Karjala', 1),
    ('FI', 'FI-03', 'Etelä-Pohjanmaa', 1),
    ('FI', 'FI-04', 'Etelä-Savo', 1),
    ('FI', 'FI-05', 'Kainuu', 1),
    ('FI', 'FI-06', 'Kanta-Häme', 1),
    ('FI', 'FI-07', 'Keski-Pohjanmaa', 1),
    ('FI', 'FI-08', 'Keski-Suomi', 1),
    ('FI', 'FI-09', 'Kymenlaakso', 1),
    ('FI', 'FI-10', 'Lappi', 1),
    ('FI', 'FI-11', 'Pirkanmaa', 1),
    ('FI', 'FI-12', 'Pohjanmaa', 1),
    ('FI', 'FI-13', 'Pohjois-Karjala', 1),
    ('FI', 'FI-14', 'Pohjois-Pohjanmaa', 1),
    ('FI', 'FI-15', 'Pohjois-Savo', 1),
    ('FI', 'FI-16', 'Päijät-Häme', 1),
    ('FI', 'FI-17', 'Satakunta', 1),
    ('FI', 'FI-18', 'Uusimaa', 1),
    ('FI', 'FI-19', 'Varsinais-Suomi', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_finland_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_finland_states_provinces_activate' );
