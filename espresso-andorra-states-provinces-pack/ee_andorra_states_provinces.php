<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Andorra
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Andorra to Event Espresso 4.
  version: 1.0
  Author: Event Espresso
  Author URI: http://www.eventespresso.com
  Copyright 2014 Event Espresso (email : support@eventespresso.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, Version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA02110-1301USA
*/

function ee_andorra_states_provinces_activate() {
  $installed = get_option( 'ee_andorra_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('AD', 'AD-07', 'Andorra la Vella', 1),
    ('AD', 'AD-02', 'Canillo', 1),
    ('AD', 'AD-03', 'Encamp', 1),
    ('AD', 'AD-08', 'Escaldes-Engordany', 1),
    ('AD', 'AD-04', 'La Massana', 1),
    ('AD', 'AD-05', 'Ordino', 1),
    ('AD', 'AD-06', 'Sant Julià de Lòria', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_andorra_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_andorra_states_provinces_activate' );
