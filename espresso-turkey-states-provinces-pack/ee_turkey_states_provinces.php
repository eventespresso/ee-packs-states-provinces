<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Turkey
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Turkey to Event Espresso 4.
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

function ee_turkey_states_provinces_activate() {
  $installed = get_option( 'ee_turkey_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('TR', 'TR01', 'Adana', 1),
    ('TR', 'TR02', 'Ad&#305;yaman', 1),
    ('TR', 'TR03', 'Afyon', 1),
    ('TR', 'TR04', 'A&#287;r&#305;', 1),
    ('TR', 'TR05', 'Amasya', 1),
    ('TR', 'TR06', 'Ankara', 1),
    ('TR', 'TR07', 'Antalya', 1),
    ('TR', 'TR08', 'Artvin', 1),
    ('TR', 'TR09', 'Ayd&#305;n', 1),
    ('TR', 'TR10', 'Bal&#305;kesir', 1),
    ('TR', 'TR11', 'Bilecik', 1),
    ('TR', 'TR12', 'Bing&#246;l', 1),
    ('TR', 'TR13', 'Bitlis', 1),
    ('TR', 'TR14', 'Bolu', 1),
    ('TR', 'TR15', 'Burdur', 1),
    ('TR', 'TR16', 'Bursa', 1),
    ('TR', 'TR17', '&#199;anakkale', 1),
    ('TR', 'TR18', '&#199;ank&#305;r&#305;', 1),
    ('TR', 'TR19', '&#199;orum', 1),
    ('TR', 'TR20', 'Denizli', 1),
    ('TR', 'TR21', 'Diyarbak&#305;r', 1),
    ('TR', 'TR22', 'Edirne', 1),
    ('TR', 'TR23', 'Elaz&#305;&#287;', 1),
    ('TR', 'TR24', 'Erzincan', 1),
    ('TR', 'TR25', 'Erzurum', 1),
    ('TR', 'TR26', 'Eski&#351;ehir', 1),
    ('TR', 'TR27', 'Gaziantep', 1),
    ('TR', 'TR28', 'Giresun', 1),
    ('TR', 'TR29', 'G&#252;m&#252;&#351;hane', 1),
    ('TR', 'TR30', 'Hakkari', 1),
    ('TR', 'TR31', 'Hatay', 1),
    ('TR', 'TR32', 'Isparta', 1),
    ('TR', 'TR33', '&#304;&#231;el', 1),
    ('TR', 'TR34', '&#304;stanbul', 1),
    ('TR', 'TR35', '&#304;zmir', 1),
    ('TR', 'TR36', 'Kars', 1),
    ('TR', 'TR37', 'Kastamonu', 1),
    ('TR', 'TR38', 'Kayseri', 1),
    ('TR', 'TR39', 'K&#305;rklareli', 1),
    ('TR', 'TR40', 'K&#305;r&#351;ehir', 1),
    ('TR', 'TR41', 'Kocaeli', 1),
    ('TR', 'TR42', 'Konya', 1),
    ('TR', 'TR43', 'K&#252;tahya', 1),
    ('TR', 'TR44', 'Malatya', 1),
    ('TR', 'TR45', 'Manisa', 1),
    ('TR', 'TR46', 'Kahramanmara&#351;', 1),
    ('TR', 'TR47', 'Mardin', 1),
    ('TR', 'TR48', 'Mu&#287;la', 1),
    ('TR', 'TR49', 'Mu&#351;', 1),
    ('TR', 'TR50', 'Nev&#351;ehir', 1),
    ('TR', 'TR51', 'Ni&#287;de', 1),
    ('TR', 'TR52', 'Ordu', 1),
    ('TR', 'TR53', 'Rize', 1),
    ('TR', 'TR54', 'Sakarya', 1),
    ('TR', 'TR55', 'Samsun', 1),
    ('TR', 'TR56', 'Siirt', 1),
    ('TR', 'TR57', 'Sinop', 1),
    ('TR', 'TR58', 'Sivas', 1),
    ('TR', 'TR59', 'Rizal', 1),
    ('TR', 'TR60', 'Tekirda&#287;', 1),
    ('TR', 'TR61', 'Trabzon', 1),
    ('TR', 'TR62', 'Tunceli', 1),
    ('TR', 'TR63', '&#350;anl&#305;urfa', 1),
    ('TR', 'TR64', 'U&#351;ak', 1),
    ('TR', 'TR65', 'Van', 1),
    ('TR', 'TR66', 'Yozgat', 1),
    ('TR', 'TR67', 'Zonguldak', 1),
    ('TR', 'TR68', 'Aksaray', 1),
    ('TR', 'TR69', 'Bayburt', 1),
    ('TR', 'TR70', 'Karaman', 1),
    ('TR', 'TR71', 'K&#305;r&#305;kkale', 1),
    ('TR', 'TR72', 'Batman', 1),
    ('TR', 'TR73', '&#350;&#305;rnak', 1),
    ('TR', 'TR74', 'Bart&#305;n', 1),
    ('TR', 'TR75', 'Ardahan', 1),
    ('TR', 'TR76', 'I&#287;d&#305;r', 1),
    ('TR', 'TR77', 'Yalova', 1),
    ('TR', 'TR78', 'Karab&#252;k', 1),
    ('TR', 'TR79', 'Kilis', 1),
    ('TR', 'TR80', 'Osmaniye', 1),
    ('TR', 'TR81', 'D&#252;zce', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_turkey_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_turkey_states_provinces_activate' );
