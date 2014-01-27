$(function() {

	// Display/Hide des messages envoyés par le Site
	var contenu = $("#zonemessage").html();
	if (contenu == ""){
			$("#zonemessage").hide();
	}
	else {
		$("#zonemessage").show().delay(10000).slideUp();
	}

	// TODO : user-code here
	// ...




});