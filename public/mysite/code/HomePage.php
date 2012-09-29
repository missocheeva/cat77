<?php
class HomePage extends Page {

	public static $db = array(
		"AsideContentOne" => "VarChar(100)",
		"AsideContentTwo" => "VarChar(100)",
		"AsideContentThree" => "VarChar(100)",
		"AsideContentFour" => "VarChar(100)",
		"AsideTitleOne" => "VarChar(50)",
		"AsideTitleTwo" => "VarChar(50)",
		"AsideTitleThree" => "VarChar(50)",
		"AsideTitleFour" => "VarChar(50)"
		
	);

	public static $has_one = array(
	);
	
	public static $has_many = array(
		"Slides" => "Slide"
	);

	public function getCMSFields(){
			$fields = parent::getCMSFields();
			$fields->addFieldToTab("Root.Aside", new TextField("AsideTitleOne","Home Page Sidebar Title 1"));
			$fields->addFieldToTab("Root.Aside", new TextField("AsideContentOne","Home Page Sidebar 1"));
			$fields->addFieldToTab("Root.Aside", new TextField("AsideTitleTwo","Home Page Sidebar Title 2"));
			$fields->addFieldToTab("Root.Aside", new TextField("AsideContentTwo","Home Page Sidebar 2"));
			$fields->addFieldToTab("Root.Aside", new TextField("AsideTitleThree","Home Page Sidebar Title 3"));
			$fields->addFieldToTab("Root.Aside", new TextField("AsideContentThree","Home Page Sidebar 3"));
			$fields->addFieldToTab("Root.Aside", new TextField("AsideTitleFour","Home Page Sidebar Title 4"));
			$fields->addFieldToTab("Root.Aside", new TextField("AsideContentFour","Home Page Sidebar 4"));
			
			$config = GridFieldConfig_RelationEditor::create();
			$config->getComponentByType('GridFieldDataColumns')->setDisplayFields(array(
				  'Caption' => 'Caption'
			));
			$config->addComponent(new GridFieldSortableRows('SortColumn'));
			$field = new GridField("Slides", "Slide images", $this->Slides(), $config);


			$fields->addFieldToTab('Root.Slides', $field);
			return $fields;
	}
	
}
class HomePage_Controller extends Page_Controller {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	public static $allowed_actions = array (
	);

	public function init() {
		parent::init();

	}

}