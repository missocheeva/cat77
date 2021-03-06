<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'root',
	"password" => 'omega',
	"database" => 'SS_mysite',
	"path" => '',
);

MySQLDatabase::set_connection_charset('utf8');


Director::set_environment_type("dev");


// Set the current theme. More themes can be downloaded from
// http://www.silverstripe.org/themes/
SSViewer::set_theme('default');

// Set the site locale
i18n::set_locale('en_GB');

// Enable nested URLs for this site (e.g. page/sub-page/)
if (class_exists('SiteTree')) SiteTree::enable_nested_urls();

Object::add_extension('Image','CroppedFillImageExtension');