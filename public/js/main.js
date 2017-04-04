$(document).ready(function() {
	 
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

});