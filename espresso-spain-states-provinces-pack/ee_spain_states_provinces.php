<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Spain
  Plugin URI: http://www.eventespresso.com
  Description: The Event Espresso New Addon adds Spain States/Provinces to Event Espresso 4
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

function ee_spain_states_provinces_activate() {
  $installed = get_option( 'ee_spain_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('ES', 'ES-C', 'A Coruña', 1),
    ('ES', 'ES-VI', 'Álava / Araba', 1),
    ('ES', 'ES-AB', 'Albacete', 1),
    ('ES', 'ES-A', 'Alicante / Alacant', 1),
    ('ES', 'ES-AL', 'Almería', 1),
    ('ES', 'ES-O', 'Asturias', 1),
    ('ES', 'ES-AV', 'Ávila', 1),
    ('ES', 'ES-BA', 'Badajoz', 1),
    ('ES', 'ES-PM', 'Balears', 1),
    ('ES', 'ES-B', 'Barcelona', 1),
    ('ES', 'ES-BU', 'Burgos', 1),
    ('ES', 'ES-CC', 'Cáceres', 1),
    ('ES', 'ES-CA', 'Cádiz', 1),
    ('ES', 'ES-S', 'Cantabria', 1),
    ('ES', 'ES-CS', 'Castellón / Castelló', 1),
    ('ES', 'ES-CR', 'Ciudad Real', 1),
    ('ES', 'ES-CO', 'Córdoba', 1),
    ('ES', 'ES-CU', 'Cuenca', 1),
    ('ES', 'ES-GI', 'Girona', 1),
    ('ES', 'ES-GR', 'Granada', 1),
    ('ES', 'ES-GU', 'Guadalajara', 1),
    ('ES', 'ES-SS', 'Guipúzcoa / Gipuzkoa', 1),
    ('ES', 'ES-H', 'Huelva', 1),
    ('ES', 'ES-HU', 'Huesca', 1),
    ('ES', 'ES-J', 'Jaén', 1),
    ('ES', 'ES-LO', 'La Rioja', 1),
    ('ES', 'ES-GC', 'Las Palmas', 1),
    ('ES', 'ES-LE', 'León', 1),
    ('ES', 'ES-L', 'Lleida', 1),
    ('ES', 'ES-LU', 'Lugo', 1),
    ('ES', 'ES-M', 'Madrid', 1),
    ('ES', 'ES-MA', 'Málaga', 1),
    ('ES', 'ES-MU', 'Murcia', 1),
    ('ES', 'ES-NA', 'Navarra / Nafarroa', 1),
    ('ES', 'ES-OR', 'Ourense', 1),
    ('ES', 'ES-P', 'Palencia', 1),
    ('ES', 'ES-PO', 'Pontevedra', 1),
    ('ES', 'ES-SA', 'Salamanca', 1),
    ('ES', 'ES-TF', 'Santa Cruz de Tenerife', 1),
    ('ES', 'ES-SG', 'Segovia', 1),
    ('ES', 'ES-SE', 'Sevilla', 1),
    ('ES', 'ES-SO', 'Soria', 1),
    ('ES', 'ES-T', 'Tarragona', 1),
    ('ES', 'ES-TE', 'Tereul', 1),
    ('ES', 'ES-TO', 'Toledo', 1),
    ('ES', 'ES-V', 'Valencia / València', 1),
    ('ES', 'ES-VA', 'Valladolid', 1),
    ('ES', 'ES-BI', 'Vizcaya / Bizkaia', 1),
    ('ES', 'ES-ZA', 'Zamora', 1),
    ('ES', 'ES-Z', 'Zaragoza', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_spain_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_spain_states_provinces_activate' );
