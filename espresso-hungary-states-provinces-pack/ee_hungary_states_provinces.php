<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Hungary
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Hungary to Event Espresso 4.
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

function ee_hungary_states_provinces_activate() {
  $installed = get_option( 'ee_hungary_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('HU', 'HU-BK', 'Bács-Kiskun', 1),
    ('HU', 'HU-BE', 'Békés', 1),
    ('HU', 'HU-BA', 'Baranya', 1),
    ('HU', 'HU-BZ', 'Borsod-Abaúj-Zemplén', 1),
    ('HU', 'HU-BU', 'Budapest', 1),
    ('HU', 'HU-CS', 'Csongrád', 1),
    ('HU', 'HU-FE', 'Fejér', 1),
    ('HU', 'HU-GS', 'Győr-Moson-Sopron', 1),
    ('HU', 'HU-HB', 'Hajdú-Bihar', 1),
    ('HU', 'HU-HE', 'Heves', 1),
    ('HU', 'HU-JN', 'Jász-Nagykun-Szolnok', 1),
    ('HU', 'HU-KE', 'Komárom-Esztergom', 1),
    ('HU', 'HU-NO', 'Nógrád', 1),
    ('HU', 'HU-PE', 'Pest', 1),
    ('HU', 'HU-SO', 'Somogy', 1),
    ('HU', 'HU-SZ', 'Szabolcs-Szatmár-Bereg', 1),
    ('HU', 'HU-TO', 'Tolna', 1),
    ('HU', 'HU-VA', 'Vas', 1),
    ('HU', 'HU-VE', 'Veszprém', 1),
    ('HU', 'HU-ZA', 'Zala', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_hungary_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_hungary_states_provinces_activate' );
