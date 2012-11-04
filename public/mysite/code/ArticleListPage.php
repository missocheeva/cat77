<?php
class ArticleListPage extends Page {

	public static $db = array(

	);

	public static $has_one = array(
	);
	
	static $allowed_children = array('ArticlePage','ArticleListPage');

	public function getCMSFields(){
		$fields = parent::getCMSFields();
		
		return $fields;
	}
	
}
class ArticleListPage_Controller extends Page_Controller {


	public static $allowed_actions = array (
	);

	public function init() {
		parent::init();
	}
	
	public function GetChildren($Limit = 10) {
		$Children = $this->Children();
		return $Children->limit($Limit, 0); 
	}

}