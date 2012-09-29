<?php
// Activate using the following in the _config.php file
// Object::add_extension('Image','CroppedFillImageExtension');
// Use in the template as per following examples;
//
// $Image.CroppedFill(200,100,left,top)
// $Image.CroppedFill(200,100,middle,bottom)
// $Image.Cropped(200,200,10,10,0.5)
// 
class CroppedFillImageExtension extends DataExtension {
	
	public static $db = array(
		"CroppedXPosition" => "Varchar",
		"CroppedYPosition" => "Varchar",
		"CroppedZoom" => "Float"
	);
	
	public function updateCMSFields(FieldList $fields) {
	  $fields->addFieldToTab("Root.Main", new TextField('CroppedXPosition', 'Horizontal Cropped Position (top,middle,bottom or a numeric)'));
	  $fields->addFieldToTab("Root.Main", new TextField('CroppedYPosition', 'Vertical Cropped Position (top,middle,bottom or a numeric)'));
		$fields->addFieldToTab("Root.Main", new TextField('CroppedZoom', 'Cropped Zoom Ratio (value between 0 and 1)'));
	}
	
	public function CroppedFill($width, $height, $xPosition = '', $yPosition = '') {
		if($this->owner->ID && $this->owner->Filename && Director::fileExists($this->owner->Filename)) {
			$cacheFile = $this->owner->cacheFilename("CroppedFill", $width, $height);
			$gd = new GD(Director::baseFolder()."/" . $this->owner->Filename);		
			if($gd->hasGD()) {
					$gd = $gd->resizeRatio($width, $height, true);
					if ($gd->getHeight() > $height || $gd->getWidth() > $width) {						
						$x = $this->owner->CroppedXPosition;
						if ($x == "") {
							$x = $xPosition;
						}						
						$y = $this->owner->CroppedYPosition;
						if ($y == "") {
							$y = $yPosition;
						}						
						$newGD = $this->crop($gd,$width,$height, $width, $height, $x,$y);
						$gd->setGD($newGD);
					}
					if($gd) {
						$gd->writeTo(Director::baseFolder()."/" . $cacheFile);
					}
			}

			$cached = new Image_Cached($cacheFile);
			// Pass through the title so the templates can use it
			$cached->Title = $this->owner->Title;
			return $cached;
		}
	}
	
	public function Cropped($width, $height, $xPosition, $yPosition, $zoom) {
		if($this->owner->ID && $this->owner->Filename && Director::fileExists($this->owner->Filename)) {
			$cacheFile = $this->owner->cacheFilename("Cropped", $width, $height);
			$gd = new GD(Director::baseFolder()."/" . $this->owner->Filename);		
			if($gd->hasGD()) {									
						$x = $this->owner->CroppedXPosition;
						if ($x == "") {
							$x = $xPosition;
						}						
						$y = $this->owner->CroppedYPosition;
						if ($y == "") {
							$y = $yPosition;
						}						
						$newGD = $this->crop($gd,$width,$height, round($width * $zoom), round($height * $zoom), $x,$y);
						$gd->setGD($newGD);					
					if($gd) {
						$gd->writeTo(Director::baseFolder()."/" . $cacheFile);
					}
			}

			$cached = new Image_Cached($cacheFile);
			// Pass through the title so the templates can use it
			$cached->Title = $this->owner->Title;
			return $cached;
		}
	}
	
	private function crop($gd, $destWidth, $destHeight, $srcWidth, $srcHeight, $xPosition = "", $yPosition = "" ) {
	
		$width = round($gd->getWidth());
		$height = round($gd->getHeight());
				
		$newGD = imagecreatetruecolor($destWidth, $destHeight);
		
		// Preserves transparency between images
		imagealphablending($newGD, false);
		imagesavealpha($newGD, true);
		
		if ($width > 0 && $height > 0 ){
			// We can't divide by zero theres something wrong.	

			// Destination is narower than the source
			$srcX = 0;
			$srcY = 0;
			if ($destWidth < $width) {				
				// crop horizontally
				if (strtolower($xPosition) == "left") {
					$srcX = 0;
				} else if (strtolower($xPosition) == "right") {
					$srcX = $width - $destWidth;
				} else if (is_numeric($xPosition)) {
					$srcX = $xPosition;				
				} else {
					$srcX = round( ($width - $destWidth ) / 2);
				}
				
			}
			if ($destHeight < $height) {
				// crop vertically
				if (strtolower($yPosition) == "top") {
					$srcY = 0;
				} else if (strtolower($yPosition) == "bottom") {
					$srcY = $height - $destHeight;
				} else if (is_numeric($yPosition)) {
					$srcY = $yPosition;
				} else {
					$srcY = round( ($height - $destHeight ) / 2);
				}				
			}		
			imagecopyresampled($newGD, $gd->getGD(), 0,0, $srcX, $srcY, $destWidth, $destHeight, $srcWidth, $srcHeight);
		}
		return $newGD;
	}
	
}