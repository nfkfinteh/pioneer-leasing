$(document).ready(function() {
	$("body").on("click",".second-menu__dropdown", function (e) {
		$(this).removeClass('show_child_menu_block');
		$(this).addClass('temp_hide_child_menu_block');
	});
	$("body").on("mouseout",".second-menu__dropdown.temp_hide_child_menu_block", function (e) {
		$(this).removeClass('temp_hide_child_menu_block');
	});
	$("body").on("click",".second-menu__dropdown.temp_hide_child_menu_block", function (e) {
		$(this).addClass('show_child_menu_block');
		$(this).removeClass('temp_hide_child_menu_block');
	});
});