<?php
/*
  Plugin Name: Event Espresso - States/Provinces Pack: United Kingdom
  Plugin URI: http://www.eventespresso.com
  Description: The Event Espresso New Addon adds United Kingdom States/Provinces to Event Espresso 4
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

function ee_united_kingdom_states_provinces_activate() {
  $installed = get_option( 'ee_united_kingdom_states_provinces_added');
  
  if ($installed) return;

  global $wpdb;

  $sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
    ('GB', 'GB-ABD', 'Aberdeenshire', 1),
    ('GB', 'GB-AGY', 'Anglesey', 1),
    ('GB', 'GB-ALD', 'Alderney', 1),
    ('GB', 'GB-ANS', 'Angus', 1),
    ('GB', 'GB-ANT', 'Co. Antrim', 1),
    ('GB', 'GB-ARL', 'Argyllshire', 1),
    ('GB', 'GB-ARM', 'Co. Armagh', 1),
    ('GB', 'GB-AVN', 'Avon', 1),
    ('GB', 'GB-AYR', 'Ayrshire', 1),
    ('GB', 'GB-BAN', 'Banffshire', 1),
    ('GB', 'GB-BDF', 'Bedfordshire', 1),
    ('GB', 'GB-BEW', 'Berwickshire', 1),
    ('GB', 'GB-BKM', 'Buckinghamshire', 1),
    ('GB', 'GB-BOR', 'Borders', 1),
    ('GB', 'GB-BRE', 'Breconshire', 1),
    ('GB', 'GB-BRK', 'Berkshire', 1),
    ('GB', 'GB-BUT', 'Bute', 1),
    ('GB', 'GB-CAE', 'Caernarvonshire', 1),
    ('GB', 'GB-CAI', 'Caithness', 1),
    ('GB', 'GB-CAM', 'Cambridgeshire', 1),
    ('GB', 'GB-CAR', 'Co. Carlow', 1),
    ('GB', 'GB-CAV', 'Co. Cavan', 1),
    ('GB', 'GB-CEN', 'Central', 1),
    ('GB', 'GB-CGN', 'Cardiganshire', 1),
    ('GB', 'GB-CHI', 'Channel Islands', 1),
    ('GB', 'GB-CHS', 'Cheshire', 1),
    ('GB', 'GB-CLA', 'Co. Clare', 1),
    ('GB', 'GB-CLK', 'Clackmannanshire', 1),
    ('GB', 'GB-CLV', 'Cleveland', 1),
    ('GB', 'GB-CMA', 'Cumbria', 1),
    ('GB', 'GB-CMN', 'Carmarthenshire', 1),
    ('GB', 'GB-CON', 'Cornwall', 1),
    ('GB', 'GB-COR', 'Co. Cork', 1),
    ('GB', 'GB-CUL', 'Cumberland', 1),
    ('GB', 'GB-CWD', 'Clwyd', 1),
    ('GB', 'GB-DBY', 'Derbyshire', 1),
    ('GB', 'GB-DEN', 'Denbighshire', 1),
    ('GB', 'GB-DEV', 'Devon', 1),
    ('GB', 'GB-DFD', 'Dyfed', 1),
    ('GB', 'GB-DFS', 'Dumfries-shire', 1),
    ('GB', 'GB-DGY', 'Dumfries and Galloway', 1),
    ('GB', 'GB-DNB', 'Dunbartonshire', 1),
    ('GB', 'GB-DON', 'Co. Donegal', 1),
    ('GB', 'GB-DOR', 'Dorset', 1),
    ('GB', 'GB-DOW', 'Co. Down', 1),
    ('GB', 'GB-DUB', 'Co. Dublin', 1),
    ('GB', 'GB-DUR', 'Co. Durham', 1),
    ('GB', 'GB-ELN', 'East Lothian', 1),
    ('GB', 'GB-ENG', 'England', 1),
    ('GB', 'GB-ERY', 'East Riding of Yorkshire', 1),
    ('GB', 'GB-ESS', 'Essex', 1),
    ('GB', 'GB-FER', 'Co. Fermanagh', 1),
    ('GB', 'GB-FIF', 'Fife', 1),
    ('GB', 'GB-FLN', 'Flintshire', 1),
    ('GB', 'GB-GAL', 'Co. Galway', 1),
    ('GB', 'GB-GLA', 'Glamorgan', 1),
    ('GB', 'GB-GLS', 'Gloucestershire', 1),
    ('GB', 'GB-GMP', 'Grampian', 1),            
    ('GB', 'GB-GNT', 'Gwent', 1),
    ('GB', 'GB-GSY', 'Guernsey', 1),
    ('GB', 'GB-GTM', 'Greater Manchester', 1),
    ('GB', 'GB-GWN', 'Gwynedd', 1),
    ('GB', 'GB-HAM', 'Hampshire', 1),
    ('GB', 'GB-HEF', 'Herefordshire', 1),
    ('GB', 'GB-HLD', 'Highland', 1),
    ('GB', 'GB-HRT', 'Hertfordshire', 1),
    ('GB', 'GB-HUM', 'Humberside', 1),    
    ('GB', 'GB-HUN', 'Huntingdonshire', 1),
    ('GB', 'GB-HWR', 'Hereford and Worcester', 1),
    ('GB', 'GB-INV', 'Inverness-shire', 1),
    ('GB', 'GB-IOM', 'Isle of Man', 1),
    ('GB', 'GB-IOW', 'Isle of Wight', 1),
    ('GB', 'GB-IRL', 'Ireland', 1),
    ('GB', 'GB-JSY', 'Jersey', 1),
    ('GB', 'GB-KCD', 'Kincardineshire', 1),
    ('GB', 'GB-KEN', 'Kent', 1),
    ('GB', 'GB-KER', 'Co. Kerry', 1),
    ('GB', 'GB-KID', 'Co. Kildare', 1),
    ('GB', 'GB-KIK', 'Co. Kilkenny', 1),
    ('GB', 'GB-KKD', 'Kirkcudbrightshire', 1),
    ('GB', 'GB-KRS', 'Kinross-shire', 1),
    ('GB', 'GB-LAN', 'Lancashire', 1),
    ('GB', 'GB-LDY', 'Co. Londonderry', 1),
    ('GB', 'GB-LEI', 'Leicestershire', 1),
    ('GB', 'GB-LET', 'Co. Leitrim', 1),            
    ('GB', 'GB-LEX', 'Co. Laois', 1),
    ('GB', 'GB-LIM', 'Co. Limerick', 1),
    ('GB', 'GB-LIN', 'Lincolnshire', 1), 
    ('GB', 'GB-LKS', 'Lanarkshire', 1),
    ('GB', 'GB-LND', 'London', 1),
    ('GB', 'GB-LOG', 'Co. Longford', 1),
    ('GB', 'GB-LOU', 'Co. Louth', 1),
    ('GB', 'GB-LTN', 'Lothian', 1),
    ('GB', 'GB-MAY', 'Co. Mayo', 1),
    ('GB', 'GB-MDX', 'Middlesex', 1),
    ('GB', 'GB-MEA', 'Co. Meath', 1),
    ('GB', 'GB-MER', 'Merionethshire', 1),
    ('GB', 'GB-MGM', 'Mid Glamorgan', 1),
    ('GB', 'GB-MGY', 'Montgomeryshire', 1),
    ('GB', 'GB-MLN', 'Midlothian', 1),
    ('GB', 'GB-MOG', 'Co. Monaghan', 1),
    ('GB', 'GB-MON', 'Monmouthshire', 1),            
    ('GB', 'GB-MOR', 'Morayshire', 1),
    ('GB', 'GB-MSY', 'Merseyside', 1),
    ('GB', 'GB-NAI', 'Nairn', 1),
    ('GB', 'GB-NBL', 'Northumberland', 1),
    ('GB', 'GB-NFK', 'Norfolk', 1),
    ('GB', 'GB-NIR', 'Northern Ireland, County', 1),
    ('GB', 'GB-NRY', 'North Riding of Yorkshire', 1),
    ('GB', 'GB-NTH', 'Northamptonshire', 1),
    ('GB', 'GB-NTT', 'Nottinghamshire', 1),
    ('GB', 'GB-NYK', 'North Yorkshire', 1),
    ('GB', 'GB-OFF', 'Co. Offaly', 1),
    ('GB', 'GB-OKI', 'Orkney', 1),
    ('GB', 'GB-OXF', 'Oxfordshire', 1),
    ('GB', 'GB-PEE', 'Peebles-shire', 1),
    ('GB', 'GB-PEM', 'Pembrokeshire', 1),
    ('GB', 'GB-PER', 'Perth', 1),
    ('GB', 'GB-POW', 'Powys', 1),
    ('GB', 'GB-RAD', 'Radnorshire', 1),
    ('GB', 'GB-RFW', 'Renfrewshire', 1),
    ('GB', 'GB-ROC', 'Ross and Cromarty', 1),
    ('GB', 'GB-ROS', 'Co. Roscommon', 1),
    ('GB', 'GB-ROX', 'Roxburghshire', 1),
    ('GB', 'GB-RUT', 'Rutland', 1),
    ('GB', 'GB-SAL', 'Shropshire', 1),
    ('GB', 'GB-SCT', 'Scotland', 1),
    ('GB', 'GB-SEL', 'Selkirkshire', 1),            
    ('GB', 'GB-SFK', 'Suffolk', 1),
    ('GB', 'GB-SGM', 'South Glamorgan', 1),
    ('GB', 'GB-SHI', 'Shetland', 1),
    ('GB', 'GB-SLI', 'Co. Sligo', 1),
    ('GB', 'GB-SOM', 'Somerset', 1), 
    ('GB', 'GB-SRK', 'Sark', 1), 
    ('GB', 'GB-SRK', 'Surrey', 1),
    ('GB', 'GB-SRX', 'Sussex', 1),
    ('GB', 'GB-STD', 'Strathclyde', 1),
    ('GB', 'GB-STI', 'Stirlingshire', 1),
    ('GB', 'GB-STS', 'Staffordshire', 1),
    ('GB', 'GB-SUT', 'Sutherland', 1),
    ('GB', 'GB-SXE', 'East Sussex', 1),
    ('GB', 'GB-SXW', 'West Sussex', 1),
    ('GB', 'GB-SYK', 'South Yorkshire', 1),
    ('GB', 'GB-TAY', 'Tayside', 1),
    ('GB', 'GB-TIP', 'Co. Tipperary', 1),
    ('GB', 'GB-TWR', 'Tyne and Wear', 1),
    ('GB', 'GB-TYR', 'Co. Tyrone', 1),
    ('GB', 'GB-WLS', 'Wales', 1),            
    ('GB', 'GB-WAR', 'Warwickshire', 1),
    ('GB', 'GB-WAT', 'Co. Waterford', 1),
    ('GB', 'GB-WEM', 'Co. Westmeath', 1),
    ('GB', 'GB-WES', 'Westmorland', 1),
    ('GB', 'GB-WEX', 'Co. Wexford', 1),
    ('GB', 'GB-WGM', 'West Glamorgan', 1),
    ('GB', 'GB-WIC', 'Co. Wicklow', 1),
    ('GB', 'GB-WIG', 'Wigtownshire', 1),
    ('GB', 'GB-WIL', 'Wiltshire', 1),
    ('GB', 'GB-WIS', 'Western Isles', 1),
    ('GB', 'GB-WLN', 'West Lothian', 1),
    ('GB', 'GB-WMD', 'West Midlands', 1),
    ('GB', 'GB-WOR', 'Worcestershire', 1),
    ('GB', 'GB-WRY', 'West Riding of Yorkshire', 1),
    ('GB', 'GB-WYK', 'West Yorkshire', 1),
    ('GB', 'GB-YKS', 'Yorkshire', 1);";

  if ($wpdb->query($sql)){
    
    add_option( 'ee_united_kingdom_states_provinces_added', 1, '', 'no' );

  }

}
register_activation_hook( __FILE__, 'ee_united_kingdom_states_provinces_activate' );
