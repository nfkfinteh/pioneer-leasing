<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

</div>
    	</div>
    </div>

    <footer>
    	<div class="footer-inner">
        	<div class="footer-col footer-col-one">
        		<div>
                	&copy; 2014 ООО «Пионер-Лизинг»
					<br>Все права защищены<br>
					<a href="https://pioneer-leasing.ru/investors/?DOC=%D0%9F%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D0%BA%D0%B0%20%D0%BA%D0%BE%D0%BD%D1%84%D0%B8%D0%B4%D0%B5%D0%BD%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D0%B8.pdf" target="_blank">Обработка персональных данных</a>
                </div>
				
            </div>
            <div class="footer-col footer-col-two">
        		<div>
                	428001, г. Чебоксары,
                    <br>пр-т М. Горького, д. 5, корп. 2
                    <br>+7 (8352) 45-89-89, 45-45-60
                </div>
            </div>
            <div class="footer-col footer-col-three">
        		<div>
                	<img class="footer-icon" src="<?=SITE_TEMPLATE_PATH?>/images/footer-map-icon.png" width="26" height="35" />
					<a href="/contacts/">Показать<br>на карте</a>
                </div>
            </div>
			
            <div class="footer-col footer-col-four">
        		<div>
					<a href="https://www.facebook.com/groups/259975668192460/" target="_blank" title="Наша страница в facebook" style="text-decoration: none; border: none;margin-right: 3px;">
		        		<img width="32" height="32" src="<?=SITE_TEMPLATE_PATH?>/images/fb.png" alt="Мы в facebook" title="Мы в facebook" />
	        		</a>
	        		<a href="http://vk.com/pioneer_leasing" target="_blank" title="Наша страница вконтакте" style="text-decoration: none; border: none; margin-right: 3px;">
		        		<img width="32" height="32" src="<?=SITE_TEMPLATE_PATH?>/images/vk.png" alt="Мы вконтакте" title="Мы вконтакте" />
	        		</a>
					<a href="https://t.me/NFKSber" target="_blank" title="Наша страница вконтакте" style="text-decoration: none; border: none;">
		        		<img width="32" height="32" src="<?=SITE_TEMPLATE_PATH?>/images/tel.png" alt="Мы вконтакте" title="Мы вконтакте" />
	        		</a>
<? /*
                	<img class="footer-icon" src="<?=SITE_TEMPLATE_PATH?>/images/footer-dev-icon.png" width="22" height="30" />
                	<div class="footer-four-left">Разработка и продвижение 
					<br><a href="http://www.upropaganda.ru" target="_blank">УправлениеПропаганды.РФ</a></div>
*/ ?>
                </div>
            </div>
        </div>
    </footer>

    <a class="problem-icon" href="javascript:clearModalFields(); setPlaceholders(); $('#ask-question').fadeIn('fast'); void(0);"></a>
    
    <div id="request-call" class="request-call blackmask-container">
    	<div class="blackmask" onClick="$(this).parents('.blackmask-container').fadeOut('fast');"></div>
        <div class="request-call-block">
        	<a href="javascript:$('#request-call').fadeOut('fast'); void(0);" class="fixed-button-close"></a>
        	<div class="request-call-header">
            	Заказать обратный звонок
            </div>
            <div class="request-call-fields">
            	<div class="request-call-field">
            		<input type="text" no-data-validate="name" id="request-call-name" placeholder="Ваше имя" />
            	</div>
                <div class="request-call-field">
            		<input type="text" data-validate="phone" id="request-call-phone" placeholder="Ваш телефон *" />
            	</div>
                <div class="request-call-field">
            		<input type="text" id="request-call-time" placeholder="Удобное время для звонка" />
            	</div>
                <div class="send-subscribe-field" style="color:#999;">
                	* - поля, обязательные для заполнения
                </div>
                <div class="request-call-submit" style="padding-top:20px;">
                	<a class="button-green" href="javascript:request_call(); void(0);">Отправить</a>
                </div>
            </div>
        </div>
    </div>
    
    <div id="ask-question" class="ask-question blackmask-container">
    	<div class="blackmask" onClick="$(this).parents('.blackmask-container').fadeOut('fast');"></div>
        <div class="ask-question-block">
        	<a href="javascript:$('#ask-question').fadeOut('fast'); void(0);" class="fixed-button-close"></a>
        	<div class="ask-question-header">
            	Задать вопрос
            </div>
            <div class="ask-question-fields">
            	<div class="ask-question-field">
            		<input type="text" id="ask-question-name" no-data-validate="name" placeholder="Ваше имя" />
            	</div>
                <div class="ask-question-field">
            		<input type="text" id="ask-question-email" data-validate="email" placeholder="Ваш e-mail *" />
            	</div>
                <div class="ask-question-field">
            		<textarea placeholder="Ваш вопрос" id="ask-question-message"></textarea>
            	</div>
                <div class="send-subscribe-field" style="color:#999;">
                	* - поля, обязательные для заполнения
                </div>
                <div class="ask-question-submit" style="padding-top:20px;">
                	<a class="button-green" href="javascript:ask_question(); void(0);">Отправить</a>
                </div>
            </div>
        </div>
    </div>
    
    <div id="send-order" class="send-order blackmask-container">
    	<div class="blackmask" onClick="$(this).parents('.blackmask-container').fadeOut('fast');"></div>
        <div class="send-order-block">
        	<a href="javascript:$('#send-order').fadeOut('fast'); void(0);" class="fixed-button-close"></a>
        	<div class="send-order-header">
            	Оформить заявку
            </div>
            <div class="send-order-fields">
            	<div class="send-order-field">
            		<input type="text" id="send-order-name" no-data-validate="name" placeholder="Ваше имя" />
            	</div>
                <div class="send-order-field">
            		<input type="text" id="send-order-phone" data-validate="phone" placeholder="Ваш телефон *" />
            	</div>
                <div class="send-order-field">
            		<input type="text" id="send-order-email" data-validate="email" placeholder="Ваш e-mail *" />
            	</div>
                <div class="send-order-field">
            		<textarea id="send-order-message" placeholder="Данные заявки"></textarea>
            	</div>
                <div class="send-order-field" style="color:#999;">
                	* - поля, обязательные для заполнения
                </div>
                <div class="send-order-submit" style="padding-top:20px;">
                	<a class="button-green" href="javascript:send_order(); void(0);">Отправить</a>
                	<br><small style="font-size: 9px !important; display: inline-block; padding-top: 5px; color: #999; padding-left: 28px; padding-right: 28px;">Результаты расчета не являются публичной офертой <br>и могут быть уточнены при заключении договора.</small>
                </div>
            </div>
        </div>
    </div>
    
    <div id="send-subscribe" class="send-subscribe blackmask-container">
    	<div class="blackmask" onClick="$(this).parents('.blackmask-container').fadeOut('fast');"></div>
        <div class="send-subscribe-block">
        	<a href="javascript:$('#send-subscribe').fadeOut('fast'); void(0);" class="fixed-button-close"></a>
        	<div class="send-subscribe-header">
            	Оформить подписку
            </div>
            <div class="send-subscribe-fields">
            	<div class="send-subscribe-field">
            		<input type="text" no-data-validate="name" id="send-subscribe-name" placeholder="Ваше имя" />
            	</div>
                <div class="send-subscribe-field">
            		<input type="text" data-validate="email" id="send-subscribe-email" placeholder="Ваш e-mail *" />
            	</div>
                <div class="send-subscribe-field" style="color:#999;">
                	* - поля, обязательные для заполнения
                </div>
                <div class="send-subscribe-submit" style="padding-top:20px;">
                	<a class="button-green" href="javascript:send_subscribe(this); void(0);">Отправить</a>
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="show-fsale" class="show-fsale blackmask-container">
    	<div class="blackmask" onClick="$(this).parents('.blackmask-container').fadeOut('fast');"></div>
        <div id="show-fsale-data"></div>
    </div>
    
    <div id="show-calc-info" class="show-calc-info blackmask-container">
    	<div class="blackmask" onClick="$(this).parents('.blackmask-container').fadeOut('fast');"></div>
        <div class="show-calc-block">
        	<a href="javascript:$('#show-calc-info').fadeOut('fast'); void(0);" class="fixed-button-close"></a>
            <div class="show-calc-info-data">
                <p>
                	Приведен приблизительный расчет на основании средней ставки удорожания. Условия каждого договора, в том числе значение ставки удорожания, определяются в индивидуальном порядке. Информация, содержащаяся в расчете, не является публичной офертой и не может рассматриваться как основание для возникновения у ООО «Пионер-Лизинг» каких-либо обязательств. Для получения точного расчета обратитесь к сотрудникам компании по телефону: +7 (8352) 45-89-89.
                </p>
                <br>
                <p>
                	Лизингополучатель несет расходы по страхованию предмета лизинга на весь срок действия договора + один месяц.
                </p>
            </div>
        </div>
    </div> 
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t44.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
//--></script><!--/LiveInternet-->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47891087 = new Ya.Metrika({
                    id:47891087,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/25952305" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>