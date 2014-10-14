<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Italy
  Plugin URI: http://www.eventespresso.com
  Description: This plugin adds Italy States/Provinces to Event Espresso 4.
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

function ee_italy_states_provinces_activate() {
  $installed = get_option( 'ee_italy_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('IT', 'IT-AG', 'Agrigento', 1),
    ('IT', 'IT-AL', 'Alessandria', 1),
    ('IT', 'IT-AN', 'Ancona', 1),
    ('IT', 'IT-AO', 'Aosta', 1),
    ('IT', 'IT-AR', 'Arezzo', 1),
    ('IT', 'IT-AP', 'Ascoli Piceno', 1),
    ('IT', 'IT-AT', 'Asti', 1),
    ('IT', 'IT-AV', 'Avellino', 1),
    ('IT', 'IT-BA', 'Bari', 1),
    ('IT', 'IT-BT', 'Barletta-Andria-Trani', 1),
    ('IT', 'IT-BL', 'Belluno', 1),
    ('IT', 'IT-BN', 'Benevento', 1),
    ('IT', 'IT-BG', 'Bergamo', 1),
    ('IT', 'IT-BI', 'Biella', 1),
    ('IT', 'IT-BO', 'Bologna', 1),
    ('IT', 'IT-BZ', 'Bolzano', 1),
    ('IT', 'IT-BS', 'Brescia', 1),
    ('IT', 'IT-BR', 'Brindisi', 1),
    ('IT', 'IT-CA', 'Cagliari', 1),
    ('IT', 'IT-CL', 'Caltanissetta', 1),
    ('IT', 'IT-CB', 'Campobasso', 1),
    ('IT', 'IT-CI', 'Carbonia-Iglesias', 1),
    ('IT', 'IT-CE', 'Caserta', 1),
    ('IT', 'IT-CT', 'Catania', 1),
    ('IT', 'IT-CZ', 'Catanzaro', 1),
    ('IT', 'IT-CH', 'Chieti', 1),
    ('IT', 'IT-CO', 'Como', 1),
    ('IT', 'IT-CS', 'Consenza', 1),
    ('IT', 'IT-CR', 'Cremona', 1),
    ('IT', 'IT-KR', 'Crotone', 1),
    ('IT', 'IT-CN', 'Cuneo', 1),
    ('IT', 'IT-EN', 'Enna', 1),
    ('IT', 'IT-FM', 'Fermo', 1),
    ('IT', 'IT-FE', 'Ferrara', 1),
    ('IT', 'IT-FI', 'Firenze', 1),
    ('IT', 'IT-FG', 'Foggia', 1),
    ('IT', 'IT-FC', 'Forlì-Cesena', 1),
    ('IT', 'IT-FR', 'Frosinone', 1),
    ('IT', 'IT-GE', 'Genova', 1),
    ('IT', 'IT-GO', 'Gorizia', 1),
    ('IT', 'IT-GR', 'Grosseto', 1),
    ('IT', 'IT-IM', 'Imperia', 1),
    ('IT', 'IT-IS', 'Isernia', 1),
    ('IT', 'IT-SP', 'La Spezia', 1),
    ('IT', 'IT-AQ', 'L''Aquila', 1),
    ('IT', 'IT-LT', 'Latina', 1),
    ('IT', 'IT-LE', 'Lecce', 1),
    ('IT', 'IT-LC', 'Lecco', 1),
    ('IT', 'IT-LI', 'Livorno', 1),
    ('IT', 'IT-LO', 'Loda', 1),
    ('IT', 'IT-LU', 'Lucca', 1),
    ('IT', 'IT-MC', 'Macerata', 1),
    ('IT', 'IT-MN', 'Mantova', 1),
    ('IT', 'IT-MS', 'Massa-Carrara', 1),
    ('IT', 'IT-MT', 'Matera', 1),
    ('IT', 'IT-VS', 'Medio Campidano', 1),
    ('IT', 'IT-ME', 'Messina', 1),
    ('IT', 'IT-MI', 'Milano', 1),
    ('IT', 'IT-MO', 'Modena', 1),
    ('IT', 'IT-MB', 'Monza e Brianza', 1),
    ('IT', 'IT-NA', 'Napoli	', 1),
    ('IT', 'IT-NO', 'Novara	', 1),
    ('IT', 'IT-NU', 'Nuoro', 1),
    ('IT', 'IT-OG', 'Ogliastra', 1),
    ('IT', 'IT-OT', 'Olbia-Tempio', 1),
    ('IT', 'IT-OR', 'Oristano', 1),
    ('IT', 'IT-PD', 'Padova', 1),
    ('IT', 'IT-PA', 'Palermo', 1),
    ('IT', 'IT-PR', 'Parma', 1),
    ('IT', 'IT-PV', 'Pavia', 1),
    ('IT', 'IT-PG', 'Perugia', 1),
    ('IT', 'IT-PU', 'Pesario e Urbino', 1),
    ('IT', 'IT-PE', 'Isernia', 1),
    ('IT', 'IT-PC', 'Piacenza', 1),
    ('IT', 'IT-PI', 'Pisa', 1),
    ('IT', 'IT-PT', 'Pistoia', 1),
    ('IT', 'IT-PN', 'Pordenone', 1),
    ('IT', 'IT-PZ', 'Potenza', 1),
    ('IT', 'IT-PO', 'Prato', 1),
    ('IT', 'IT-RG', 'Ragusa', 1),
    ('IT', 'IT-RA', 'Ravenna', 1),
    ('IT', 'IT-RC', 'Reggio Calabria', 1),
    ('IT', 'IT-RE', 'Reggio Emilia', 1),
    ('IT', 'IT-RI', 'Rieti', 1),
    ('IT', 'IT-RN', 'Rimini', 1),
    ('IT', 'IT-RM', 'Roma', 1),
    ('IT', 'IT-RO', 'Rovigo', 1),
    ('IT', 'IT-SA', 'Salerno', 1),
    ('IT', 'IT-SS', 'Sassari', 1),
    ('IT', 'IT-SV', 'Savona', 1),
    ('IT', 'IT-SI', 'Siena', 1),
    ('IT', 'IT-SR', 'Siracusa', 1),
    ('IT', 'IT-SO', 'Sondrio', 1),
    ('IT', 'IT-TA', 'Taranto', 1),
    ('IT', 'IT-TE', 'Teramo', 1),
    ('IT', 'IT-TR', 'Terni', 1),
    ('IT', 'IT-TO', 'Torino', 1),
    ('IT', 'IT-TP', 'Trapani', 1),
    ('IT', 'IT-TN', 'Trento', 1),
    ('IT', 'IT-TV', 'Treviso', 1),
    ('IT', 'IT-TS', 'Trieste', 1),
    ('IT', 'IT-UD', 'Udine', 1),
    ('IT', 'IT-VA', 'Varese', 1),
    ('IT', 'IT-VE', 'Venezia', 1),
    ('IT', 'IT-VB', 'Verbano-Cusio-Ossola', 1),
    ('IT', 'IT-VC', 'Vercelli', 1),
    ('IT', 'IT-VR', 'Verona', 1),
    ('IT', 'IT-VV', 'Vibo Valentia', 1),
    ('IT', 'IT-VI', 'Vincenza', 1),
    ('IT', 'IT-VT', 'Viterbo', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_italy_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_italy_states_provinces_activate' );
