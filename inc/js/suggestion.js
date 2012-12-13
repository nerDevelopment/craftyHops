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
					//This is what is grabbing the title and rating. The rating needs to be seperate than the title so it does not show, but it still needs to be attached to the title somehow.
					var beerNam = $.map(jsonData, function (obj) { return obj.beerName + ' ' +obj.rating });	
					
					console.log(beerNam);				
					$(".sudggestInput").autocomplete({source: beerNam,
						select: function(event, ui) {
							var obj = ui.item;
							//console.log(obj);
							$('.sudggestInput').val(obj.beerNam);
							$('.rating').val(obj.beerNam);
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
