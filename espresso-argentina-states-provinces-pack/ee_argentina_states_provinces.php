<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Argentina
  Plugin URI: http://www.eventespresso.com
  Description: The Event Espresso New Addon adds Argentina States/Provinces to Event Espresso 4
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

function ee_argentina_states_provinces_activate() {
  $installed = get_option( 'ee_argentina_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('AR', 'AR-C', 'Ciudad Autónoma de Buenos Aires', 1),
    ('AR', 'AR-B', 'Buenos Aires', 1),
    ('AR', 'AR-K', 'Catamarca', 1),
    ('AR', 'AR-H', 'Chaco', 1),
    ('AR', 'AR-U', 'Chubut', 1),
    ('AR', 'AR-X', 'Córdoba', 1),
    ('AR', 'AR-W', 'Corrientes', 1),
    ('AR', 'AR-E', 'Entre Ríos', 1),
    ('AR', 'AR-P', 'Formosa', 1),
    ('AR', 'AR-Y', 'Jujuy', 1),
    ('AR', 'AR-L', 'La Pampa', 1),
    ('AR', 'AR-F', 'La Rioja', 1),
    ('AR', 'AR-M', 'Mendoza', 1),
    ('AR', 'AR-N', 'Misiones', 1),
    ('AR', 'AR-Q', 'Neuquén', 1),
    ('AR', 'AR-R', 'Río Negro', 1),
    ('AR', 'AR-A', 'Salta', 1),
    ('AR', 'AR-J', 'San Juan', 1),
    ('AR', 'AR-D', 'San Luis', 1),
    ('AR', 'AR-Z', 'Santa Cruz', 1),
    ('AR', 'AR-S', 'Santa Fe', 1),
    ('AR', 'AR-G', 'Santiago del Estero', 1),
    ('AR', 'AR-V', 'Tierra del Fuego', 1),
    ('AR', 'AR-T', 'Tucumán', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_argentina_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_argentina_states_provinces_activate' );
