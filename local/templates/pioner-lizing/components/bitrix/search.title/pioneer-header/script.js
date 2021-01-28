$(document).ready(function() {
    $("body").on("click",".show-search-title-block, .close-search-title-block", function (e) {
		e.preventDefault();
		$(".show-search-title-block").toggleClass('active');
		$(".search-block").toggleClass('active');
	});
});