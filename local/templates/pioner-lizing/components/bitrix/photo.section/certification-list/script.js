var certificateSlidePause = false;

function certificateSlide(nb)
{
	if (certificateSlidePause == true) return;
	
	var step = 127, 
	cPos = $('.certificates-inner-list').scrollLeft(), 
	nPos,   
	maxPos = $('.certificates-inner-list img').size()*step-step*4;
	
	if (maxPos < 0) maxPos = 0;
	
	certificateSlidePause = true;
	if (nb === true)
	{
		nPos = cPos + step;
		if (nPos > maxPos) nPos = maxPos;

		$('.certificates-inner-list').animate({scrollLeft : nPos}, 'slow', 'swing', function ()
		{
			certificateSlidePause = false;
		});
	} else {
		nPos = cPos - step;
		if (nPos <= 0) nPos = 0;
		
		$('.certificates-inner-list').animate({scrollLeft : nPos}, 'slow', 'swing', function ()
		{
			certificateSlidePause = false;
		});
	};
}