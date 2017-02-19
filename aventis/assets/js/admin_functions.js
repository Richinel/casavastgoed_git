var main = function() {
	$('.menu_btn').click(function() {
		$('.mobile_menu').fadeToggle(175);
	})

	$('.closemm').click(function() {
		$('.mobile_menu').fadeToggle(175);
	})

	// $.each($('div'), function(i, el){
	// 	$(el).css({'opacity':0});
		    
	// 	setTimeout(function(){
	// 	    $(el).animate({
	// 	    	'opacity':1.0
	// 	    }, 450);
	// 	},200 + ( i * 50 ));
	// });

	$('.add').hover(function() {
		$('.tooltip').fadeToggle(150);
	});

	tinymce.init({
		selector:	".ti_edit",
		themes: 	"modern",
		plugins: 	"lists image imagetools media link",
		language: 	"nl"
	});

	$('body').delegate('.add_woning_btn','click',function(){
	    $('.add_woning_modal').fadeIn(150);
	});

	$('body').delegate('.close3','click',function(){
	    $('.add_woning_modal').fadeToggle(150);
	});

};

$(document).ready(main);

