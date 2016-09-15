<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: France
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of France to Event Espresso 4.
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

function ee_france_states_provinces_activate() {
  $installed = get_option( 'ee_france_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('FR', 'FR-A', 'Alsace', 1),
    ('FR', 'FR-B', 'Aquitaine', 1),
    ('FR', 'FR-C', 'Auvergne', 1),
    ('FR', 'FR-P', 'Basse-Normandie', 1),
    ('FR', 'FR-D', 'Bourgogne', 1),
    ('FR', 'FR-E', 'Bretagne', 1),
    ('FR', 'FR-F', 'Centre', 1),
    ('FR', 'FR-G', 'Champagne-Ardenne', 1),
    ('FR', 'FR-H', 'Corse', 1),
    ('FR', 'FR-I', 'Franche-Comté', 1),
    ('FR', 'FR-Q', 'Haute-Normandie', 1),
    ('FR', 'FR-J', 'Île-de-France', 1),
    ('FR', 'FR-K', 'Languedoc-Roussillon', 1),
    ('FR', 'FR-L', 'Limousin', 1),
    ('FR', 'FR-M', 'Lorraine', 1),
    ('FR', 'FR-N', 'Midi-Pyrénées', 1),
    ('FR', 'FR-O', 'Nord-Pas-de-Calais', 1),
    ('FR', 'FR-R', 'Pays de la Loire', 1),
    ('FR', 'FR-S', 'Picardie', 1),
    ('FR', 'FR-T', 'Poitou-Charentes', 1),
    ('FR', 'FR-U', 'Provence-Alpes-Côte d\'Azur', 1),
    ('FR', 'FR-V', 'Rhône-Alpes', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_france_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_france_states_provinces_activate' );
