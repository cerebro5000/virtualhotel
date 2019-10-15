<?php 
/**
* 
*/
class Session
{
	function __construct()
	{
		if(!isset($_SESSION)){
			session_start();
		}
		
	}

	public function getsession()
	{
		return $_SESSION;
	}

	public function setsession($value)
	{
		$_SESSION['session'] = $value;
	}

	public function destruirsesion()
	{
		session_unset();
		session_destroy();
	}
	
}
 ?>