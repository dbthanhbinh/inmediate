$(document).ready(function(){
    // alert($('.site-header').offset().top);
    if($('.site-header').offset().top>=80) {
        $('.site-header').addClass('mini');
    } else {
        $('.site-header').removeClass('mini');
    }

    $(document).on('scroll', function (e) {
        const top = $(this).scrollTop();
        if (top >= 100) {
            $('.site-header').addClass('mini');
        } else {
            $('.site-header').removeClass('mini');
        }
    });

    $('.page-menu .nav-link').on('click', function () {
        $("html, body").animate({ scrollTop: $($(this).attr('href')).offset().top }, 1000);
    })

	$('.bordered-box').on('click', function(){
		var thisRef = $(this).parent().attr('data-ref');
		$('.bordered-box').parent().removeClass('open')
        $('.bordered-box').removeClass('active')
		
		var thatRef = '';		
		var thisHtml = $(this).parent().find('#data-ref-' + thisRef).html();
		if($("div").hasClass( "core-team-item-div" )){
			thatRef = $('#core-team-item-div').attr('data-ref');
		}
		if(thisRef == thatRef) {			
			$('.core-team-item-div').remove();
		} else {
			$(this).parent().addClass('open');
			$(this).addClass('active');	
			
			$('.core-team-item-div').remove();
			var $parentT = $(this).parents('.listItem');
			$( "<div id='core-team-item-div' data-ref='"+thisRef+"' class='core-team-item-div'>" + thisHtml + "</div>" ).insertAfter($parentT);
		}
	});
	
	
	/*
	$('#teams .listItem .item').on('click', function(){
		var thisRef = $(this).attr('data-ref');
		var thatRef = '';		
		var thisHtml = $(this).find('#data-ref-' + thisRef).html();
		if($("div").hasClass( "core-team-item-div" )){
			thatRef = $('#core-team-item-div').attr('data-ref');
		}
		if(thisRef == thatRef) {
			console.log('====');
			$('.core-team-item-div').remove();
		} else {
			console.log('=!!=');
			$('.core-team-item-div').remove();
			$( "<div id='core-team-item-div' data-ref='"+thisRef+"' class='core-team-item-div'>" + thisHtml + "</div>" ).insertAfter($(this).parent());	
		}
	});
	*/
	
	
    // $("nav-item").click(function(){
    //     var $place = $(this).attr("href");
    //     $(window).animate(
    //     {scrollTop: $place.offset().top},400);
    // });

    // Select all links with hashes
    $('#top-navigation a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
    // On-page links
    if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
    ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 300, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
            return false;
            } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
            };
        });
        }
    }
    });
})