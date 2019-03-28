;(function($){
    "use strict"
	
	/*----------------------------------------------------*/
    /*  Team Slider
    /*----------------------------------------------------*/
    function testislider(){
        if ( $('.testi-slider').length ){
            $('.testi-slider').owlCarousel({
                loop:true,
                margin: 30,
                items: 3,
                nav: false,
                autoplay: false,
                smartSpeed: 1500,
                dots:true, 
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    576: {
                        items: 2,
                    },
                    1200: {
                        items: 3,
                    }
                }
            })
        }
    }
    testislider();	

})(jQuery)

$(".center").slick({
  dots: false,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 3
});

/*----------------------------------------------------*/
/*  Scroll Header
/*----------------------------------------------------*/
$(window).scroll(function() {    



    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
        $(".scroll-top-header").addClass("fixed-top");
        $(".scroll-top-header").removeClass("fixed-top-transparent");
    } else {
        $(".scroll-top-header").removeClass("fixed-top");
        $(".scroll-top-header").addClass("fixed-top-transparent");
    }
});

/*==============================================================================
Video Page
================================================================================*/

$(document).ready(function()
{
	"use strict";

	initBanner2Slider();
	initVideoNewSlider();
	initVideoTakeCareSlider();
	/* 

	Init Banner 2 Slider

	*/

	function initBanner2Slider()
	{
		if($('.banner-2-slider').length)
		{
			var banner2Slider = $('.banner-2-slider');
			banner2Slider.owlCarousel(
			{
				items:1,
				loop:true,
				nav:false,
				dots:true,
				dotsContainer: '.banner-2-dots',
				smartSpeed:1200
			});
		}
	}

	/* 

	Init New Video Slider

	*/

	function initVideoNewSlider()
	{
		if($('.video-new-slider').length)
		{
			var videoNewSliders = $('.video-new-slider');
			videoNewSliders.owlCarousel(
			{
				loop:false,
				margin:30,
				nav:false,
				dots:false,
				autoplayHoverPause:true,
				autoplay:false,
				responsive:
				{
					0:{items:1},
					575:{items:2},
					991:{items:3}
				}
			});

			videoNewSliders.on('click', '.trends-fav', function (ev)
			{
			    $(ev.target).toggleClass('active');
			});

			if($('.video-new-prev').length)
			{
				var prev = $('.video-new-prev');
				prev.on('click', function()
				{
					videoNewSliders.trigger('prev.owl.carousel');
				});
			}

			if($('.video-new-next').length)
			{
				var next = $('.video-new-next');
				next.on('click', function()
				{
					videoNewSliders.trigger('next.owl.carousel');
				});
			}
		}
	}

	/* 

	Init Take Care Video Slider

	*/

	function initVideoTakeCareSlider()
	{
		if($('.video-takecare-slider').length)
		{
			var videoTakeCareSliders = $('.video-takecare-slider');
			videoTakeCareSliders.owlCarousel(
			{
				loop:false,
				margin:30,
				nav:false,
				dots:false,
				autoplayHoverPause:true,
				autoplay:false,
				responsive:
				{
					0:{items:1},
					575:{items:2},
					991:{items:3}
				}
			});

			videoTakeCareSliders.on('click', '.trends-fav', function (ev)
			{
			    $(ev.target).toggleClass('active');
			});

			if($('.video-takecare-prev').length)
			{
				var prev = $('.video-takecare-prev');
				prev.on('click', function()
				{
					videoTakeCareSliders.trigger('prev.owl.carousel');
				});
			}

			if($('.video-takecare-next').length)
			{
				var next = $('.video-takecare-next');
				next.on('click', function()
				{
					videoTakeCareSliders.trigger('next.owl.carousel');
				});
			}
		}
	}
});

/*==============================================================================
Video detail Page
================================================================================*/
$("#show-more").click(function() {
	if($(this).hasClass("show-more") == true){
		$(this).closest('.info-content').find('#description').addClass('show-description').removeClass('hide-description');
		$(this).closest('.info-content').find('#show-more').attr("id","less-more");
		$(this).removeClass('show-more').addClass('less-more').text('HIDE LESS');
	}
	else{
		$(this).removeClass('less-more').addClass('show-more').text('SHOW MORE');
		$(this).closest('.info-content').find('#description').addClass('hide-description').removeClass('show-description');
		$(this).closest('.info-content').find('#less-more').attr("id","show-more");

	}
});
/*==============================================================================
Checkout Page
================================================================================*/
$(document).ready(function(){
	
	// Date picker 
	$('.form_date').datetimepicker({
        isRTL: false,
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0,
		startDate: new Date(),
	});
	$('.form_time').datetimepicker({
        isRTL: false,
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0,
		hoursDisabled: '0,1,2,3,4,5,6,7,22,23'
	});
	
	$('.modalpayment .close').click(function(){
		console.log('close modal');
		$('.modalpayment').css('display','none');
		$('.backdrop').css('display','none');
	});

	// checkbox service checked
	$('.checkbox').click(function(e){
		var getValueCheckbox = $(this).val();
		var createInput = $('<input type="hidden" class="fieldname" name="service[]" value="'+getValueCheckbox+'" />');
		if($(this).is(":checked")){
			$(this).append(createInput);
			$(this).closest('.label--checkbox').find('.fieldname').val(getValueCheckbox);
			console.log(this);
		}
		else if($(this).is(":not(:checked)")){
			$(this).closest('.label--checkbox').find('.fieldname').remove();
			console.log("Checkbox is unchecked.");
		}
	});

	$.each($("input[type='checkbox']:checked"), function(){ 
		var value = $(this).val(); 
		var createInput = $('<input type="hidden" class="fieldname" name="service[]" value="'+value+'" />');  
		$(this).append(createInput);       
	});

	// check url is booking service step
	var url = $(location).attr('pathname');
	if(url == '/booking'){
		$(document).mouseup(function (e){
			var name = $("#petinfoname");
			if (!name.is(e.target) && name.val().length===0){
				$(name).closest('.md-form').find('label').removeClass('active');
			} else {
				$(name).closest('.md-form').find('label').addClass('active');
			}
			var hoobies = $("#petinfohoobies");
			if (!hoobies.is(e.target) && hoobies.val().length===0){
				$(hoobies).closest('.md-form').find('label').removeClass('active');
			} else {
				$(hoobies).closest('.md-form').find('label').addClass('active');
			}
		});
	}
	if(url == '/nextstep'){
		$(document).mouseup(function (e){
			var email = $("#infoemail");
			if (!email.is(e.target) && email.val().length===0){
				$(email).closest('.md-form').find('label').removeClass('active');
			} else {
				$(email).closest('.md-form').find('label').addClass('active');
			}
			var firstname = $("#petinfofirstname");
			if (!firstname.is(e.target) && firstname.val().length===0){
				$(firstname).closest('.md-form').find('label').removeClass('active');
			} else {
				$(firstname).closest('.md-form').find('label').addClass('active');
			}
			var lastname = $("#petinfolastname");
			if (!lastname.is(e.target) && lastname.val().length===0){
				$(lastname).closest('.md-form').find('label').removeClass('active');
			} else {
				$(lastname).closest('.md-form').find('label').addClass('active');
			}
			var phone1 = $("#petinfophone1");
			if (!phone1.is(e.target) && phone1.val().length===0){
				$(phone1).closest('.md-form').find('label').removeClass('active');
			} else {
				$(phone1).closest('.md-form').find('label').addClass('active');
			}
			var phone2 = $("#petinfophone2");
			if (!phone2.is(e.target) && phone2.val().length===0){
				$(phone2).closest('.md-form').find('label').removeClass('active');
			} else {
				$(phone2).closest('.md-form').find('label').addClass('active');
			}
		});
	}
	
	$('.testnha').click(function(){
		if ($('#infoemail').val() == '' || $('#petinfolastname').val() == '' || $('#petinfofirstname').val() == '' || $('#petinfophone1').val() == '' || $('#petinfophone2').val() == '' || $('#location-snap').val() == "") {
				if( $('#infoemail').val() == '' ) {
					if($('#infoemail').closest('.row ').find('span').hasClass( "notify" ) == false){
						$('#infoemail').closest('.row ').find('.md-form').append('<span class="notifications notify">Please input email here</span>');
					}
				}
				if( $('#infoemail').val() != '' ) {
					$('#infoemail').closest('.md-form ').find('.notify').remove();
				}

				if( $('#petinfofirstname').val() == '' ) {
					if($('#petinfofirstname').closest('.firstname ').find('span').hasClass( "notify" ) == false){
						$('#petinfofirstname').closest('.row ').find('.firstname').append('<span class="notifications notify">Please input first name here</span>');
					}
				}
				if( $('#petinfofirstname').val() != '' ) {
					$('#petinfofirstname').closest('.firstname ').find('.notify').remove();
				}

				if( $('#petinfolastname').val() == '' ) {
					if($('#petinfolastname').closest('.lastname ').find('span').hasClass( "notify" ) == false){
						$('#petinfolastname').closest('.row ').find('.lastname').append('<span class="notifications notify">Please input last name here</span>');
					}
				}
				if( $('#petinfolastname').val() != '' ) {
					$('#petinfolastname').closest('.lastname ').find('.notify').remove();
				}

				if( $('#petinfophone1').val() == '' ) {
					if($('#petinfophone1').closest('.phone1 ').find('span').hasClass( "notify" ) == false){
						$('#petinfophone1').closest('.row ').find('.phone1').append('<span class="notifications notify">Please input phone here</span>');
					}
				}
				if( $('#petinfophone1').val() != '' ) {
					$('#petinfophone1').closest('.phone1 ').find('.notify').remove();
				}

				if( $('#petinfophone2').val() == '' ) {
					if($('#petinfophone2').closest('.phone2 ').find('span').hasClass( "notify" ) == false){
						$('#petinfophone2').closest('.row ').find('.phone2').append('<span class="notifications notify">Please input phone here</span>');
					}
				}
				if( $('#petinfophone2').val() != '' ) {
					$('#petinfophone2').closest('.phone2 ').find('.notify').remove();
				}

				if( $('#location-snap').val() == '' ) {
					if($('#location-snap').closest('.service ').find('row').hasClass( "notify" ) == false){
						$('#location-snap').closest('.service ').find('.row').append('<span class="notifications notify">Please input your address here</span>');
					}
				}
				if( $('#location-snap').val() != '' ) {
					$('#location-snap').closest('.service ').find('.notify').remove();
				}
		} else {
			if(ValidateEmail($('#infoemail').val())  && checkPhoneNumber($('#petinfophone1').val()) && checkPhoneNumber($('#petinfophone2').val())){
				console.log('Ok');
				$('#formaddresssubmit').submit();
			} else {
				if(ValidateEmail($('#infoemail').val()) == false) {
					if($('#infoemail').closest('.email').find('span').hasClass( "notify" ) ==false){
						$('#infoemail').closest('.row').find('.md-form').append('<span class="notifications notify">Email invalid format</span>');
					} else {
						$('#infoemail').closest('.email').find('.notify').text( "Email invalid format" );
					}

				}
				if(checkPhoneNumber($('#petinfophone1').val()) == false) {
					console.log($('#petinfophone1').closest('.phone1').find('span').hasClass( "notify" ))
					if($('#petinfophone1').closest('.phone1').find('span').hasClass( "notify" ) == false) {
						$('#petinfophone1').closest('.phone1').append('<span class="notifications notify">Phone invalid format</span>');
					} else {
						$('#petinfophone1').closest('.phone1').find('.notify').text('Phone invalid format');
					}
				}
				if(checkPhoneNumber($('#petinfophone2').val()) == false) {
					if($('#petinfophone2').closest('.phone2').find('span').hasClass( "notify" ) == false) {
						$('#petinfophone2').closest('.phone2').append('<span class="notifications notify">Phone invalid format</span>');
					} else {
						$('#petinfophone2').closest('.phone2').find('.notify').text('Phone invalid format');
					}
				}
			}
		}


		function ValidateEmail(email) {
			var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			return expr.test(email);
		};
		function checkPhoneNumber(phonetxt) {
			var flag = false;
			var phone = phonetxt; // ID của trường Số điện thoại
			phone = phone.replace('(+84)', '0');
			phone = phone.replace('+84', '0');
			phone = phone.replace('0084', '0');
			phone = phone.replace(/ /g, '');
			if (phone != '') {
				var firstNumber = phone.substring(0, 2);
				if ((firstNumber == '09' || firstNumber == '08') && phone.length == 10) {
					if (phone.match(/^\d{10}/)) {
						flag = true;
					}
				} else if (firstNumber == '01' && phone.length == 11) {
					if (phone.match(/^\d{11}/)) {
						flag = true;
					}
				}
			}
			return flag;
		}
	});
	
});