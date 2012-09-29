<?php
class Slide extends DataObject {
	public static $db = array(
		"Caption" => "HTMLText",
		"SortColumn" => "Int"
	);
	
	public static $has_one = array(
		"Parent" => "HomePage",
		"Image" => "Image"
	);
	
	public static $default_sort = "SortColumn ASC";
	
	public function getCMSFields(){
		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.Main", new HiddenField("ParentID"));
		$fields->addFieldToTab("Root.Main", new HiddenField("SortColumn"));
		$fields->addFieldToTab("Root.Main", new HtmlEditorField("Caption","Caption"));
		$fields->addFieldToTab('Root.Main', new UploadField('Image','Slide Image'));
		return $fields;
	}
}