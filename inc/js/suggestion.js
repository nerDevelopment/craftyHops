$(document).ready(function(){
	$( ".sudggestInput" ).empty();
	$(".ui-helper-hidden-accessible").hide();
		$.ajax({
			url: "../Jessica/index.php/Suggest/autocomplete",
			type: "POST",
			dataType: 'json',
				data: {},
				success: function(d){
					var jsonData = d.name;
					var beerNam = $.map(jsonData, function (obj) { return obj.beerName; });
					//console.log(beerNam);
					
					$(".sudggestInput").autocomplete({source: beerNam});
				},
				error: function() {
				}	
			});
		$( ".sudggestInput" ).click(function(){
		$(".ui-helper-hidden-accessible").hide();
	});
});
