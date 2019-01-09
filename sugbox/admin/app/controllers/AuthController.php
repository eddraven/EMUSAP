<?php

class AuthController {
	public $default_layout = "layout";

	public function logoutAction(){
		unset($_SESSION["admin_id"]);
		session_destroy();
		Core::redir("./");
	}

	


}


?>