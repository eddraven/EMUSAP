<?php

class IndexController {
	public $default_layout = "layout";

	public function indexAction(){
		$meta = array("title"=>".: HOSPITAL :.");
		View::render($this,"index/index",array("meta"=>$meta));
	}

	public function unitsAction(){
		$meta = array("title"=>".: HOSPITAL :.");
		View::render($this,"index/units",array("meta"=>$meta));
	}

	

}


?>