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

	tinymce.init({
		selector:	".ti_edit",
		themes: 	"modern",
		plugins: 	"lists image imagetools media link",
		language: 	"nl"
	});


};

$(document).ready(main);

