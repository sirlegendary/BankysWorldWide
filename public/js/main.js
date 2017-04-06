$(document).ready(function() {
	 // search function
	$('#searchForCustomer').on('input', function() {
		 
		var searchKeyword = $(this).val();

		if(! /^[a-zA-Z0-9]+$/.test(searchKeyword)) {
		 	console.log('Only Alphanumeric charecters allowed.');
		 	return false;
		}

		if (searchKeyword.length >= 2) {

			$.get('/ajaxsearch', { keywords: searchKeyword }, function(data) {
				
				var totalCustomerFound = data.length;
				
				if(totalCustomerFound == 0) {
					$('#ajaxResult').empty();
					$('#ajaxResult').append('<div class="panel panel-default"><div class="panel-body">'
											+ 'No Customer found!</div></div>');
					return false;
				}

				$('#ajaxResult').empty();
				$('#listCustomer').hide();
				
				$.each(data, function() {
				 	$('#ajaxResult').append('<a href="/customer/' + this.id + '" class="list-group-item">'+
				    '<h4 class="list-group-item-heading">' + this.first_name + ' ' + this.last_name + '</h4>' +
				    '<p class="list-group-item-text">' + this.mobile + '</p></a>');
				});
			}, "json");

		} else {
		 	
		 	$('#listCustomer').show();
		 	$('#ajaxResult').empty();

		}

	});


	//transaction input validation

	$('.transactionIN').on( "keyup", function( event ) {
		
		// var input = $('#uk_pound').val();
		var dayRate = $('#exchangeRate').val();
		var totalNaira = $('#totalNaira').val();

		dayRateInput(dayRate);
		 
		
	    var selection = window.getSelection().toString();
	    if ( selection !== '' ) {
	        return;
	    }
 
	    if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
	        return;
	    }

	    var $this = $( this );
		var input = $this.val();
 
	var input = input.replace(/[\D\s\._\-]+/g, "");
	 
	input = input ? parseInt( input, 10 ) : 0;
	 

	$('#uk_pound').val( function() {
	    return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
	} );

	var totalNaira = dayRate*input;

	$('#totalNaira').val( function() {
	    return ( totalNaira === 0 ) ? "" : totalNaira.toLocaleString( "en-US" );
	} );

		

		// $('#totalNaira').val( totalNaira );

	});


});


function dayRateInput(dayRate){

	if($('#exchangeRate').val()) {
		
	$('#exchangeRate').val( function() {
	    return ( dayRate === 0 ) ? "" : dayRate.toLocaleString( "en-US" );
	} );
		console.log(dayRate);
	} else {
		alert('please provide the exchange rate');
		return false;
	}

	// var input = dayRate.replace(/[\D\s\._\-]+/g, "");
	 
	// input = input ? parseInt( input, 10 ) : 0;

}



