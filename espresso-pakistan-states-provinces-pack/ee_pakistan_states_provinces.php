<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Pakistan
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Pakistan to Event Espresso 4.
  Version: 1.0
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

function ee_pakistan_states_provinces_activate() {
  $installed = get_option( 'ee_pakistan_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('PK', 'PK-AJK', 'Azad Jammu and Kashmir', 1),
    ('PK', 'PK-BL', 'Balochistan', 1),
    ('PK', 'PK-GB', 'Gilgit-Baltistan', 1),
    ('PK', 'PK-ICT', 'Islamabad Capital Territory', 1),
    ('PK', 'PK-KPK', 'Khaiber Pakhtunkhuwa', 1),
    ('PK', 'PK-PU', 'Punjab', 1),
    ('PK', 'PK-SN', 'Sindh', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_pakistan_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_pakistan_states_provinces_activate' );
