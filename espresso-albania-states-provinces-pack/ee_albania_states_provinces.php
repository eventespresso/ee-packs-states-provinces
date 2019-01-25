<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Albania
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Albania to Event Espresso 4.
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

function ee_albania_states_provinces_activate() {
  $installed = get_option( 'ee_albania_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('AL', 'AL-BR', 'Berat', 1),
    ('AL', 'AL-DI', 'Dibër', 1),
    ('AL', 'AL-DU', 'Durrës', 1),
    ('AL', 'AL-EL', 'Elbasan', 1),
    ('AL', 'AL-FI', 'Fier', 1),
    ('AL', 'AL-GJ', 'Gjirokastër', 1),
    ('AL', 'AL-KO', 'Korçë', 1),
    ('AL', 'AL-KU', 'Kukës', 1),
    ('AL', 'AL-LE', 'Lezhë', 1),
    ('AL', 'AL-SH', 'Shkodër', 1),
    ('AL', 'AL-TI', 'Tiranë', 1),
    ('AL', 'AL-VL', 'Vlorë', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_albania_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_albania_states_provinces_activate' );
