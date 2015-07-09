<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Ireland
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Ireland to Event Espresso 4.
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

function ee_ireland_states_provinces_activate() {
  $installed = get_option( 'ee_ireland_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('IE', 'IE-CW', 'Carlow', 1),
    ('IE', 'IE-CN', 'Cavan', 1),
    ('IE', 'IE-CE', 'Clare', 1),
    ('IE', 'IE-CO', 'Cork', 1),
    ('IE', 'IE-DL', 'Donegal', 1),
    ('IE', 'IE-D', 'Dublin', 1),
    ('IE', 'IE-G', 'Galway', 1),
    ('IE', 'IE-KY', 'Kerry', 1),
    ('IE', 'IE-KE', 'Kildare', 1),
    ('IE', 'IE-KK', 'Kilkenny', 1),
    ('IE', 'IE-LS', 'Laois', 1),
    ('IE', 'IE-LM', 'Leitrim', 1),
    ('IE', 'IE-LK', 'Limerick', 1),
    ('IE', 'IE-LD', 'Longford', 1),
    ('IE', 'IE-LH', 'Louth', 1),
    ('IE', 'IE-MO', 'Mayo', 1),
    ('IE', 'IE-MH', 'Meath', 1),
    ('IE', 'IE-MN', 'Monaghan', 1),
    ('IE', 'IE-OY', 'Offaly', 1),
    ('IE', 'IE-RN', 'Roscommon', 1),
    ('IE', 'IE-SO', 'Sligo', 1),
    ('IE', 'IE-TA', 'Tipperary', 1),
    ('IE', 'IE-WD', 'Waterford', 1),
    ('IE', 'IE-WH', 'Westmeath', 1),
    ('IE', 'IE-WX', 'Wexford', 1),
    ('IE', 'IE-WW', 'Wicklow', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_ireland_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_ireland_states_provinces_activate' );
