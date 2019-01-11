<?php

class PersonController {
	public $default_layout = "layout";

	public function newAction(){
		$meta = array("title"=>"Hello LB");
		View::render2($this,"person/new",array("meta"=>$meta));
	}

	public function editAction(){
		$meta = array("title"=>"Hello LB");
		View::render2($this,"person/edit",array("meta"=>$meta));
	}

	public function delAction(){
		$person = PersonData::getById($_GET["id"]);
		$person->del();
		Core::redir("./");
	}

	
}


?>