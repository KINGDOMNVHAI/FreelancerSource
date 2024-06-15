$(document).ready(function() {
	$("#sbRegister").on('click', function() {
		doRegister();
	});
	$('#form-validation').on('keyup keypress', function(e) {
		var keyCode = e.keyCode || e.which;
		if (keyCode === 13) {
			e.preventDefault();
			return false;
		}
	});
	$('#validation-email').on('keyup', function(e) {
		var keyCode = e.keyCode || e.which;
		if (keyCode === 13) {
			doLogin();
		}
	});
	$('#validation-password').on('keyup', function(e) {
		var keyCode = e.keyCode || e.which;
		if (keyCode === 13) {
			doLogin();
		}
	});
	$('#main-wrap-slider').slick({
		dots : false,
		infinite : true,
		speed : 2000,
		fade : true,
		autoplay : true,
		autoplaySpeed : 1000,
		arrows : true,
	});
});

function doRegister() {
	$("#validation-firstname").css('border-color', '');
	$("#validation-lastname").css('border-color', '');
	$("#validation-email").css('border-color', '');
	$("#validation-username").css('border-color', '');
	$("#validation-password").css('border-color', '');
	$("#errMsgCover").hide();
	var firstname = $("#validation-firstname").val();
	var lastname = $("#validation-lastname").val();
	var email = $("#validation-email").val();
	var username = $("#validation-username").val();
	var password = $("#validation-password").val();
	if (firstname == null || firstname == "") {
		$("#validation-firstname").css('border', '1.5px #c4161c solid');
		$("#errMsgCover").show();
		return;
	} else if (lastname == null || lastname == "") {
		$("#validation-lastname").css('border', '1.5px #c4161c solid');
		$("#errMsgCover").show();
		return;
	} else if (email == null || email == "") {
		$("#validation-email").css('border', '1.5px #c4161c solid');
		$("#errMsgCover").show();
		return;
	} else if (username == null || username == "") {
		$("#validation-username").css('border', '1.5px #c4161c solid');
		$("#errMsgCover").show();
		return;
	} else if (password == null || password == "") {
		$("#validation-password").css('border', '1.5px #c4161c solid');
		$("#errMsgCover").show();
		return;
	} else {
		$(".background-login").waitingLoadData({
	        open: true,
	        width: 56,
	        bg: true
	    });
		$('#form-validation').submit();
	}
}

function validateEmail(input) {
	var formatEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
	if (formatEmail.test(input))
		return true;
	else
		return false;
}
