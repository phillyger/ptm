$(function() {
  $('.error').hide();

  $("#submit_btn.button").click(function() {
		// validate and process form
		// first hide any error messages
    $('.error').hide();
		
	  var displayName = $("input#displayName").val();
		if (displayName == "") {
      $("label#displayName_error").show();
      $("input#displayName").focus();
      return false;
    }
		var email = $("input#email").val();
		if (email == "") {
      $("label#email_error").show();
      $("input#email").focus();
      return false;
    }
		var subject = $("input#subject").val();
		if (subject == "") {
      $("label#subject_error").show();
      $("input#subject").focus();
      return false;
    }
		var message = $("textarea#message").val();
    if (message == "") {
      $("label#message_error").show();
      $("input#message").focus();
      return false;
    }
		var dataString = 'displayName='+ displayName + '&email=' + email + '&subject=' + subject+'&message=' + message;
		//alert (dataString);return false;
		
		$.ajax({
      type: "POST",
      url: "/php/contact-send.php",
      data: dataString,
      success: function() {
        $('#contact_form').html("<div id='message'></div>");
        $('#message').html("<h3>Contact Form Submitted!</h3>")
        .hide()
        .fadeIn(1500, function() {
          $('#message').append("<img id='checkmark' src='images/common/check.png' />");
          $('#message').append("<p>We will be in touch soon.</p>");
        });
      }
     });
    return false;
	});
});