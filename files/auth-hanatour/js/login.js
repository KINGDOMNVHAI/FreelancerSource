var ScrollToType = {
	CLASS : "class",
	ID : "id",
	XPATH : "xpath"
}
$(document).ready(function() {
	$("#sbLogin").on('click', function() {
		doLogin();
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
		speed : 3000,
		fade : true,
		autoplay : true,
		autoplaySpeed : 1000,
		arrows : true,
	});

	var mTop = 0;
    $('.modal').on('shown.bs.modal', function (e) {
        if( $(this).attr('class').includes("modal-js-fix") ) {
            mTop = window.pageYOffset;
            $('body').css('width', '100%');
            $('body').css('position', 'fixed');
            $('#ui-datepicker-div').addClass('view-modal');
            $('body').css('top', -mTop);
        }
    });

    $('.modal').on('hide.bs.modal', function (e) {
        if( $(this).attr('class').includes("modal-js-fix") ){
            $('body,html').animate({scrollTop: mTop }, 10);
            $('#ui-datepicker-div').removeClass('view-modal');
            $('body').css('position', 'static');
        }
    });
});

function doLogin() {
	$("#validation-email").css('border-color', '');
	$("#validation-password").css('border-color', '');
	$("#errMsgCover").hide();
	var username = $("#validation-email").val();
	var password = $("#validation-password").val();
	if (username == null || username == "") {
		$("#validation-email").css('border', '1.5px #c4161c solid');
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

function sendInquiry() {
	// Validate inquiry info
	$('#inquiryContent').find('*').removeClass('input-required');
	$("#warningName").css("display", 'none');
	$("#warningEmail").css("display", 'none');
	$("#warningCheckAgainEmail").css("display", 'none');
	$("#warningTitle").css("display", 'none');
	$("#warningContents").css("display", 'none');
	if ($('#inquiryContent').find('input[name=name]').val() == '') {
		scrollTo("name", true);
		$("#warningName").css("display", '');
		return;
	}
	if ($('#inquiryContent').find('input[name=email]').val() == '') {
		scrollTo("email", true);
		$("#warningEmail").css("display", '');
		return;
	}
	if ($('#inquiryContent').find('input[name=email]').val() != ''
			&& validateEmail($('#inquiryContent').find('input[name=email]')
					.val()) == false) {
		scrollTo("email", true);
		$("#warningCheckAgainEmail").css("display", '');
		return;
	}
	if ($('#inquiryContent').find('input[name=title]').val() == '') {
		scrollTo("title", true);
		$("#warningTitle").css("display", '');
		return;
	}
	if ($('#inquiryContent').find('textarea[name=contents]').val() == '') {
		scrollTo("contents", true);
		$("#warningContents").css("display", '');
		return;
	}

	var data = new Object();
	data.id = 0;
	data.name = $("#name").val();
	data.email = $("#email").val();
	data.title = $("#title").val();
	data.contents = $("#contents").val();
	$("#btnSend").attr("disabled", true);
	$.ajax({
		url : '/login/request_inquiry',
		type : "POST",
		contentType : "application/json; charset=utf-8",
		async : false,
		cache : false,
		data : JSON.stringify(data),
		processData : false,
		success : function(data) {
			if (data == "OK") {
				$("#btnSend").attr("disabled", false);
				$('#modalInquiryComplete').modal();
				setTimeout(function() {
					$('#modalInquiryComplete').modal('hide');
                    $('#modalInquiry').modal('hide');
                }, 1000);
			} else {
				scrollTo("email", true);
				$("#warningCheckAgainEmail").css("display", '');
				return;
			}
		},
		error : function(data) {
		}
	});
}

$('#btn_inqur').on('click',function(){
    $('input').val('');
    $('textarea').val('')
});

function validateEmail(input) {
	var formatEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
	if (formatEmail.test(input))
		return true;
	else
		return false;
}

function scrollTo(element, isFocus, type) {
	if (type == undefined) {
		type = ScrollToType.ID;
	}

	var elementFull = element;
	switch (type) {
	case ScrollToType.CLASS:
		elementFull = "." + elementFull;
		break;
	case ScrollToType.XPATH:
		break;
	default:
		elementFull = "#" + elementFull;
	}

	scrollToElement($(elementFull), focus);
}

function scrollToElement(element, isFocus) {
	$('html, body').animate({
		scrollTop : element.offset().top
	}, 1000);

	element.addClass('input-required');
	if (isFocus == true || isFocus == 'true') {
		element.focus();
	}
}

$.fn.waitingLoadData = function(config) {

    if (config.open) {
        var heightOfElement = $(window).height();
        var w = 36;
        var h = 39;

        if (typeof config.width !== 'undefined') {
            w = config.width;
            h = config.width;
        }
        if (typeof config.height !== 'undefined') {
            h = config.height;
        }

        var styleText = config.color;
        if (typeof config.color === 'undefined') {
            styleText = "color: #FFFFFF"
        }
        var margin = ((heightOfElement / 2) - (h / 2));
        if (typeof config.margin !== 'undefined') {
            margin = config.margin;
        }

        var style = "margin: " + margin + "px auto 0 auto; width: " + w + "px; height: " + h + "px;";
        var bg = "";
        if (typeof config.bg !== 'undefined') {
            bg = "background-color: rgba(0, 0, 0, 0.7); position: fixed;";
        }

        var loading = '';

        if(typeof config.photo === 'undefined' || config.photo) {
            loading = '<div class="loading loading-wait" style="' + bg + '"><div><div class="gorilla-wrapp"><div class="gorilla"></div></div>';
            loading += '<div class="letter-wrapp">' +
                '<div class="bounce letter">L</div>' +
                '<div class="bounce letter">O</div>' +
                '<div class="bounce letter">A</div>' +
                '<div class="bounce letter">D</div>' +
                '<div class="bounce letter">I</div>' +
                '<div class="bounce letter">N</div>' +
                '<div class="bounce letter">G</div>' +
                '<div class="bounce letter">.</div>' +
                '<div class="bounce letter">.</div>' +
            '</div></div>';
        } else {
            loading = '<div class="loading-wait" style="' + bg + '"> <div class="loading-spinner-text" style="' + style + '"></div>';
            if (typeof config.text !== 'undefined') {
                loading += '<div class="loading-text" style="' + styleText + '">' + config.text + '</div>';
            }
        }

        loading += '</div>';
        this.append(loading);
    } else {
        this.find('.loading-wait').remove();
    }
};
