<div class="download-presentation">
	<div class="download-presentation-play">
    	<div style="display:none;"><iframe width="300" height="195" src="" frameborder="0" allowfullscreen></iframe></div>
    	<a href="javascript: void(0);" onClick="$('#youtube-block').html($('#youtube-code').val()); $('#show-video').fadeIn('fast');">
    		<img src="<?=SITE_TEMPLATE_PATH?>/images/presentation-play.png" alt="Скачать презентацию" title="Скачать презентацию" />
    	</a>
    </div>
    <div class="download-presentation-link">
   		<a href="/upload/docs/pioneer_leasing_presentation.pdf" target="_blank" class="download-presentation-btn">
    		скачать презентацию
    	</a>
    </div>
</div>

<div id="show-video" style="display:none;">
    <div class="show-video-block">
    	<span onClick="$('#show-video').fadeOut('fast', function () { $('#youtube-block').html('') });" class="show-video-close"></span>
    	<div class="blackmask" onClick="$('#show-video').fadeOut('fast', function () { $('#youtube-block').html('') });"></div>
   		<span id="youtube-block"></span>
    </div>
</div>

<textarea style="display:none;" id="youtube-code"><video src="/upload/pioneer.mp4" width="640" height="480" autoplay controls>
Ваш браузер не поддерживает теги <video> </video>! Обновите версию браузера!
</video></textarea>
<!--<iframe width="640" style="z-index:1000;" allowtransparency="true" height="480" src="//www.youtube.com/embed/YfeU-MK7KSw" frameborder="0" allowfullscreen></iframe>-->