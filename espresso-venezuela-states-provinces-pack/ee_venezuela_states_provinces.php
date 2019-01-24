<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Venezuela
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Venezuela to Event Espresso 4.
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

function ee_venezuela_states_provinces_activate() {
  $installed = get_option( 'ee_venezuela_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('VE', 'VE-AB', 'Amazonas', 1),
    ('VE', 'VE-AC', 'Anzoategui', 1),
    ('VE', 'VE-AD', 'Apure', 1),
    ('VE', 'VE-AE', 'Aragua', 1),
    ('VE', 'VE-BS', 'Barinas', 1),
    ('VE', 'VE-AG', 'Bolivar', 1),
    ('VE', 'VE-BA', 'Carabobo', 1),
    ('VE', 'VE-BB', 'Cojedes', 1),
    ('VE', 'VE-BC', 'Delta Amacuro', 1),
    ('VE', 'VE-BD', 'Dependencias Federales', 1),
    ('VE', 'VE-BF', 'Distrito Capital', 1),
    ('VE', 'VE-BE', 'Falcon', 1),
    ('VE', 'VE-BG', 'Guarico', 1),
    ('VE', 'VE-CA', 'Isla Margarita', 1),
    ('VE', 'VE-CB', 'Lara', 1),
    ('VE', 'VE-CC', 'Mérida', 1),
    ('VE', 'VE-CD', 'Miranda', 1),
    ('VE', 'VE-CF', 'Monagas', 1),
    ('VE', 'VE-DA', 'Nueva Esparta', 1),
    ('VE', 'VE-DA', 'Portuguesa', 1),
    ('VE', 'VE-DB', 'Sucre', 1),
    ('VE', 'VE-DC', 'Táchira', 1),
    ('VE', 'VE-DD', 'Trujillo', 1),
    ('VE', 'VE-DE', 'Vargas', 1),
    ('VE', 'VE-FA', 'Yaracuy', 1),
    ('VE', 'VE-FE', 'Zulia', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_venezuela_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_venezuela_states_provinces_activate' );
