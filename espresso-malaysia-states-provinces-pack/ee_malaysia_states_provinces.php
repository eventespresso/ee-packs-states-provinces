<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Malaysia
  Plugin URI: http://www.eventespresso.com
  Description: This plugin adds Malaysia States/Provinces to Event Espresso 4.
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

function ee_malaysia_states_provinces_activate() {
  $installed = get_option( 'ee_malaysia_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('MY', 'MY-14', 'Wilayah Persekutuan Kuala Lumpur', 1),
    ('MY', 'MY-15', 'Wilayah Persekutuan Labuan', 1),
    ('MY', 'MY-16', 'Wilayah Persekutuan Putrajaya', 1),
    ('MY', 'MY-01', 'Johor', 1),
    ('MY', 'MY-02', 'Kedah', 1),
    ('MY', 'MY-03', 'Kelantan', 1),
    ('MY', 'MY-04', 'Melaka', 1),
    ('MY', 'MY-05', 'Negeri Sembilan', 1),
    ('MY', 'MY-06', 'Pahang', 1),
    ('MY', 'MY-08', 'Perak', 1),
    ('MY', 'MY-09', 'Perlis', 1),
    ('MY', 'MY-07', 'Pulua Pinang', 1),
    ('MY', 'MY-12', 'Sabah', 1),
    ('MY', 'MY-13', 'Sarawak', 1),
    ('MY', 'MY-10', 'Selangor', 1),
    ('MY', 'MY-11', 'Terengganu', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_malaysia_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_malaysia_states_provinces_activate' );
