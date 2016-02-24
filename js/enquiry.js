$(document).ready(function(){
	$('#enquiry').mouseenter(function(){
		$('#enquiry').fadeTo("fast",1);
		$('#enquiry').mouseleave(function(){
			$('#enquiry').fadeTo("fast",0.3)
			});
		});
});