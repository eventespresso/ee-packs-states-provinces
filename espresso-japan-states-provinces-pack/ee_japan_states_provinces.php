<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Japan
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Japan to Event Espresso 4.
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

function ee_japan_states_provinces_activate() {
  $installed = get_option( 'ee_japan_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('JP', 'JP-01', 'Hokkaido', 1),
    ('JP', 'JP-02', 'Aomori', 1),
    ('JP', 'JP-03', 'Iwate', 1),
    ('JP', 'JP-04', 'Miyagi', 1),
    ('JP', 'JP-05', 'Akita', 1),
    ('JP', 'JP-06', 'Yamagata', 1),
    ('JP', 'JP-07', 'Fukushima', 1),
    ('JP', 'JP-08', 'Ibaraki', 1),
    ('JP', 'JP-09', 'Tochigi', 1),
    ('JP', 'JP-10', 'Gunma', 1),
    ('JP', 'JP-11', 'Saitama', 1),
    ('JP', 'JP-12', 'Chiba', 1),
    ('JP', 'JP-13', 'Tokyo', 1),
    ('JP', 'JP-14', 'Kanagawa', 1),
    ('JP', 'JP-15', 'Niigata', 1),
    ('JP', 'JP-16', 'Toyama', 1),
    ('JP', 'JP-17', 'Ishikawa', 1),
    ('JP', 'JP-18', 'Fukui', 1),
    ('JP', 'JP-19', 'Yamanashi', 1),
    ('JP', 'JP-20', 'Nagano', 1),
    ('JP', 'JP-21', 'Gifu', 1),
    ('JP', 'JP-22', 'Shizuoka', 1),
    ('JP', 'JP-23', 'Aichi', 1),
    ('JP', 'JP-24', 'Mie', 1),
    ('JP', 'JP-25', 'Shiga', 1),
    ('JP', 'JP-26', 'Kyouto', 1),
    ('JP', 'JP-27', 'Osaka', 1),
    ('JP', 'JP-28', 'Hyougo', 1),
    ('JP', 'JP-29', 'Nara', 1),
    ('JP', 'JP-30', 'Wakayama', 1),
    ('JP', 'JP-31', 'Tottori', 1),
    ('JP', 'JP-32', 'Shimane', 1),
    ('JP', 'JP-33', 'Okayama', 1),
    ('JP', 'JP-34', 'Hiroshima', 1),
    ('JP', 'JP-35', 'Yamaguchi', 1),
    ('JP', 'JP-36', 'Tokushima', 1),
    ('JP', 'JP-37', 'Kagawa', 1),
    ('JP', 'JP-38', 'Ehime', 1),
    ('JP', 'JP-39', 'Kochi', 1),
    ('JP', 'JP-40', 'Fukuoka', 1),
    ('JP', 'JP-41', 'Saga', 1),
    ('JP', 'JP-42', 'Nagasaki', 1),
    ('JP', 'JP-43', 'Kumamoto', 1),
    ('JP', 'JP-44', 'Oita', 1),
    ('JP', 'JP-45', 'Miyazaki', 1),
    ('JP', 'JP-46', 'Kagoshima', 1),
    ('JP', 'JP-47', 'Okinawa', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_japan_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_japan_states_provinces_activate' );
