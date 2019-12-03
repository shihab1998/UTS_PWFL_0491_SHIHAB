function GetXmlHttpObject()
{
  var xmlHttp;
  try
  {
    xmlHttp = new XMLHttpRequest();
  }
  catch (e)
  {
    try
    {
      xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e)
    {
      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
  return xmlHttp;
}

function cekOnline()
{
  xmlHttp = GetXmlHttpObject();
  if (xmlHttp == null)
  {
    return;
  }
  var url = base_url + controller + "cekOnline/";
  xmlHttp.open("POST", url, true);
  xmlHttp.onreadystatechange = stateChanged;
  xmlHttp.send(null);
}

function stateChanged()
{
  if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0)
  {
    var hitung = xmlHttp.responseText.split(",");
    document.getElementById("jumlahOnline").innerHTML = hitung[0].replace('"','') + " user online";
    document.getElementById("jmlAll").innerHTML = hitung[1].replace('"','') + " user online";
    window.setTimeout("cekOnline();", 2000);
  }
}

function getOnline()
{
  online = GetXmlHttpObject();
  if (online == null)
  {
    return;
  }
  var url = base_url + controller + "online/";
  online.open("POST", url, true);
  online.onreadystatechange = responeOnline;
  online.send(null);
  startTime();
}

function responeOnline()
{
  if (online.readyState == 4 || online.readyState == 0)
  {
    cekOnline();
  }
}

function resExit()
{
  exit = GetXmlHttpObject();
  if (exit == null)
  {
    return;
  }

  var url = base_url + controller + "exitSession/";
  exit.open("POST", url, true);
  exit.send(null);
}

function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec;
    
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var days = ['Ahad', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum`at', 'Sabtu'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
    document.getElementById("date").innerHTML = date;
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

(function () {
	
	'use strict';

	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
			BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
			iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
			Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
			Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
			any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

	var mobileMenuOutsideClick = function() {

		$(document).click(function (e) {
	    var container = $("#fh5co-offcanvas, .js-fh5co-nav-toggle");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {

	    	if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-fh5co-nav-toggle').removeClass('active');
				
	    	}
	    
	    	
	    }
		});

	};


	var offcanvasMenu = function() {

		$('#page').prepend('<div id="fh5co-offcanvas" />');
		$('#page').prepend('<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle fh5co-nav-white"><i></i></a>');
		var clone1 = $('.menu-1 > ul').clone();
		$('#fh5co-offcanvas').append(clone1);
		var clone2 = $('.menu-2 > ul').clone();
		$('#fh5co-offcanvas').append(clone2);

		$('#fh5co-offcanvas .has-dropdown').addClass('offcanvas-has-dropdown');
		$('#fh5co-offcanvas')
			.find('li')
			.removeClass('has-dropdown');

		// Hover dropdown menu on mobile
		$('.offcanvas-has-dropdown').mouseenter(function(){
			var $this = $(this);

			$this
				.addClass('active')
				.find('ul')
				.slideDown(500, 'easeOutExpo');				
		}).mouseleave(function(){

			var $this = $(this);
			$this
				.removeClass('active')
				.find('ul')
				.slideUp(500, 'easeOutExpo');				
		});


		$(window).resize(function(){

			if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-fh5co-nav-toggle').removeClass('active');
				
	    	}
		});
	};


	var burgerMenu = function() {

		$('body').on('click', '.js-fh5co-nav-toggle', function(event){
			var $this = $(this);


			if ( $('body').hasClass('overflow offcanvas') ) {
				$('body').removeClass('overflow offcanvas');
			} else {
				$('body').addClass('overflow offcanvas');
			}
			$this.toggleClass('active');
			event.preventDefault();

		});
	};



	var contentWayPoint = function() {
		var i = 0;
		$('.animate-box').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('animated-fast') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .animate-box.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn animated-fast');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft animated-fast');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight animated-fast');
							} else {
								el.addClass('fadeInUp animated-fast');
							}

							el.removeClass('item-animate');
						},  k * 200, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '85%' } );
	};


	var dropdown = function() {

		$('.has-dropdown').mouseenter(function(){

			var $this = $(this);
			$this
				.find('.dropdown')
				.css('display', 'block')
				.addClass('animated-fast fadeInUpMenu');

		}).mouseleave(function(){
			var $this = $(this);

			$this
				.find('.dropdown')
				.css('display', 'none')
				.removeClass('animated-fast fadeInUpMenu');
		});

	};


	var goToTop = function() {

		$('.js-gotop').on('click', function(event){
			
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $('html').offset().top
			}, 500, 'easeInOutExpo');
			
			return false;
		});

		$(window).scroll(function(){

			var $win = $(window);
			if ($win.scrollTop() > 200) {
				$('.js-top').addClass('active');
			} else {
				$('.js-top').removeClass('active');
			}

		});
	
	};


	// Loading page
	var loaderPage = function() {
		$(".fh5co-loader").fadeOut("slow");
	};

	var counter = function() {
		$('.js-counter').countTo({
			 formatter: function (value, options) {
	      return value.toFixed(options.decimals);
	    },
		});
	};

	var counterWayPoint = function() {
		if ($('#fh5co-counter').length > 0 ) {
			$('#fh5co-counter').waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {
					setTimeout( counter , 400);					
					$(this.element).addClass('animated');
				}
			} , { offset: '90%' } );
		}
	};

	var sliderMain = function() {
		
	  	$('#fh5co-hero .flexslider').flexslider({
			animation: "slide",

			easing: "swing",
			direction: "vertical",

			slideshowSpeed: 5000,
			directionNav: true,
			start: function(){
				setTimeout(function(){
					$('.slider-text').removeClass('animated fadeInUp');
					$('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
				}, 500);
			},
			before: function(){
				setTimeout(function(){
					$('.slider-text').removeClass('animated fadeInUp');
					$('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
				}, 500);
			}

	  	});

	  	// $('#fh5co-hero .flexslider .slides > li').css('height', $(window).height());	
	  	// $(window).resize(function(){
	  	// 	$('#fh5co-hero .flexslider .slides > li').css('height', $(window).height());	
	  	// });

	};

	var parallax = function() {

		if ( !isMobile.any() ) {
			$(window).stellar({
				horizontalScrolling: false,
				hideDistantElements: false, 
				responsive: true

			});
		}
	};

	var testimonialCarousel = function(){
		
		var owl = $('.owl-carousel-fullwidth');
		owl.owlCarousel({
			items: 1,
			loop: true,
			margin: 0,
			nav: false,
			dots: true,
			smartSpeed: 800,
			autoHeight: true
		});

	};

	
	$(function(){
		mobileMenuOutsideClick();
		offcanvasMenu();
		burgerMenu();
		contentWayPoint();
		dropdown();
		goToTop();
		loaderPage();
		counterWayPoint();
		counter();
		parallax();
		sliderMain();
		testimonialCarousel();
	});


}());

var base_url = "https://" + window.location.hostname + "/";
var controller = 'frontend/ajax/';
var loading = 'Loading...';

$(document).ready(function () {
	$('#fLogin').on('submit', login);
	$('#mlogin').on('shown.bs.modal', load_captcha);
	$('#mlogin').on('hidden.bs.modal', function (e) {
  	$('.form-group').removeClass('has-error');
  	$('.help-block').empty();
  	$('#fLogin')[0].reset();
  	$('#img-captcha').html('');
	});
  $('#fReset0').on('submit', get_token);
  $('#fReset1').on('submit', simpan_password);
  

});

function load_captcha() {
	$('.form-group').removeClass('has-error');
	$('.help-block').empty();
	$('#img-captcha').html(loading);
	var post_data = new FormData();
	url_post = base_url + controller + "load_captcha";
	$.ajax({
		url : url_post,
		type: "POST",
	  data: post_data,
	  processData: false,
	  contentType: false,
		dataType: "JSON",
		success: function(data)
		{
			$('#img-captcha').html('');
			$('#img-captcha').html(data.captcha);
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			$('#img-captcha').html('');
			$.notify({message: 'Error loading captcha'},{type:'danger'});
		}
	});
}

function login(e) {
	e.stopPropagation();
	e.preventDefault();
	$('.form-group').removeClass('has-error');
	$('.help-block').empty();
	$('#btnLogin').button('loading');
	url_post = base_url + controller + "login";
	$.ajax({
		url : url_post,
		type: "POST",
		data: $('#fLogin').serialize(),
		dataType: "JSON",
		success: function(data)
		{
			$('#btnLogin').button('reset');
			if(data.status){
				$('#mlogin').modal('hide');
				window.location = base_url + data.route;
			}else{
				if (data.error) {
					alert(data.error);
				}
				if (data.redirect) {
					window.location = data.redirect;
				}
				load_captcha();
				for (var i = 0; i < data.inputerror.length; i++){
					$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
					$('[name="'+data.inputerror[i]+'"]').next(".help-block").text(data.error_string[i]);
				}
			}
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			$.notify({message: 'Error submiting data'},{type:'danger'});
			$('#btnLogin').button('reset');
		}
	});
}

/*Lupa Password*/

function simpan_password(e) {
  e.stopPropagation();
  e.preventDefault();
  $('.form-group').removeClass('has-error');
  $('.help-block').empty();
  $('#btnReset1').button('loading');
  url_post = base_url + "reset/password/save";
  $.ajax({
    url : url_post,
    type: "POST",
    data: $('#fReset1').serialize(),
    dataType: "JSON",
    success: function(data)
    {
      if(data.status){
        var post_data = new FormData();
        post_data.append('username', $('[name="userreset0"]').val());
        post_data.append('password', $('#pass2').val());
        url_post = base_url + "signin/relogin";
        $.ajax({
          url : url_post,
          type: "POST",
          data: post_data,
          processData: false,
          contentType: false,
          dataType: "JSON",
          success: function(data0)
          {
            if(data0.status){
              window.location = base_url + "master/profil";
            }else{
              location.reload();
            }
            $('html, body').animate({ scrollTop: 0 }, 'slow');
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
            $.notify({message: 'Error loading data'},{type:'danger'});
          }
        });
      }else{
        if (data.error) {
          $.notify({message: data.error},{type:'danger'});
        }else{
          for (var i = 0; i < data.inputerror.length; i++){
            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
            $('[name="'+data.inputerror[i]+'"]').next(".help-block").text(data.error_string[i]);
          }
        }
      }
      $('#btnReset1').button('reset');
      $('html, body').animate({ scrollTop: 0 }, 'slow');
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      $.notify({message: 'Error saving data'},{type:'danger'});
      $('#btnReset1').button('reset');
    }
  });
}

function get_token(e) {
  e.stopPropagation();
  e.preventDefault();
  $('.form-group').removeClass('has-error');
  $('.help-block').empty();
  $('#btnReset0').button('loading');
  url_post = base_url + "reset/password/token";
  $.ajax({
    url : url_post,
    type: "POST",
    data: $('#fReset0').serialize(),
    dataType: "JSON",
    success: function(data)
    {
      if(data.status){
        back(2);
        $.notify({message: data.info},{type:'success', delay:500000});
        $('[name="userreset0"]').val($('#userreset').val());
        $('#wizard2').html('<span class="glyphicon glyphicon-ok"></span>').removeAttr('disabled').removeClass('btn-default').addClass('btn-success');
      }else{
        if (data.error) {
          $.notify({message: data.error},{type:'danger'});
          $('.form-group').removeClass('has-error');
          $('.help-block').empty();
          $('#fReset0')[0].reset();
        }else{
          for (var i = 0; i < data.inputerror.length; i++){
            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
            $('[name="'+data.inputerror[i]+'"]').next(".help-block").text(data.error_string[i]);
          }
          $.notify({message:'Mohon lengkapi form yang belum diisi !'},{type:'warning'});
        }
      }
      $('#btnReset0').button('reset');
      $('html, body').animate({ scrollTop: 0 }, 'slow');
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      $.notify({message: 'Error loading data'},{type:'danger'});
      $('#btnReset0').button('reset');
    }
  });
}

function back(id, is_reset=0) {
  var max = 2;
  for (var i = 0; i <= max; i++) {
    $('#col' + i).hide();
  }
  $('#col' + id).show();
  if (is_reset=="1") {
    $('.form-group').removeClass('has-error');
    $('.help-block').empty();
    $('#fReset0')[0].reset();
    $('#fReset1')[0].reset();
  }
}

function lupa() {
  $('#colForm').collapse('show');
  $('#col0').collapse('hide');
  $('#col1').collapse('show');
  $('#colVisi').hide();
  $('#colBerita').hide();
  $('#colEv').hide();
  $('#colEvdetil').hide();
  $('html, body').animate({ scrollTop: 0 }, 'slow');
}

function login_lagi() {
	$('#colVisi').show();
	$('#colBerita').show();
	$('#colEv').show();
  $('#colEvdetil').show();
	$('#colForm').collapse('hide');
  $('#col0').collapse('hide');
  $('#col1').collapse('show');
  $('html, body').animate({ scrollTop: 0 }, 'slow');
}