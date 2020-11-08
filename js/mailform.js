$(document).ready(function() {
	
	var request;
	function rhandler(event) {
		event.preventDefault();
		if(request) {
			request.abort();
		}
		var $form = $(this);

    	// Let's select and cache all the fields
	    var $inputs = $form.find("input, select, button, textarea");

	    // Serialize the data in the form
	    var serializedData = $form.serialize();
	    // Let's disable the inputs for the duration of the Ajax request.
	    // Note: we disable elements AFTER the form data has been serialized.
	    // Disabled form elements will not be serialized.
	    $inputs.prop("disabled", true);

	    // Fire off the request to /form.php
	    request = $.ajax({
	    	url: "includes/addmailsubscriber.php",
	    	type: "post",
	    	data: serializedData
	    });
	    //alert("ok"); 
	    request.done(function (response, textStatus, jqXHR){
        	alert(response);
        	document.getElementById("mf-1").reset();
        	document.getElementById("mf-2").reset();
        	
        	// Log a message to the console
        	//alert("ok");
        	//console.log("Hooray, it worked!");
    	});

    	// Callback handler that will be called on failure
    	request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        	alert("Some error occured! Please Try Again");
    	});
	    request.always(function() {
	    	$inputs.prop("disabled", false);
	    });
	}
	$("#mf-1").submit(rhandler);
	$("#mf-2").submit(rhandler);
});