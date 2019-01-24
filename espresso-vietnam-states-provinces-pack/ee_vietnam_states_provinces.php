<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: Vietnam
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds states/provinces for the country of Vietnam to Event Espresso 4.
  Version: 1.0
  Author: Event Espresso
  Author URI: http://www.eventespresso.com
  Copyright 2014 Event Espresso (email : support@eVNntespresso.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, Version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
  GNU General Public License for more details.

  You should have receiVNd a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA02110-1301USA
*/

function ee_vietnam_states_provinces_activate() {
  $installed = get_option( 'ee_vietnam_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('VN', 'VN-BG', 'Bắc Giang', 1),
    ('VN', 'VN-BK', 'Bắc Kạn', 1),
    ('VN', 'VN-CB', 'Cao Bằng', 1),
    ('VN', 'VN-HG', 'Hà Giang', 1),
    ('VN', 'VN-LS', 'Lạng Sơn', 1),
    ('VN', 'VN-PT', 'Phú Thọ', 1),
    ('VN', 'VN-QN', 'Quảng Ninh', 1),
    ('VN', 'VN-TN', 'Thái Nguyên', 1),
    ('VN', 'VN-TQ', 'Tuyên Quang ', 1),
    ('VN', 'VN-LC', 'Lào Cai', 1),
    ('VN', 'VN-YB', 'Yên Bái', 1),
    ('VN', 'VN-DB', 'Điện Biên', 1),
    ('VN', 'VN-HB', 'Hòa Bình', 1),
    ('VN', 'VN-LA', 'Lai Châu', 1),
    ('VN', 'VN-SL', 'Sơn La', 1),
    ('VN', 'VN-BN', 'Bắc Ninh', 1),
    ('VN', 'VN-PL', 'Phủ Lý', 1),
    ('VN', 'VN-HD', 'Hải Dương', 1),
    ('VN', 'VN-HY', 'Hưng Yên', 1),
    ('VN', 'VN-ND', 'Nam Định', 1),
    ('VN', 'VN-NB', 'Ninh Bình', 1),
    ('VN', 'VN-TB', 'Thái Bình', 1),
    ('VN', 'VN-VP', 'Vĩnh Phúc', 1),
    ('VN', 'VN-HNO', 'Hà Nội', 1),
    ('VN', 'VN-HPO', 'Hải Phòng', 1),
    ('VN', 'VN-HTI', 'Hà Tĩnh', 1),
    ('VN', 'VN-NAN', 'Nghệ An', 1),
    ('VN', 'VN-QBH', 'Quảng Bình', 1),
    ('VN', 'VN-QTI', 'Quảng Trị', 1),
    ('VN', 'VN-THA', 'Thanh Hóa', 1),
    ('VN', 'VN-TTH', 'Thừa Thiên–Huế', 1),
    ('VN', 'VN-DL', 'Đắk Lắk', 1),
    ('VN', 'VN-DN', 'Đắk Nông', 1),
    ('VN', 'VN-GL', 'Gia Lai', 1),
    ('VN', 'VN-KT', 'Kon Tum', 1),
    ('VN', 'VN-LD', 'Lâm Đồng', 1),
    ('VN', 'VN-01', 'Bình Định', 1),
    ('VN', 'VN-02', 'Bình Thuận', 1),
    ('VN', 'VN-03', 'Khánh Hòa', 1),
    ('VN', 'VN-04', 'Ninh Thuận', 1),
    ('VN', 'VN-05', 'Phú Yên', 1),
    ('VN', 'VN-06', 'Quảng Nam', 1),
    ('VN', 'VN-07', 'Quảng Ngãi', 1),
    ('VN', 'VN-08', 'Đà Nẵng', 1),
    ('VN', 'VN-09', 'Bà Rịa–Vũng Tàu', 1),
    ('VN', 'VN-10', 'Bình Dương', 1),
    ('VN', 'VN-11', 'Bình Phước', 1),
    ('VN', 'VN-12', 'Đồng Nai', 1),
    ('VN', 'VN-13', 'Tây Ninh', 1),
    ('VN', 'VN-14', 'Hồ Chí Minh', 1),
    ('VN', 'VN-15', 'An Giang', 1),
    ('VN', 'VN-16', 'Bạc Liêu', 1),
    ('VN', 'VN-17', 'Bến Tre', 1),
    ('VN', 'VN-18', 'Cà Mau', 1),
    ('VN', 'VN-19', 'Đồng Tháp', 1),
    ('VN', 'VN-20', 'Hậu Giang', 1),
    ('VN', 'VN-21', 'Kiên Giang', 1),
    ('VN', 'VN-22', 'Long An', 1),
    ('VN', 'VN-23', 'Sóc Trăng', 1),
    ('VN', 'VN-24', 'Tiền Giang', 1),
    ('VN', 'VN-25', 'Trà Vinh', 1),
    ('VN', 'VN-26', 'Vĩnh Long', 1),
    ('VN', 'VN-27', 'Cần Thơ', 1);";

  if ($wpdb->query($sql)){

    add_option( 'ee_vietnam_states_provinces_added', 1, '', 'no' );

  }

}

register_activation_hook( __FILE__, 'ee_vietnam_states_provinces_activate' );
