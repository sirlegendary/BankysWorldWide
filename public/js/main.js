$(document).ready(function() {
	 // search function
	$('#searchForCustomer').on('input', function() {

		$(document).keypress(	//prevent enter key from reloading page
		    function(event){
		     if (event.which == '13') {
		        event.preventDefault();
		    }
		});

 
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


	//transaction input validation: https://webdesign.tutsplus.com/tutorials/auto-formatting-input-value--cms-26745

	$('.transactionIN').on('input', function( event ) {
		var uk_pound = $('#uk_pound').val();
		var dayRate = $('#exchangeRate').val();
		var totalNaira = $('#totalNaira').val();

	    var selection = window.getSelection().toString();
	    if ( selection !== '' ) {
	        return;
	    }
 
	    if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
	        return;
	    }

	    totalNaira = (dayRate*uk_pound).toFixed(2);

		console.log(totalNaira);

		$('#totalNaira').val( totalNaira );

	});


	


});




