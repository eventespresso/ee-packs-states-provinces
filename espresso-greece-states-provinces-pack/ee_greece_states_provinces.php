<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Greece
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Greece to Event Espresso 4.
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

function ee_greece_states_provinces_activate() {
  $installed = get_option( 'ee_greece_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('GR', 'GR-I', 'Αττική', 1),
    ('GR', 'GR-A', 'Ανατολική Μακεδονία και Θράκη', 1),
    ('GR', 'GR-B', 'Κεντρική Μακεδονία', 1),
    ('GR', 'GR-C', 'Δυτική Μακεδονία', 1),
    ('GR', 'GR-D', 'Ήπειρος', 1),
    ('GR', 'GR-E', 'Θεσσαλία', 1),
    ('GR', 'GR-F', 'Ιόνιοι Νήσοι', 1),
    ('GR', 'GR-G', 'Δυτική Ελλάδα', 1),
    ('GR', 'GR-H', 'Στερεά Ελλάδα', 1),
    ('GR', 'GR-J', 'Πελοπόννησος', 1),
    ('GR', 'GR-K', 'Βόρειο Αιγαίο', 1),
    ('GR', 'GR-L', 'Νότιο Αιγαίο', 1),
    ('GR', 'GR-M', 'Κρήτη', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_greece_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_greece_states_provinces_activate' );
