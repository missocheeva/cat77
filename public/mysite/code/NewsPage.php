<?php
class NewsPage extends Page {

	public static $db = array(
		"NewsSummary" => "HTMLText"
	);

	public static $has_one = array(
	);

	public function getCMSFields(){
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Main', new HtmlEditorField('NewsSummary','News Letter Summary'),'Content');
		return $fields;
	}
	
}
class NewsPage_Controller extends Page_Controller {

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

		// Note: you should use SS template require tags inside your templates 
		// instead of putting Requirements calls here.  However these are 
		// included so that our older themes still work
		//Requirements::themedCSS('reset');
		//Requirements::themedCSS('layout'); 
		//Requirements::themedCSS('typography'); 
		//Requirements::themedCSS('form'); 
	}

}