<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Peru
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Peru to Event Espresso 4.
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

function ee_peru_states_provinces_activate() {
  $installed = get_option( 'ee_peru_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('PE', 'PE-CAL', 'El Callao', 1),
    ('PE', 'PE-LMA', 'Municipalidad Metropolitana de Lima', 1),
    ('PE', 'PE-AMA', 'Amazonas', 1),
    ('PE', 'PE-ANC', 'Ancash', 1),
    ('PE', 'PE-APU', 'Apurímac', 1),
    ('PE', 'PE-ARE', 'Arequipa', 1),
    ('PE', 'PE-AYA', 'Ayacucho', 1),
    ('PE', 'PE-CAJ', 'Cajamarca', 1),
    ('PE', 'PE-CUS', 'Cusco', 1),
    ('PE', 'PE-HUV', 'Huancavelica', 1),
    ('PE', 'PE-HUC', 'Huánuco', 1),
    ('PE', 'PE-ICA', 'Ica', 1),
    ('PE', 'PE-JUN', 'Junín', 1),
    ('PE', 'PE-LAL', 'La Libertad', 1),
    ('PE', 'PE-LAM', 'Lambayeque', 1),
    ('PE', 'PE-LIM', 'Lima', 1),
    ('PE', 'PE-LOR', 'Loreto', 1),
    ('PE', 'PE-MDD', 'Madre de Dios', 1),
    ('PE', 'PE-MOQ', 'Moquegua', 1),
    ('PE', 'PE-PAS', 'Pasco', 1),
    ('PE', 'PE-PIU', 'Piura', 1),
    ('PE', 'PE-PUN', 'Puno', 1),
    ('PE', 'PE-SAM', 'San Martín', 1),
    ('PE', 'PE-TAC', 'Tacna', 1),
    ('PE', 'PE-TUM', 'Tumbes', 1),
    ('PE', 'PE-UCA', 'Ucayali', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_peru_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_peru_states_provinces_activate' );
