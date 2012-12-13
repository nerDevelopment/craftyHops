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
					var beerNam = $.map(jsonData, function (obj) { return obj.beerName });	
					var ratings = $.map(jsonData, function (obj) { return obj.rating ; });	
					
					console.log(beerNam);				
					$(".sudggestInput").autocomplete({source: beerNam,
						select: function(event, ui) {
							var obj = ui.item;
							//console.log(obj);
							$('.sudggestInput').val(obj.beerNam);
							$('.rating').val(obj.ratings);
						}
					});
					
					
					
	
					
				},
				error: function() {
				}	
			});
		$( ".sudggestInput" ).click(function(){
		$(".ui-helper-hidden-accessible").hide();
	});
});
