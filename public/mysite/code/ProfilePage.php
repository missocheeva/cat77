<?php
class ProfilePage extends Page {

	public static $db = array(
		'ListImageAltText' => 'Varchar',
		'CatTemper' => 'Varchar(255)',
		'CatAge' => 'Varchar',
		'CatHome' => 'Varchar(255)',
		'CatLost' => 'Boolean',
		'CatFound' => 'Boolean'
	);

	public static $has_one = array(
		'CatImage' => 'Image'
	);
	
	public static $defaults = array(
		'CatLost' => false ,
		'CatFound' => false ,
	);
	
	public function getCMSFields(){
			$fields = parent::getCMSFields();
			
			$fields->removeFieldFromTab('Root.Main','SubTitle');
			
			$fields->addFieldToTab('Root.Main', new UploadField('CatImage','Cat List Image'));
			$fields->addFieldToTab('Root.Main', new TextField('ListImageAltText','Cat List Image Alt Text'));
			$fields->addFieldToTab('Root.Main', new CheckboxField('CatLost','Check if the cat has gone missing:'),"URLSegment");
			$fields->addFieldToTab('Root.Main', new CheckboxField('CatFound','Check if the a domestic cat has been found:'),"URLSegment");
			$fields->addFieldToTab('Root.Main', new TextField('CatTemper','Cats Temperament e.g. Timid feral :'),"URLSegment");
			$fields->addFieldToTab('Root.Main', new TextField('CatAge','Cats Age :'),"URLSegment");
			$fields->addFieldToTab('Root.Main', new TextField('CatHome','Cat Home Needs :'),"URLSegment");
			return $fields;
	}
	
}
class ProfilePage_Controller extends Page_Controller {

	public function CatStatus() {
		
	}
	
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