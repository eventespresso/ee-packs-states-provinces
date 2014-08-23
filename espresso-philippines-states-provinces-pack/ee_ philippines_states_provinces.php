<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Philippines
  Plugin URI: http://www.eventespresso.com
  Description: This plugin adds Philippines States/Provinces to Event Espresso 4.
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

function ee_philippines_states_provinces_activate() {
  $installed = get_option( 'ee_philippines_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('PH', 'ABR', 'Abra', 1),
    ('PH', 'AGN', 'Agusan del Norte', 1),
    ('PH', 'AGS', 'Agusan del Sur', 1),
    ('PH', 'AKL', 'Aklan', 1),
    ('PH', 'ALB', 'Albay', 1),
    ('PH', 'ANT', 'Antique', 1),
    ('PH', 'APA', 'Apayao', 1),
    ('PH', 'AUR', 'Aurora', 1),
    ('PH', 'BAS', 'Basilan', 1),
    ('PH', 'BAN', 'Bataan', 1),
    ('PH', 'BTN', 'Batanes', 1),
    ('PH', 'BTG', 'Batangas', 1),
    ('PH', 'BEN', 'Benguet', 1),
    ('PH', 'BIL', 'Biliran', 1),
    ('PH', 'BOH', 'Bohol', 1),
    ('PH', 'BUK', 'Bukidnon', 1),
    ('PH', 'BUL', 'Bulacan', 1),
    ('PH', 'CAG', 'Cagayan', 1),
    ('PH', 'CAN', 'Camarines Norte', 1),
    ('PH', 'CAS', 'Camarines Sur', 1),
    ('PH', 'CAM', 'Camiguin', 1),
    ('PH', 'CAP', 'Capiz', 1),
    ('PH', 'CAT', 'Catanduanes', 1),
    ('PH', 'CAV', 'Cavite', 1),
    ('PH', 'CEB', 'Cebu', 1),
    ('PH', 'COM', 'Compostela Valley', 1),
    ('PH', 'NCO', 'Cotabato', 1),
    ('PH', 'DAV', 'Davao del Norte', 1),
    ('PH', 'DAS', 'Davao del Sur', 1),
    ('PH', 'DAO', 'Davao Oriental', 1),
    ('PH', 'DIN', 'Dinagat Islands', 1),
    ('PH', 'EAS', 'Eastern Samar', 1),
    ('PH', 'GUI', 'Guimaras', 1),
    ('PH', 'IFU', 'Ifugao', 1),
    ('PH', 'ILN', 'Ilocos Norte', 1),
    ('PH', 'ILS', 'Ilocos Sur', 1),
    ('PH', 'ISI', 'Iloilo', 1),
    ('PH', 'ISA', 'Isabela', 1),
    ('PH', 'KAL', 'Kalinga', 1),
    ('PH', 'LUN', 'La Union', 1),
    ('PH', 'LAG', 'Laguna', 1),
    ('PH', 'LAN', 'Lanao del Norte', 1),
    ('PH', 'LAS', 'Lanao del Sur', 1),
    ('PH', 'LEY', 'Leyte', 1),
    ('PH', 'MAG', 'Maguindanao', 1),
    ('PH', 'MAD', 'Marinduque', 1),
    ('PH', 'MDC', 'Mindoro Occidental', 1),
    ('PH', 'MDR', 'Mindoro Oriental', 1),
    ('PH', 'MOU', 'Mountain Province', 1),
    ('PH', 'NEC', 'Negros Occidental', 1),
    ('PH', 'NER', 'Negros Oriental', 1),
    ('PH', 'NSA', 'Northern Samar', 1),
    ('PH', 'NUE', 'Nueva Ecija', 1),
    ('PH', 'NUV', 'Nueva Vizcaya', 1),
    ('PH', 'PLW', 'Palawan', 1),
    ('PH', 'PAM', 'Pampanga', 1),
    ('PH', 'PAN', 'Pangasinan', 1),
    ('PH', 'QUE', 'Quezon', 1),
    ('PH', 'QUI', 'Quirino', 1),
    ('PH', 'RIZ', 'Rizal', 1),
    ('PH', 'ROM', 'Romblon', 1),
    ('PH', 'WSA', 'Samar (Western Samar)', 1),
    ('PH', 'SAR', 'Sarangani', 1),
    ('PH', 'SIG', 'Siquijor', 1),
    ('PH', 'SOR', 'Sorsogon', 1),
    ('PH', 'SCO', 'South Cotabato', 1),
    ('PH', 'SLE', 'Southern Leyte', 1),
    ('PH', 'SUK', 'Sultan Kudarat', 1),
    ('PH', 'SLU', 'Sulu', 1),
    ('PH', 'SUN', 'Surigao del Norte', 1),
    ('PH', 'SUR', 'Surigao del Sur', 1),
    ('PH', 'TAR', 'Tarlac', 1),
    ('PH', 'TAW', 'Tawi-Tawi', 1),
    ('PH', 'ZMB', 'Zambales', 1),
    ('PH', 'ZAN', 'Zamboanga del Norte', 1),
    ('PH', 'ZAS', 'Zamboanga del Sur', 1),
    ('PH', 'ZSI', 'Zamboanga Sibugay', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_philippines_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_philippines_states_provinces_activate' );
