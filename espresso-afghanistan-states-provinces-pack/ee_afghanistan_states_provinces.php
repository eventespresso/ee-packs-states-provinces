<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Afghanistan
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Afghanistan to Event Espresso 4.
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

function ee_afghanistan_states_provinces_activate() {
  $installed = get_option( 'ee_afghanistan_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('AF', 'AF-BDS', 'Badakhshan', 1),
    ('AF', 'AF-BDG', 'Badghis', 1),
    ('AF', 'AF-BGL', 'Baghlan', 1),
    ('AF', 'AF-BAL', 'Balkh', 1),
    ('AF', 'AF-BAM', 'Bamyan', 1),
    ('AF', 'AF-DAY', 'Daykundi', 1),
    ('AF', 'AF-FRA', 'Farah', 1),
    ('AF', 'AF-FYB', 'Faryab', 1),
    ('AF', 'AF-GHA', 'Ghazni', 1),
    ('AF', 'AF-GHO', 'Ghor', 1),
    ('AF', 'AF-HEL', 'Helmand', 1),
    ('AF', 'AF-HER', 'Herat', 1),
    ('AF', 'AF-JOW', 'Jowzjan', 1),
    ('AF', 'AF-KAB', 'Kabul', 1),
    ('AF', 'AF-KAN', 'Kandahar', 1),
    ('AF', 'AF-KAP', 'Kapisa', 1),
    ('AF', 'AF-KHO', 'Khost', 1),
    ('AF', 'AF-KNR', 'Kunar', 1),
    ('AF', 'AF-KDZ', 'Kunduz', 1),
    ('AF', 'AF-LAG', 'Laghman', 1),
    ('AF', 'AF-LOG', 'Logar', 1),
    ('AF', 'AF-NAN', 'Nangarhar', 1),
    ('AF', 'AF-NIM', 'Nimruz', 1),
    ('AF', 'AF-NUR', 'Nuristan', 1),
    ('AF', 'AF-PIA', 'Paktia', 1),
    ('AF', 'AF-PKA', 'Paktika', 1),
    ('AF', 'AF-PAN', 'Panjshir', 1),
    ('AF', 'AF-PAR', 'Parwan', 1),
    ('AF', 'AF-SAM', 'Samangan', 1),
    ('AF', 'AF-SAR', 'Sar-e Pol', 1),
    ('AF', 'AF-TAK', 'Takhar', 1),
    ('AF', 'AF-URU', 'Urozgan', 1),
    ('AF', 'AF-WAR', 'Wardak', 1),
    ('AF', 'AF-ZAB', 'Zabul', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_afghanistan_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_afghanistan_states_provinces_activate' );
