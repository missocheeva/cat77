<?php
class Slide extends DataObject {
	public static $db = array(
		"NameCaption" => "Varchar(255)",
		"Caption" => "HTMLText",
		"CatBulletOne" => "Varchar(255)",
		"CatBulletTwo" => "Varchar(255)",
		"CatBulletThree" => "Varchar(255)",
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
		
		$fields->addFieldToTab('Root.Main', new TextField('NameCaption','Name'));
		$fields->addFieldToTab("Root.Main", new HtmlEditorField("Caption","Caption"));
		$fields->addFieldToTab('Root.Main', new TextField('CatBulletOne','Bullet point'));
		$fields->addFieldToTab('Root.Main', new TextField('CatBulletTwo','Bullet point'));
		$fields->addFieldToTab('Root.Main', new TextField('CatBulletThree','Bullet point'));
		$fields->addFieldToTab('Root.Main', new UploadField('Image','Slide Image'));
		return $fields;
	}
}