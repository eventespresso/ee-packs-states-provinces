<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Norway
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Norway to Event Espresso 4.
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

function ee_norway_states_provinces_activate() {
  $installed = get_option( 'ee_norway_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('NO', '02', 'Akershus', 1),
    ('NO', '09', 'Aust-Agder', 1),
    ('NO', '06', 'Buskerud', 1),
    ('NO', '20', 'Finnmark', 1),
    ('NO', '04', 'Hedmark', 1),
    ('NO', '12', 'Hordaland', 1),
    ('NO', '15', 'Møre og Romsdal', 1),
    ('NO', '18', 'Nordland', 1),
    ('NO', '17', 'Nord-Trøndelag', 1),
    ('NO', '05', 'Oppland', 1),
    ('NO', '03', 'Oslo', 1),
    ('NO', '11', 'Rogaland', 1),
    ('NO', '14', 'Sogn og Fjordane', 1),
    ('NO', '16', 'Sør-Trøndelag', 1),
    ('NO', '08', 'Telemark', 1),
    ('NO', '19', 'Troms', 1),
    ('NO', '10', 'Vest-Anger', 1),
    ('NO', '07', 'Vestfold', 1),
    ('NO', '01', 'Østfold', 1),
    ('NO', '22', 'Jan Mayen', 1),
    ('NO', '21', 'Svalbard', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_norway_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_norway_states_provinces_activate' );
