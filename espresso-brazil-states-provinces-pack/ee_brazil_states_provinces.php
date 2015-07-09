<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Brazil
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Brazil to Event Espresso 4.
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

function ee_brazil_states_provinces_activate() {
  $installed = get_option( 'ee_brazil_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('BR', 'BR-DF', 'Distrito Federal', 1),
    ('BR', 'BR-AC', 'Acre', 1),
    ('BR', 'BR-AL', 'Alagoas', 1),
    ('BR', 'BR-AP', 'Amapá', 1),
    ('BR', 'BR-AM', 'Amazonas', 1),
    ('BR', 'BR-BA', 'Bahia', 1),
    ('BR', 'BR-CE', 'Ceará', 1),
    ('BR', 'BR-ES', 'Espírito Santo', 1),
    ('BR', 'BR-GO', 'Goiás', 1),
    ('BR', 'BR-MA', 'Maranhão', 1),
    ('BR', 'BR-MT', 'Mato Grosso', 1),
    ('BR', 'BR-MS', 'Mato Grosso do Sul', 1),
    ('BR', 'BR-MG', 'Minas Gerais', 1),
    ('BR', 'BR-PA', 'Pará', 1),
    ('BR', 'BR-PB', 'Paraíba', 1),
    ('BR', 'BR-PR', 'Paraná', 1),
    ('BR', 'BR-PE', 'Pernambuco', 1),
    ('BR', 'BR-PI', 'Piauí', 1),
    ('BR', 'BR-RJ', 'Rio de Janeiro', 1),
    ('BR', 'BR-RN', 'Rio Grande do Norte', 1),
    ('BR', 'BR-RS', 'Rio Grande do Sul', 1),
    ('BR', 'BR-RO', 'Rondônia', 1),
    ('BR', 'BR-RR', 'Roraima', 1),
    ('BR', 'BR-SC', 'Santa Catarina', 1),
    ('BR', 'BR-SP', 'São Paulo', 1),
    ('BR', 'BR-SE', 'Sergipe', 1),
    ('BR', 'BR-TO', 'Tocantins', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_brazil_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_brazil_states_provinces_activate' );
