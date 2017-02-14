<?php  

/**
* 
*/
class PayShortCutMembership
{ 
	function __construct()
	{ 
		// print "payshortcut membership init..";

		$this->define_files();

	}
	public function run()
	{
		// print "<br> running....";
	}
	public function define_files()
	{
		require_once ( ABSPATH . 'wp-content/plugins/payshortcut-membership/includes/payshortcut-helper.php' );
		require_once ( ABSPATH . 'wp-content/plugins/payshortcut-membership/includes/api/PayShortCut.php' );


	}
}