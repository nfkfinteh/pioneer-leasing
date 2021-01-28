<?php
    require_once('mailclass/smtppost.php');
    use \mailclass\smtppost as smtppost;

    // Заголовки сообщения, в них определяется кодировка сообщения, поля From, To и т.д.
    //$to = 'skiminok2005@gmail.com';
    //$to = 'vereschagin_av@nfksber.ru';
    $subject = 'Запрос консультации с сайта Пионер-Лизинг';
    
    
    $Name = $_POST['name'];
    $Tel  = $_POST['tel'];

    // Сообщение
    $content 	 = '
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
    <html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <title>Вопрос с сайта pioneer-leasing.ru о биржевых облигациях</title>
    <style type="text/css">

    </style>
    </head>
    <body>
    <div class="rcmBody" style="margin: 0">
        <table cellspacing="0" cellpadding="0" width="600" border="0" align="center" style="border-collapse: collapse; background: #ffffff; margin-top: 20px; margin-bottom: 20px; table-layout: fixed; padding: 0">
            <tbody>
            <tr>
                    <td style="width: 400px"><span style="font-family: "Roboto", sans-serif; color: #3b3c3b; font-size: 14px; text-decoration: none; color: #000000">тел. 8 800 200-84-84, <a style="font-family: "Roboto", sans-serif; color: #3b3c3b; font-size: 14px; text-decoration: none" href="http://nfksber.ru" target="_blank" rel="noreferrer">nfksber.ru</a></span></td>
                <td style="text-align: right; vertical-align: top">
                <a href="http://vk.com/nfksber" target="_blank" rel="noreferrer"><img alt="vk" border="0" width="36" height="32" src="http://nfksber.ru/assets/components/mail-shablon/vk.gif"></a>
                    <a href="https://www.facebook.com/nfksber/" target="_blank" rel="noreferrer"><img alt="facebook" border="0" width="36" height="32" src="http://nfksber.ru/assets/components/mail-shablon/fb.gif"></a>
                    <a href="http://ok.ru/nfksber" target="_blank" rel="noreferrer"><img alt="одноклассники" border="0" width="36" height="32" src="http://nfksber.ru/assets/components/mail-shablon/ok.gif"></a>
                    <a href="https://twitter.com/nfksber" target="_blank" rel="noreferrer"><img alt="Twitter" border="0" width="30" height="28" src="http://nfksber.ru/assets/components/mail-shablon/tw.gif"></a>
                </td>
            </tr>
                <tr>
                    <td style="height: 91px; text-align: center; padding-bottom: 0px; background: rgba(19, 96, 36, 0.83)">
                        <a href="http://nfksber.ru/" style="display: block; color: #333333; font-family: Tahoma, sans-serif; font-size: 12px; text-decoration: underline; line-height: 20px; -webkit-text-size-adjust: none" target="_blank" rel="noreferrer"><img src="http://nfksber.ru/assets/components/mail-shablon/nfk-logo.jpg" alt="НФК Сбережения" border="0" width="600" height="91" style="display: block; margin: 0px"></a>
                    </td>
                </tr>
        </tbody></table>
        <table cellspacing="0" cellpadding="0" width="600" border="0" align="center" style="border-collapse: collapse; background: #ffffff; margin-top: 20px; margin-bottom: 20px; table-layout: fixed; padding: 0">
        <tbody><tr>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border: 1px solid #c9c9c9; table-layout: fixed">
                            <tbody>
                            <tr>
                                <td style="padding: 10px 20px; font-family: "Roboto", sans-serif; color: #3b3c3b; font-size: 14px; text-decoration: none">
                                    <h2>Запрос консультации с сайта pioneer-leasing.ru</h2>
                                    <p>Запрос был отправлен со страницы "Как стать инвестором"</p>
                                    <br>Запрос отправлен ФИО: '.$Name.'
                                    <br>Контактный телефон: '.$Tel.'
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; padding-top: 10px">
                        <span style="width: 600px; margin: 0 auto; display: block; color: #a5a5a5; font-family: Tahoma, sans-serif; font-size: 12px; font-weight: 400; line-height: 20px; -webkit-text-size-adjust: none">
                Акционерное общество <br> «Инвестиционная компания «НФК-Сбережения»<br>428001,ЧУВАШИЯ ЧУВАШСКАЯ РЕСПУБЛИКА - ГОРОД ЧЕБОКСАРЫ,<br>ПРОСПЕКТ МАКСИМА ГОРЬКОГО д. 5 корп. 2</span>
                    </td>
                </tr>        
        </tbody></table>
    </div> 
    </body>
    </html>';

    $arr_to = array(        
        'solovyow_iv@nfksber.ru',
        'mail@nfksber.ru', 
        'sales@nfksber.ru', 
        'nfk-sber@yandex.ru'
    );

    foreach($arr_to as $to) {
        $SEND_MAIL = new smtppost();
        $SEND_MAIL->sendPost($to, $subject, $content);
    }

?>