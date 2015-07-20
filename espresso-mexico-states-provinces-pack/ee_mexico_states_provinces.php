<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Mexico
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Mexico to Event Espresso 4.
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

function ee_mexico_states_provinces_activate() {
  $installed = get_option( 'ee_mexico_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('MX', 'MX-AGU', 'Aguascalientes', 1),
    ('MX', 'MX-BCN', 'Baja California', 1),
    ('MX', 'MX-BCS', 'Baja California Sur', 1),
    ('MX', 'MX-CAM', 'Campeche', 1),
    ('MX', 'MX-CHP', 'Chiapas', 1),
    ('MX', 'MX-CHH', 'Chihuahua', 1),
    ('MX', 'MX-COA', 'Coahuila', 1),
    ('MX', 'MX-COL', 'Colima', 1),
    ('MX', 'MX-DIF', 'Distrito Federal', 1),
    ('MX', 'MX-DUR', 'Durango', 1),
    ('MX', 'MX-GUA', 'Guanajuato', 1),
    ('MX', 'MX-GRO', 'Guerrero', 1),
    ('MX', 'MX-HID', 'Hidalgo', 1),
    ('MX', 'MX-JAL', 'Jalisco', 1),
    ('MX', 'MX-MEX', 'Edo. de México', 1),
    ('MX', 'MX-MIC', 'Michoacán', 1),
    ('MX', 'MX-MOR', 'Morelos', 1),
    ('MX', 'MX-NAY', 'Nayarit', 1),
    ('MX', 'MX-NLE', 'Nuevo León', 1),
    ('MX', 'MX-OAX', 'Oaxaca', 1),
    ('MX', 'MX-PUE', 'Puebla', 1),
    ('MX', 'MX-QUE', 'Querétaro', 1),
    ('MX', 'MX-ROO', 'Quintana Roo', 1),
    ('MX', 'MX-SLP', 'San Luis Potosí', 1),
    ('MX', 'MX-SIN', 'Sinaloa', 1),
    ('MX', 'MX-SON', 'Sonora', 1),
    ('MX', 'MX-TAB', 'Tabasco', 1),
    ('MX', 'MX-TAM', 'Tamaulipas', 1),
    ('MX', 'MX-TLA', 'Tlaxcala', 1),
    ('MX', 'MX-VER', 'Veracruz', 1),
    ('MX', 'MX-YUC', 'Yucatán', 1),
    ('MX', 'MX-ZAC', 'Zacatecas', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_mexico_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_mexico_states_provinces_activate' );
