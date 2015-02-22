$(document).ready(function() {
	$("#search-mini").on('input',function() {
		str=$("#search-mini").val();
		console.log("hello" + str);
		doSearch(str);
	});
});
