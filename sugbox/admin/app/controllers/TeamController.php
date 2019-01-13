<?php

class TeamController {
	public $default_layout = "layout";

	public function indexAction(){
		$meta = array("title"=>".: SORIANA :.");
		View::render2($this,"team/index",array("meta"=>$meta));
	}

	public function openAction(){
		$meta = array("title"=>".: SORIANA :.");
		View::render2($this,"team/open",array("meta"=>$meta));
	}


	public function newAction(){
		$meta = array("title"=>".: SORIANA :.");
		View::render2($this,"team/new",array("meta"=>$meta));
	}

	
}


?>