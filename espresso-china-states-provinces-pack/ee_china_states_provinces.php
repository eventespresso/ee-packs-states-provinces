<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: China
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of China to Event Espresso 4.
  version: 1.0
  Author: Event Espresso
  Author URI: http://www.eventespresso.com
  Copyright 2014 Event Espresso (email : support@eventespresso.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, Version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA02110-1301USA
*/

function ee_china_states_provinces_activate() {
  $installed = get_option( 'ee_china_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('CN', 'CN-AH', 'Anhui', 1),
    ('CN', 'CN-BJ', 'Beijing', 1),
    ('CN', 'CN-CQ', 'Chongqing', 1),
    ('CN', 'CN-FJ', 'Fujian', 1),
    ('CN', 'CN-GD', 'Guangdong', 1),
    ('CN', 'CN-GS', 'Gansu', 1),
    ('CN', 'CN-GX', 'Guangxi Zhuang', 1),
    ('CN', 'CN-GZ', 'Guizhou', 1),
    ('CN', 'CN-HA', 'Henan', 1),
    ('CN', 'CN-HB', 'Hubei', 1),
    ('CN', 'CN-HE', 'Hebei', 1),
    ('CN', 'CN-HI', 'Hainan', 1),
    ('CN', 'CN-HK', 'Hong Kong', 1),
    ('CN', 'CN-HL', 'Heilongjiang', 1),
    ('CN', 'CN-HN', 'Hunan', 1),
    ('CN', 'CN-JL', 'Jilin', 1),
    ('CN', 'CN-JS', 'Jiangsu', 1),
    ('CN', 'CN-JX', 'Jiangxi', 1),
    ('CN', 'CN-LN', 'Liaoning', 1),
    ('CN', 'CN-MO', 'Macau', 1),
    ('CN', 'CN-NM', 'Inner Mongolia', 1),
    ('CN', 'CN-NX', 'Ningxia Hui ', 1),
    ('CN', 'CN-QH', 'Qinghai', 1),
    ('CN', 'CN-SC', 'Sichuan', 1),
    ('CN', 'CN-SD', 'Shandong', 1),
    ('CN', 'CN-SH', 'Shanghai', 1),
    ('CN', 'CN-SN', 'Shaanxi', 1),
    ('CN', 'CN-SX', 'Shanxi', 1),
    ('CN', 'CN-TJ', 'Tianjin', 1),
    ('CN', 'CN-TW', 'Taiwan', 1),
    ('CN', 'CN-XJ', 'Xinjiang Uyghur', 1),
    ('CN', 'CN-XZ', 'Tibet', 1),
    ('CN', 'CN-YN', 'Yunnan', 1),
    ('CN', 'CN-ZJ', 'Zhejiang', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_china_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_china_states_provinces_activate' );
