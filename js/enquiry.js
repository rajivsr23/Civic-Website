/*JQuery Function for Enquiry Button*/
$(document).ready(function(){
	$('#enquirybutton').mouseenter(function(){
		$('#enquirybutton').fadeTo("fast",1);
		$('#enquirybutton').mouseleave(function(){
			$('#enquirybutton').fadeTo("fast",0.3);
		});
	});
});

/*JQuery Show Contact Form when Enquiry Button is clicked*/
$(document).ready(function(){
	$('#enquirybutton').click(function(){
		$('#contactform').show();
	});
	
});

/*JQuery Hide Contact Form when cross button is clicked */
$(document).ready(function(){
	$('#closeform').click(function(){
		$('#contactform').hide();
	});
	
});


