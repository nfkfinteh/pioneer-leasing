$(document).ready(function()
{
	var params = {
		changedEl: "select[name='arrFilter_pf[category]']",
		visRows: 5,
		scrollArrows: true
	}
	cuSel(params);
	
	var val = $('input[name="arrFilter_pf[price][LEFT]"]').val();
	if (val != "")
	{
		val = number_format(val, 0, ' ', ' ');
		if (val != "0")
			$('input[name="arrFilter_pf[price][LEFT]"]').val(val);
	}
	
	val = $('input[name="arrFilter_pf[price][RIGHT]"]').val();
	if (val != "")
	{
		val = number_format(val, 0, ' ', ' ');
		if (val != "0")
			$('input[name="arrFilter_pf[price][RIGHT]"]').val(val);
	};
	
	$('form[name="arrFilter_form"]').on('submit', function (e)
	{
		var val1 = $('input[name="arrFilter_pf[price][LEFT]"]').val(), 
		val2 = $('input[name="arrFilter_pf[price][RIGHT]"]').val();
		
		val1 = val1.replace(/ /gi, '');
		val2 = val2.replace(/ /gi, '');

		$('input[name="arrFilter_pf[price][LEFT]"]').val(val1);
		$('input[name="arrFilter_pf[price][RIGHT]"]').val(val2);
	});
	
	$('input[name="arrFilter_pf[price][LEFT]"]').on('keyup', function ()
	{
		var val = $('input[name="arrFilter_pf[price][LEFT]"]').val();
		if (val !== '')
		{
			val = val.replace(/ /gi, '');
			val = number_format(val, 0, ' ', ' ');
			$('input[name="arrFilter_pf[price][LEFT]"]').val(val);
		}
	});
	
	$('input[name="arrFilter_pf[price][RIGHT]"]').on('keyup', function ()
	{
		var val = $('input[name="arrFilter_pf[price][RIGHT]"]').val();
		if (val !== '')
		{
			val = val.replace(/ /gi, '');
			val = number_format(val, 0, ' ', ' ');
			$('input[name="arrFilter_pf[price][RIGHT]"]').val(val);
		}
	});
});