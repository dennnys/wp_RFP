var pages = 0;
var page_active = 0;
var position = 0;
jQuery(document).ready(function () {
	pages = jQuery('#rfp-container .page').length-1;
	calculate_loading();
	calculate_point();
	point_active();
	pages_active();
	verification_btn_controls();

// hided message
	jQuery('#rfp_message .x_close').on('click', function() {
		jQuery('#rfp_message').hide();
	});

	jQuery("#next").on("click", function() {
		if (validation()) {
			if(page_active < pages) page_active++;
			calculate_loading();
			point_active();
			pages_active();
			verification_btn_controls();
			rfp_title_subtitle();
			goTop();
		} else {
			goError();
		}
		
	});
	jQuery('#back').on('click', function() {
		if(page_active > 0) page_active--;
		calculate_loading();
		point_active();
		pages_active();
		verification_btn_controls();
		rfp_title_subtitle();
		goTop();
	});

	jQuery('#rfp_form').submit(function() {
		if (validation()) {
			jQuery('#rfp_form').submit();
		} else {
			event.preventDefault();
			goError();
		}
	});

});

function verification_btn_controls() {
	if (page_active != 0) {
		jQuery('#back').addClass('active');
	} else {
		jQuery('#back').removeClass('active');
	}
	if (page_active != pages) {
		jQuery('#next').addClass('active');
	} else {
		jQuery('#next').removeClass('active');
	}
}

/* VALIDATION */
function validation() {
	var temp_bool = true;

	if (page_active == 0 ) {
		// campaign title
		if (jQuery('#q02').val() == '') {
			temp_bool = false;
			jQuery('#q02').addClass('alert');
		} else {
			jQuery('#q02').removeClass('alert');
		}

		// radio 1
		var q1 = document.getElementsByName("q01");
		if (q1[0].checked == true || q1[1].checked == true || q1[2].checked == true ) {
			jQuery('.radio1>div').removeClass('alert');
		} else {
			temp_bool = false;
			jQuery('.radio1>div').addClass('alert');
		}

		// date campaign
		if (jQuery('#q03').val() == '') {
			temp_bool = false;
			jQuery('#q03').addClass('alert');
		} else {
			jQuery('#q03').removeClass('alert');
		}
	} // end validation page 0

	if (page_active == 1 ) {
		// brand
		if (jQuery('#q11').val() == '') {
			temp_bool = false;
			jQuery('#q11').addClass('alert');
		} else {
			jQuery('#q11').removeClass('alert');
		}

	} // end validation page 1

	if (page_active == 5 ) {
		// radio
		var q1 = document.getElementsByName("q51");
		if (q1[0].checked == true || q1[1].checked == true || q1[2].checked == true ) {
			jQuery('.q51>div').removeClass('alert');
		} else {
			temp_bool = false;
			jQuery('.q51>div').addClass('alert');
		}
		// age min
		if (jQuery('#q52').val() == '') {
			temp_bool = false;
			jQuery('#q52').addClass('alert');
		} else {
			jQuery('#q52').removeClass('alert');
		}
		// age max
		if (jQuery('#q53').val() == '') {
			temp_bool = false;
			jQuery('#q53').addClass('alert');
		} else {
			jQuery('#q53').removeClass('alert');
		}
		// location
		if (jQuery('#q54').val() == '') {
			temp_bool = false;
			jQuery('#q54').addClass('alert');
		} else {
			jQuery('#q54').removeClass('alert');
		}
	} // end validation page 5

	if (page_active == 6 ) {
		// radio
		var q1 = document.getElementsByName("q61");
		if (q1[0].checked == true || q1[1].checked == true || q1[2].checked == true || q1[3].checked == true) {
			jQuery('.q61>div').removeClass('alert');
		} else {
			temp_bool = false;
			jQuery('.q61>div').addClass('alert');
		}
		// radio
		var q1 = document.getElementsByName("q62");
		if (q1[0].checked == true || q1[1].checked == true || q1[2].checked == true || q1[3].checked == true) {
			jQuery('.q62>div').removeClass('alert');
		} else {
			temp_bool = false;
			jQuery('.q62>div').addClass('alert');
		}
	} // end validation page 6

	if (page_active == 7 ) {
		// First name
		if (jQuery('#q71').val() == '') {
			temp_bool = false;
			jQuery('#q71').addClass('alert');
		} else {
			jQuery('#q71').removeClass('alert');
		}
		// Last name
		if (jQuery('#q72').val() == '') {
			temp_bool = false;
			jQuery('#q72').addClass('alert');
		} else {
			jQuery('#q72').removeClass('alert');
		}
		// Email
		if (jQuery('#q73').val() == '') {
			temp_bool = false;
			jQuery('#q73').addClass('alert');
		} else {
			jQuery('#q73').removeClass('alert');
		}
		// Phone number
		if (jQuery('#q74').val() == '') {
			temp_bool = false;
			jQuery('#q74').addClass('alert');
		} else {
			jQuery('#q74').removeClass('alert');
		}
	} // end validation page 7

	return temp_bool;
}
/* END VALIDATION */

function point_active() {
	var points = jQuery('#rfp-breadcrumbs span.page');
	points.each(function(){
		if (jQuery(this).attr('pos') == page_active) {
			jQuery(this).addClass('active');
		} else {
			jQuery(this).removeClass('active');
		};
		if (jQuery(this).attr('pos') < page_active) {
			jQuery(this).addClass('color-blue');
		} else {
			jQuery(this).removeClass('color-blue');
		};
	});
}

function pages_active() {
	var paggess = jQuery('#rfp-container div.page');
	paggess.each(function(){
		if (jQuery(this).attr('pos') == page_active) {
			jQuery(this).addClass('active');
		} else {
			jQuery(this).removeClass('active');
		};
	});
}

function calculate_point() {
	var np = pages;
	if (np >= 0) {
		for (let i = 0; i<=np; i++) {
			let temp = 100 / np * i;
			jQuery('#rfp-breadcrumbs').append( "<span class='page' pos='"+i+"' style='left: "+temp+"%'><i class='fa fa-arrow-right' aria-hidden='true'></i></span>" );
		}
	}
}

function calculate_loading() {
	position = 100 / (pages) * page_active;
	jQuery('#load').css('width', position+'%')
}

function goTop() {
	jQuery('body,html').animate({
		scrollTop:0
	}, 800);
	return false;
}

function goError() {
	var element_top = jQuery('.alert:first');
	var pos_top = element_top.position();
	jQuery('body,html').animate({
		scrollTop:pos_top.top-100
	}, 800);
	
	return false;
}

function rfp_title_subtitle() {
	var temp_title;
	var temp_subtitle;
	switch(page_active) {
		case 0:
				temp_title = 'Quick and easy proposal request';
				temp_subtitle = 'Fill out our short template to let us know your influencer marketing needs in as much detail as possible. The more the better! This helps us help you in the most efficient and fastest way possible.';
			break;
		case 1:
				temp_title = 'Let’s get to know you';
				temp_subtitle = 'The more we know and understand your brand, the better and more personalized we can make your proposal.';
			break;
		case 2:
				temp_title = 'What’s your campaign all about?';
				temp_subtitle = 'How are you going to bring your campaign to life? Achieving your goals is our main priority.';
			break;
		case 3:
				temp_title = 'What catches your eye?';
				temp_subtitle = 'Select images that resonate with the style and mood you had in mind for the campaign.';
			break;
		case 4:
				temp_title = 'Your brands Do’s and Don’ts';
				temp_subtitle = 'We care about your brands reputation. Let us know of any and all requirements influencers should be aware of before they agree to be a part of the campaign..';
			break;
		case 5:
				temp_title = 'Share your target audience';
				temp_subtitle = 'The more information we know about your target audience, the more accurate our influencer recommendations will be.';
			break;
		case 6:
				temp_title = 'Select your program';
				temp_subtitle = 'With many years of influencer and campaign data, we are able to benchmark our deliverables. As a result, we guarantee the minimums provided in your proposal and strive to overdeliver.';
			break;
		case 7:
				temp_title = 'Almost finished';
				temp_subtitle = 'Sign up to submit your RFP and our team will be in touch shortly.';
			break;

	}
	jQuery('#rfp-title-page').html(temp_title);
	jQuery('#rfp-subtitle-page').html(temp_subtitle);
}

