/*
*
*		Author 	- Jack Le Riche
*		Email	 	- jackleriche@gmail.com
*		URL		 	- https://www.jackleriche.co.uk
*		Version	- 0.1a
*
*		NoIE.js is a small script used to target browsers such as IE6-7 
*		and deliver a unobtrousive message stating that whilst you have  
*		tried your hardest to battle the demon that is IE6+7 some of your
*		amazing skills my not look or act the same in these browsers
*
*/

// create box using javascript
// wait 3 seconds until the pop up displays
// needs to be apended to the body and css set to absolute top
// have a slide toggle effect
// needs a close button 
// This close button needs to be registered so that the pop up doesnt display again on the site


$(document).ready(function() {
	
	$('body').prepend("<div id='NoIE'><p>Although the utmost effort has been made to make this website work in legacy browsers, it may look slightly different.</p><p>Try downloading a modern browser to better your experience on the web</p><p><a href='http://www.mozilla.org/en-US/firefox/new/' title='Mozilla Firefox'>Firefox</a> - <a href='http://www.google.com/chrome' title='Google Chrome'>Chrome</a> - <a href='http://www.opera.com/browser/' title='Opera'>Opera</a></p><span class='close'>close</span></div>");
	
	$('#NoIE .close').click(function() {
		$('#NoIE').slideUp('5000');
		// version 2 will include a function for setting a cookie or similar method to register that the warning has been closed therfore not poping up again. 		
	});
	
	
});

