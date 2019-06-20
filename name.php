<?php
header("Content-Type:text/html;charset=UTF-8");

session_start();

require_once "config.php";
require_once "functions.php";

db(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

$categories = get_categories();
$razd = get_razdel();
$user = check_user();

if($user) {
	$add_mess = can($user['id_role'],array("ADD_MESS"));
}
$action = clear_str($_GET['action']);
if(!$action) {
	$action = "main";
}

if(file_exists(ACTIONS.$action.".php")) {
	include ACTIONS.$action.".php";
}
else {
	include ACTIONS."main.php";
}

if($action != 'categories') {
	$m_action = "main";	
}
else {
	$m_action = $action;
}

require_once TEMPLATE."/index.php";
?>