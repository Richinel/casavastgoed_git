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


	// init Isotope
	var $grid = $('.grid').isotope({
	  itemSelector: '.element-item',
	  layoutMode: 'fitRows',
	  getSortData: {
	    rotterdam: 		'rotterdam',
	    type: 			'type',
	    weight: function( itemElem ) {
	      var weight = $( itemElem ).find('.weight').text();
	      return parseFloat( weight.replace( /[\(\)]/g, '') );
	    }
	  }
	});

	// filter functions
	var filterFns = {
	  // show if number is greater than 50
	  numberGreaterThan50: function() {
	    var number = $(this).find('.number').text();
	    return parseInt( number, 10 ) > 50;
	  },
	  // show if name ends with -ium
	  ium: function() {
	    var name = $(this).find('.name').text();
	    return name.match( /ium$/ );
	  }
	};

	// bind filter button click
	$('#filters').on( 'click', 'button', function() {
	  var filterValue = $( this ).attr('data-filter');
	  // use filterFn if matches value
	  filterValue = filterFns[ filterValue ] || filterValue;
	  $grid.isotope({ filter: filterValue });
	});

	// bind sort button click
	$('#sorts').on( 'click', 'button', function() {
	  var sortByValue = $(this).attr('data-sort-by');
	  $grid.isotope({ sortBy: sortByValue });
	});

	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = $( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
	    $buttonGroup.find('.is-checked').removeClass('is-checked');
	    $( this ).addClass('is-checked');
	  });
	});

};

$(document).ready(main);

