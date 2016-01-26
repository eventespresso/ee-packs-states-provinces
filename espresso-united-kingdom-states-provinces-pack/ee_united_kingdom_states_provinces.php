<?php
/*
  Plugin Name: Event Espresso - Counties Pack: United Kingdom
  Plugin URI: http://www.eventespresso.com
  Description: This plugins adds the UK counties to the 'state' selection for the United Kingdom.
  Version: 2.0
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

	//Get out if the state pack has been installed previously
	if ($installed) return;

	global $wpdb;

	$sql = "INSERT INTO `" . $wpdb->prefix . "esp_state` (`CNT_ISO`, `STA_abbrev`, `STA_name`, `STA_active`) VALUES
		('GB', 'England', 'England', 1),

		('GB', 'Avon', 'Avon', 1),
		('GB', 'Beds', 'Bedfordshire', 1),
		('GB', 'Berks', 'Berkshire', 1),
		('GB', 'Cambs', 'Cambridgeshire', 1),
		('GB', 'Bristol', 'Bristol (city)', 1),
		('GB', 'Bucks', 'Buckinghamshire', 1),
		('GB', 'Cambs', 'Cambridgeshire', 1),
		('GB', 'Cheshire', 'Cheshire', 1),
		('GB', 'Cleveland', 'Cleveland', 1),
		('GB', 'Cornwall', 'Cornwall', 1),
		('GB', 'Co Durham', 'County Durham', 1),
		('GB', 'Cumberland', 'Cumberland', 1),
		('GB', 'Cumbria', 'Cumbria', 1),
		('GB', 'Derbyshire', 'Derbyshire', 1),
		('GB', 'Devon', 'Devon', 1),
		('GB', 'Dorset', 'Dorset', 1),
		('GB', 'Durham', 'Durham', 1),
		('GB', 'E Yorks', 'East Riding of Yorkshire', 1),
		('GB', 'E Sussex', 'East Sussex', 1),
		('GB', 'Essex', 'Essex', 1),
		('GB', 'Glos', 'Gloucestershire', 1),
		('GB', 'Manchester', 'Greater Manchester', 1),
		('GB', 'Hants', 'Hampshire', 1),
		('GB', 'Hereford and Worcester', 'Hereford and Worcester', 1),
		('GB', 'Herefs', 'Herefordshire', 1),
		('GB', 'Herts', 'Hertfordshire', 1),
		('GB', 'Humberside', 'Humberside', 1),
		('GB', 'Isle of Wight', 'Isle of Wight', 1),
		('GB', 'Kent', 'Kent', 1),
		('GB', 'Lancs', 'Lancashire', 1),
		('GB', 'Leics', 'Leicestershire', 1),
		('GB', 'Lincs', 'Lincolnshire', 1), 
		('GB', 'London', 'London', 1),
		('GB', 'London', 'Greater London', 1),
		('GB', 'Merseyside', 'Merseyside', 1),
		('GB', 'Middx', 'Middlesex', 1),
		('GB', 'Norfolk', 'Norfolk', 1),
		('GB', 'Northants', 'Northamptonshire', 1),
		('GB', 'Northd', 'Northumberland', 1),
		('GB', 'N Humbs', 'North Humberside', 1),
		('GB', 'N Yorks', 'North Yorkshire', 1),
		('GB', 'Notts', 'Nottinghamshire', 1),
		('GB', 'Oxon', 'Oxfordshire', 1),
		('GB', 'Rutland', 'Rutland', 1),
		('GB', 'Salop', 'Shropshire (as Salop)', 1),
		('GB', 'Shropshire', 'Shropshire', 1),
		('GB', 'Somerset', 'Somerset', 1),
		('GB', 'S Humbs', 'South Humberside', 1),
		('GB', 'S Yorks', 'South Yorkshire', 1),
		('GB', 'Staffs', 'Staffordshire', 1),
		('GB', 'Suffolk', 'Suffolk', 1),
		('GB', 'Surrey', 'Surrey', 1),
		('GB', 'Sussex', 'Sussex', 1),
		('GB', 'Tyne & Wear', 'Tyne and Wear', 1),
		('GB', 'Warks', 'Warwickshire', 1),
		('GB', 'W Mids', 'West Midlands', 1),
		('GB', 'W Sussex', 'West Sussex', 1),
		('GB', 'W Yorks', 'West Yorkshire', 1),
		('GB', 'Wilts', 'Wiltshire', 1),
		('GB', 'Worcs', 'Worcestershire', 1),
		('GB', 'Yorks', 'Yorkshire', 1),

		('GB', 'Scotland', 'Scotland', 1),

		('GB', 'Aberdeen', 'Aberdeen', 1),
		('GB', 'Aberdeenshire', 'Aberdeenshire', 1),
		('GB', 'Angus', 'Angus', 1),
		('GB', 'Argyll', 'Argyll', 1),
		('GB', 'Argyll and Bute', 'Argyll and Bute', 1),
		('GB', 'Ayrshire', 'Ayrshire', 1),
		('GB', 'Banffshire', 'Banffshire', 1),
		('GB', 'Berwickshire', 'Berwickshire', 1),
		('GB', 'Bute', 'Bute', 1),
		('GB', 'Caithness', 'Caithness', 1),
		('GB', 'Clacks', 'Clackmannanshire', 1),
		('GB', 'Dumfries and Galloway', 'Dumfries and Galloway', 1),
		('GB', 'Dumfriesshire', 'Dumfriesshire', 1),
		('GB', 'Dunbartonshire', 'Dunbartonshire', 1),
		('GB', 'Dundee', 'Dundee', 1),
		('GB', 'East Ayrshire', 'East Ayrshire', 1),
		('GB', 'East Dunbartonshire', 'East Dunbartonshire', 1),
		('GB', 'East Lothian', 'East Lothian', 1),
		('GB', 'East Renfrewshire', 'East Renfrewshire', 1),
		('GB', 'Edinburgh', 'Edinburgh', 1),
		('GB', 'Falkirk', 'Falkirk', 1),
		('GB', 'Fife', 'Fife', 1),
		('GB', 'Glasgow', 'Glasgow', 1),
		('GB', 'Highland', 'Highland', 1),
		('GB', 'Inverclyde', 'Inverclyde', 1),
		('GB', 'Inverness-shire', 'Inverness-shire', 1),
		('GB', 'Isle of Arran', 'Isle of Arran', 1),
		('GB', 'Isle of Barra', 'Isle of Barra', 1),
		('GB', 'Isle of Benbecula', 'Isle of Benbecula', 1),
		('GB', 'Isle of Bute', 'Isle of Bute', 1),
		('GB', 'Isle of Canna', 'Isle of Canna', 1),
		('GB', 'Isle of Coll', 'Isle of Coll', 1),
		('GB', 'Isle of Colonsay', 'Isle of Colonsay', 1),
		('GB', 'Isle of Cumbrae', 'Isle of Cumbrae', 1),
		('GB', 'Isle of Eigg', 'Isle of Eigg', 1),
		('GB', 'Isle of Gigha', 'Isle of Gigha', 1),
		('GB', 'Isle of Harris', 'Isle of Harris', 1),
		('GB', 'Isle of Iona', 'Isle of Iona', 1),
		('GB', 'Isle of Islay', 'Isle of Islay', 1),
		('GB', 'Isle of Jura', 'Isle of Jura', 1),
		('GB', 'Isle of Lewis', 'Isle of Lewis', 1),
		('GB', 'Isle of Mull', 'Isle of Mull', 1),
		('GB', 'Isle of North Uist', 'Isle of North Uist', 1),
		('GB', 'Isle of Rhum', 'Isle of Rhum', 1),
		('GB', 'Isle of Scalpay', 'Isle of Scalpay', 1),
		('GB', 'Isle of Skye', 'Isle of Skye', 1),
		('GB', 'Isle of South Uist', 'Isle of South Uist', 1),
		('GB', 'Isle of Tiree', 'Isle of Tiree', 1),
		('GB', 'Kincardinshire', 'Kincardinshire', 1),
		('GB', 'Kinross-shire', 'Kinross-shire', 1),
		('GB', 'Kirkcudbrightshire', 'Kirkcudbrightshire', 1),
		('GB', 'Lanarkshire', 'Lanarkshire', 1),
		('GB', 'Midlothian', 'Midlothian', 1),
		('GB', 'Moray', 'Moray', 1),
		('GB', 'Moray and Nairn', 'Moray and Nairn', 1),
		('GB', 'Moray', 'Moray', 1),
		('GB', 'Na h-Eileanan Siar', 'Na h-Eileanan Siar', 1),
		('GB', 'Nairnshire', 'Nairnshire', 1),
		('GB', 'North Ayrshire', 'North Ayrshire', 1),
		('GB', 'North Lanarkshire', 'North Lanarkshire', 1),
		('GB', 'Orkney', 'Orkney', 1),
		('GB', 'Peeblesshire', 'Peeblesshire', 1),
		('GB', 'Perth and Kinross', 'Perth and Kinross', 1),
		('GB', 'Perthshire', 'Perthshire', 1),
		('GB', 'Renfrewshire', 'Renfrewshire', 1),
		('GB', 'Ross and Cromarty', 'Ross and Cromarty', 1),
		('GB', 'Ross-shire', 'Ross-shire', 1),            
		('GB', 'Roxburghshire', 'Roxburghshire', 1),
		('GB', 'Borders', 'Scottish Borders', 1),
		('GB', 'South Ayrshire', 'South Ayrshire', 1),
		('GB', 'South Lanarkshire', 'South Lanarkshire', 1),
		('GB', 'Selkirkshire', 'Selkirkshire', 1),
		('GB', 'Shetland', 'Shetland', 1),
		('GB', 'Strathclyde', 'Strathclyde', 1),
		('GB', 'Sterling', 'Sterling', 1),
		('GB', 'Stirlingshire', 'Stirlingshire', 1),
		('GB', 'Sutherland', 'Sutherland', 1),
		('GB', 'Tayside', 'Tayside', 1),
		('GB', 'Western Isles', 'Western Isles', 1),
		('GB', 'West Dunbartonshire', 'West Dunbartonshire', 1),
		('GB', 'West Lothian', 'West Lothian', 1),
		('GB', 'Wigtownshire', 'Wigtownshire', 1),

		('GB', 'NI', 'Northern Ireland', 1),

		('GB', 'Antrim', 'Antrim', 1),
		('GB', 'Armagh', 'Armagh', 1),
		('GB', 'Belfast', 'Belfast', 1),
		('GB', 'Co Antrim', 'County Antrim', 1),
		('GB', 'Co Armagh', 'County Armagh', 1),
		('GB', 'Co Down', 'County Down', 1),
		('GB', 'Co Fermanagh', 'County Fermanagh', 1),
		('GB', 'Co Londonderry', 'County Londonderry', 1),
		('GB', 'Co Tyrone', 'County Tyrone', 1),
		('GB', 'Derry', 'Derry', 1),
		('GB', 'Down', 'Down', 1),
		('GB', 'Fermanagh', 'Fermanagh', 1),
		('GB', 'Londonderry', 'Londonderry', 1),
		('GB', 'Tyrone', 'Tyrone', 1),

		('GB', 'Wales', 'Wales', 1),

		('GB', 'Anglesey', 'Anglesey', 1),
		('GB', 'Cardiganshire', 'Cardiganshire', 1),
		('GB', 'Carmarthenshire', 'Carmarthenshire', 1),
		('GB', 'Ceredigion', 'Ceredigion', 1),
		('GB', 'Clwyd', 'Clwyd', 1),
		('GB', 'Denbighshire', 'Denbighshire', 1),
		('GB', 'Dyfed', 'Dyfed', 1),
		('GB', 'Flintshire', 'Flintshire', 1),
		('GB', 'Gwent', 'Gwent', 1),
		('GB', 'Gwynedd', 'Gwynedd', 1),
		('GB', 'M Glam', 'Mid Glamorgan', 1),
		('GB', 'Monmouthshire', 'Monmouthshire', 1),
		('GB', 'Pembrokeshire', 'Pembrokeshire', 1),
		('GB', 'Powys', 'Powys', 1),
		('GB', 'S Glam', 'South Glamorgan', 1),
		('GB', 'W Glam', 'West Glamorgan', 1),

		('GB', 'Crown Dependencies', 'Crown Dependencies', 0),

		('GB', 'Alderney', 'Alderney', 1),
		('GB', 'Isle of Man', 'Isle of Man', 1),
		('GB', 'Jersey', 'Jersey', 1),
		('GB', 'Sark', 'Sark', 1), 
		('GB', 'Guernsey', 'Guernsey', 1);";

	if ($wpdb->query($sql)){
	
		add_option( 'ee_united_kingdom_states_provinces_added', 1, '', 'no' );

		$sql = "UPDATE `" . $wpdb->prefix . "esp_country` SET `CNT_active`= 1 WHERE `CNT_ISO` = 'GB'";
		$wpdb->query($sql)
	}

}
register_activation_hook( __FILE__, 'ee_united_kingdom_states_provinces_activate' );