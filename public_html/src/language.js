$(document).ready(function() {
	$(".itemLang").hide();
	$('#language').click(function(event){
		$('.itemLang', this).toggle('slow');
	});
});