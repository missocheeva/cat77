<?php
class NewsListPage extends Page {

	public static $db = array(

	);

	public static $has_one = array(
	);

	public function getCMSFields(){
		$fields = parent::getCMSFields();
		
		return $fields;
	}
	
}
class NewsListPage_Controller extends Page_Controller {


	public static $allowed_actions = array (
	);

	public function init() {
		parent::init();
	}
	
	public function GetChildren($Limit = 5) {
		$Children = $this->Children();
		return $Children->getRange(0, $Limit); 
	}

}