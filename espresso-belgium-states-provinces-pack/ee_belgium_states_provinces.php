<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Belgium
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Belgium to Event Espresso 4.
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

function ee_belgium_states_provinces_activate() {
  $installed = get_option( 'ee_belgium_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('BE', 'VAN', 'Antwerpen', 1),
    ('BE', 'WBR', 'Brabant Wallon', 1),
    ('BE', 'BRU', 'Brussels Capital', 1),
    ('BE', 'WHT', 'Hainaut', 1),
    ('BE', 'WLG', 'Liège', 1),
    ('BE', 'VLI', 'Limburg', 1),
    ('BE', 'WLX', 'Luxembourg', 1),
    ('BE', 'WNA', 'Namur', 1),
    ('BE', 'VOV', 'Oost-Vlaanderen', 1),
    ('BE', 'VBR', 'Vlaams Brabant', 1),
    ('BE', 'VWB', 'West-Vlaanderen', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_belgium_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_belgium_states_provinces_activate' );
