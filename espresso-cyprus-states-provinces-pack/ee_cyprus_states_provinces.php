<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Cyprus
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Cyprus to Event Espresso 4.
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

function ee_cyprus_states_provinces_activate() {
  $installed = get_option( 'ee_cyprus_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('CY', 'CY-FA', 'Famagusta', 1),
    ('CY', 'CY-KY', 'Kyrenia', 1),
    ('CY', 'CY-LA', 'Larnaca', 1),
    ('CY', 'CY-LI', 'Limassol', 1),
    ('CY', 'CY-NI', 'Nicosia', 1),
    ('CY', 'CY-PA', 'Paphos', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_cyprus_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_cyprus_states_provinces_activate' );
