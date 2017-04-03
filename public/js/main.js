$(document).ready(function() {
	 
	 $('#searchForCustomer').on('input', function() {
		 var searchKeyword = $(this).val();

		 if (searchKeyword.length >= 2) {

		 	$.ajax({
                url:'/ajaxsearch',
                type:'GET',
                data:{ keywords: searchKeyword },
                dataType: 'json',
                success: function(data) {
                   ajaxReturned(data);
                   console.log(data);
                },
                error: function (data) {
                	console.log('error');
                    console.log(data);
                }
            });

			// $.post('search.php', { keywords: searchKeyword }, function(data) {
			// 	 $('ul#content').empty()
			// 	 $.each(data, function() {
			// 	 $('ul#content').append('<li><a href="example.php?id=' + this.id + '">' + this.title + '</a></li>');
			// 	 });
			// }, "json");
		 }
	 });

	 function ajaxReturned(data) {
	 	$('#ajaxResult').empty()
	 	$('#ajaxResult').append(data);

	 	// $('#ajaxResult').append('<a href="/customer/23" class="list-group-item">'+
	  //   '<h4 class="list-group-item-heading">'.name.'</h4>' +
	  //   '<p class="list-group-item-text">'.mobile.'</p></a>');
	 }

});