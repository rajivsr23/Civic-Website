$(document).ready(function(){
	$('#enquirybutton').mouseenter(function(){
		$('#enquirybutton').fadeTo("fast",1);
		$('#enquirybutton').mouseleave(function(){
			$('#enquirybutton').fadeTo("fast",0.3)
			});
		});
});