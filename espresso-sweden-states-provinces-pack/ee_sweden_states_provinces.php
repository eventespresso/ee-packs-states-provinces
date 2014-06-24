<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Sweden
  Plugin URI: http://www.eventespresso.com
  Description: The Event Espresso New Addon adds Sweden States/Provinces to Event Espresso 4
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

function ee_sweden_states_provinces_activate() {
  $installed = get_option( 'ee_sweden_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('SE', 'SE-K', 'Blekinge län', 1),
    ('SE', 'SE-W', 'Dalarnas län', 1),
    ('SE', 'SE-I', 'Gotlands län', 1),
    ('SE', 'SE-X', 'Gävleborgs län', 1),
    ('SE', 'SE-N', 'Hallands län', 1),
    ('SE', 'SE-Z', 'Jämtlands län', 1),
    ('SE', 'SE-F', 'Jönköpings län', 1),
    ('SE', 'SE-H', 'Kalmar län', 1),
    ('SE', 'SE-G', 'Kronobergs län', 1),
    ('SE', 'SE-BD', 'Norrbottens län', 1),
    ('SE', 'SE-M', 'Skåne län', 1),
    ('SE', 'SE-AB', 'Stockholms län', 1),
    ('SE', 'SE-D', 'Södermanlands län', 1),
    ('SE', 'SE-C', 'Uppsala län', 1),
    ('SE', 'SE-S', 'Värmlands län', 1),
    ('SE', 'SE-AC', 'Västerbottens län', 1),
    ('SE', 'SE-Y', 'Västernorrlands län', 1),
    ('SE', 'SE-U', 'Västmanlands län', 1),
    ('SE', 'SE-O', 'Västra Götalands län', 1),
    ('SE', 'SE-T', 'Örebro län	', 1),
    ('SE', 'SE-E', 'Östergötlands län', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_sweden_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_sweden_states_provinces_activate' );
