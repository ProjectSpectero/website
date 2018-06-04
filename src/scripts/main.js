// @codekit-prepend "dep/jquery.validate.min.js";

$(function() {
	$('.responsive-nav-toggle').click(function (e) {
		$('.header-nav').toggleClass('responsive-show');
		e.preventDefault();
	});

	$('.os-tabs li').click(function (e) {
		var os = $(this).data('os');
		$('.os-tabs li').removeClass('active');
		$('.os-tabs li[data-os="' + os + '"]').addClass('active');
		$('.os-instruction').hide();
		$('.os-instruction.' + os).show();
		console.log(os)
	});

	$('.faq .questions li').click(function(e) {
		var container = $('.faq .questions');
		
		$('li', container).removeClass('selected');
		$(this).addClass('selected');

		$('.faq .answer article').hide();
		$('.faq .answer article[data-answer-id="'+ $(this).attr('data-answer-id') +'"]').show();

	});

	$('.proxy-select .plans article').click(function() {
		var container = $('.proxy-select .plans');

		$('article', container).removeClass('selected');
		$(this).addClass('selected');

	});

	$('.proxy-select').on('submit', function(e) {
		e.preventDefault();

		var quantity = $('.proxy-select article.selected').attr('data-proxies');
		$('#contact-quantity').val(quantity);

		$('#contact-form .form-error').remove();
		$('#contact-form').prepend('<div class="form-error info">Thank you for your interest in our proxies. Please use the form below and our sales team will be in touch within 24 hours.</div>');

		$('html, body').animate({
			scrollTop: $('#contact').offset().top
		}, 400);

	});

	$('#nav-main .mobile-toggle').click(function(e) {
		e.preventDefault();

		$('span', this).toggleClass('active');
		$('#nav-main ul').toggleClass('mobile-show');

	});

	$('#contact-form').validate();
	
	$('#contact-form').on('submit', function(e) {
		e.preventDefault();

		$(this).validate();

		$('.form-error', this).remove();

		if ( $(this).valid() === false ) {
			return;
		}

		var form = $(this);
		var formData = form.serialize();

		$('#contact-form button[type="submit"]').attr('disabled', true).html('Please Wait');
		$('input, textarea, select', $('#contact-form')).attr('disabled', true);

		$.ajax({
			method: 'POST',
			url: '/contact.php',
			data: formData
		}).fail(function(jqXHR, textStatus, errorThrown) {

			var response;
		
			try {
				response = JSON.parse(jqXHR.responseText);
				form.prepend('<div class="form-error">'+response.msg+'</div>');
			} catch(e) {
				form.prepend('<div class="form-error">There was a problem submitting your request. Please try again later.</div>');
			}

			$('html, body').animate({
				scrollTop: $("#contact-form").offset().top
			}, 400);

			$('#contact-form button[type="submit"]').attr('disabled', false).html('Send Message');
			$('input, textarea, select', $('#contact-form')).attr('disabled', false);

		}).done(function(data, textStatus, jqXHR) {
			$('#contact-form').slideUp(400);
			$('#contact-success').slideDown(400);
		});

	});

	$('a.scrollto').click(function(e) {
		e.preventDefault();
		var div = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(div).offset().top
		}, 400);
	});
});
