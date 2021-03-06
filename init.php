<?php
/**
 * KD·BDND
 **/
/*define*/
date_default_timezone_set("Asia/Shanghai");
define('SYSTEM_ROOT',dirname(__FILE__));
define('PLUGINS_ROOT',dirname(__FILE__).'/plugins');
define('LIB_ROOT',dirname(__FILE__).'/lib');
define('SYSTEM_VER','v6.5.1');
define('CHECK_VER',18092401);
/*active mode*/
$active_mode = true;//网站状态，true为开，false为关
$active_date = 19700101;//重开日期，时间到达以后会无视上一条状态开站
$active_list = 'error|admin|logout|about|share|login';//不受关站影响页面
/*load kernel files*/
require(SYSTEM_ROOT.'/db/config.php');
require(LIB_ROOT.'/scurl.php');
require(LIB_ROOT.'/others.php');
require(LIB_ROOT.'/cpall.php');
/*auto load plugins*/
$pluginslist = glob(PLUGINS_ROOT . "/*.php");
foreach ($pluginslist as $key) {
    require($key);
}
/*load translate info*/
$translate = json_decode(file_get_contents(SYSTEM_ROOT . '/db/translate/'.$language.'.json'),true);
/*load api msg*/
$api_msg = json_decode(file_get_contents(SYSTEM_ROOT . '/db/translate/api_'.$language.'.json'),true);
/*load plugins info*/
$show_page_info = json_decode(file_get_contents(SYSTEM_ROOT . '/db/page_info.json'),true);
/*load seo info*/
$seo_info = json_decode(file_get_contents(SYSTEM_ROOT . '/db/seo_info.json'),true);
