<?php   
ob_start(); 
/**
 * Plugin Name: Payshortcut Membership
 * Author: Jesus Erwin Suarez
 * Version: 0.1 
 * Description: This is to connect with payshortcut
 */ 
function payshortcut_membership() { 
	require_once(ABSPATH . 'wp-content/plugins/payshortcut-membership/includes/PayShortCutMembership.php');
	$payshortcutMembership = new PayShortCutMembership();
	$payshortcutMembership->run(); 
}  
payshortcut_membership(); 
ob_flush();