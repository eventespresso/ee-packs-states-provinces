<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: India
  Plugin URI: http://www.eventespresso.com
  Description: The Event Espresso New Addon adds Indiasp States/Provinces to Event Espresso 4
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

function ee_india_states_provinces_activate() {
  $installed = get_option( 'ee_india_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('IN', 'IN-AP', 'Andhra Pradesh', 1),
    ('IN', 'IN-AR', 'Arunachal Pradesh', 1),
    ('IN', 'IN-AS', 'Assam', 1),
    ('IN', 'IN-BR', 'Bihar', 1),
    ('IN', 'IN-CT', 'Chhattisgarh', 1),
    ('IN', 'IN-GA', 'Goa', 1),
    ('IN', 'IN-GJ', 'Gujarat', 1),
    ('IN', 'IN-HR', 'Haryana', 1),
    ('IN', 'IN-HP', 'Himachal Pradesh', 1),
    ('IN', 'IN-JK', 'Jammu and Kashmir', 1),
    ('IN', 'IN-JH', 'Jharkhand', 1),
    ('IN', 'IN-KA', 'Karnataka', 1),
    ('IN', 'IN-KL', 'Kerala', 1),
    ('IN', 'IN-MP', 'Madhya Pradesh', 1),
    ('IN', 'IN-MH', 'Maharashtra', 1),
    ('IN', 'IN-MN', 'Manipur', 1),
    ('IN', 'IN-ML', 'Meghalaya', 1),
    ('IN', 'IN-MZ', 'Mizoram', 1),
    ('IN', 'IN-NL', 'Nagaland', 1),
    ('IN', 'IN-OR', 'Orissa', 1),
    ('IN', 'IN-PB', 'Punjab', 1),
    ('IN', 'IN-RJ', 'Rajasthan', 1),
    ('IN', 'IN-SK', 'Sikkim', 1),
    ('IN', 'IN-TN', 'Tamil Nadu', 1),
    ('IN', 'IN-TR', 'Tripura', 1),
    ('IN', 'IN-UT', 'Uttarakhand', 1),
    ('IN', 'IN-UP', 'Uttar Pradesh', 1),
    ('IN', 'IN-WB', 'West Bengal', 1),
    ('IN', 'IN-AN', 'Andaman and Nicobar Islands', 1),
    ('IN', 'IN-CH', 'Chandigarh', 1),
    ('IN', 'IN-DN', 'Dadra and Nagar Haveli', 1),
    ('IN', 'IN-DD', 'Daman and Diu', 1),
    ('IN', 'IN-DL', 'Delhi', 1),
    ('IN', 'IN-LD', 'Lakshadweep', 1),
    ('IN', 'IN-PY', 'Puducherry', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_india_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_india_states_provinces_activate' );
