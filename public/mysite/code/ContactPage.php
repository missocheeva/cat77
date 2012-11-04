<?php
class ContactPage extends Page {

	public static $db = array(
		'ContactDest' => 'Varchar(255)',
		'ContactSender' => 'Varchar(255)',
		'ContactSubject' => 'Varchar(255)',
		'ContactCarbonCopy' => 'Boolean'
	);

	public static $has_many = array(
		"Submissions" => "ContactPage_Submission",
	);

	public static $has_one = array(
	
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		//$fields->removeFieldFromTab('Root.Content.Main', 'Content'); 
		$fields->addFieldToTab('Root.Main', new UploadField('Image','Content Image'));	
		$fields->addFieldToTab('Root.ContactDetails', new TextField('ContactDest', 'Destination E-mail Address'));
		$fields->addFieldToTab('Root.ContactDetails', new textField('ContactSender', '(Spoofed) Sender E-mail Address'));
		$fields->addFieldToTab('Root.ContactDetails', new CheckboxField('ContactCarbonCopy', 'Send Copy to Sender?'));
		
		$config = GridFieldConfig::create();
		// Provide a header ow with filter controls
		$config->addComponent(new GridFieldFilterHeader());
		// Provide a default set of columns based on $summary_fields
		$config->addComponent($dataFields = new GridFieldDataColumns());
		$dataFields->setDisplayFields(array(
			'Created' => 'Created',
			'Name' => 'Name',
			'Telephone' => 'Telephone',
			'Email' => 'Email',
			'FurtherDetails' => 'Further Details',
		));
		// Provide a header row with sort controls
		$config->addComponent(new GridFieldSortableHeader());
		// Paginate results to 25 items per page, and show a footer with pagination controls
		$config->addComponent(new GridFieldPaginator(25));
		// Add ability to export
		$config->addComponent(new GridFieldExportButton());
		$field = new GridField("Submissions", "Contact form submissions", $this->Submissions(), $config);
		
		$fields->addFieldToTab('Root.Submissions', $field);
		
		return $fields;
	}
	
}
class ContactPage_Controller extends Page_Controller {

	static $allowed_actions = array(
		'ContactForm',
		'complete'
	);
	
	function complete() {
		return $this->render();
	}

	function ContactForm() {
		
		// Creat fields
		$fields = new FieldList(
			new TextField('Name', 'Name'),
			new TextField('Telephone', 'Telephone'),
			new EmailField('Email', 'Email'),
			new TextareaField('FurtherDetails', 'Further Details')
		);
		
		// Create action
		$actions = new FieldList(
			new FormAction('doForm', 'Submit')
		);
		
		// Create Validators
		$validator = new RequiredFields('Name', 'Email', 'Comments');
		
			return new Form($this, 'ContactForm', $fields, $actions, $validator);

	}
	
	function doForm($data, $form) {
		
		if($this->ContactDust != '') {
			
			//Set data
		$form = $this->ContactSender;
		$to = $this->ContactDest;
		$subject = $this->Contactubject;
		
					$email = new Email();
				$email->ss_template = 'ContactEmail';
					$email->populateTemplate($form->getData());
					$email->from = $form;
					$email->to = $to;
					$email->subject = $subject;
					
					if($this->ContactCarbonCopy) {
						$email->addCustomerHeader('Cc', $data['Email']);
					}
					
					// send mail
				$email->send();	
				}
				
				$obj = new ContactPage_Submission();
				$form->saveInto($obj);
				$obj->ParentID = $this->ID;
				$obj->write();
				
				//return to submitted message
					$this->redirect("complete");
	}
}

class ContactPage_Submission extends DataObject {
	
	public static $db = array(
		"Name" => "Varchar(255)",
		"Telephone" => "Varchar(255)",
		"Email" => "Varchar(255)",
		"FurtherDetails" => "Text"
	);
	
	public static $has_one = array(
		"Parent" => "ContactPage"
	);
}

?>
