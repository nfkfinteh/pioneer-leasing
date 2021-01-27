<?
function resize($file_input, $file_output, $w_o, $h_o, $percent = false) {
    list($w_i, $h_i, $type) = getimagesize($file_input);
    if (!$w_i || !$h_i) {
        echo 'Невозможно получить длину и ширину изображения';
        return;
        }
        $types = array('','gif','jpeg','png');
        $ext = $types[$type];
        if ($ext) {
                $func = 'imagecreatefrom'.$ext;
                $img = $func($file_input);
        } else {
                echo 'Некорректный формат файла';
        return;
        }
    if ($percent) {
        $w_o *= $w_i / 100;
        $h_o *= $h_i / 100;
    }
    if (!$h_o) $h_o = $w_o/($w_i/$h_i);
    if (!$w_o) $w_o = $h_o/($h_i/$w_i);

    $img_o = imagecreatetruecolor($w_o, $h_o);
    imagecopyresampled($img_o, $img, 0, 0, 0, 0, $w_o, $h_o, $w_i, $h_i);
    if ($type == 2) {
        return imagejpeg($img_o,$file_output,100);
    } else {
        $func = 'image'.$ext;
        return $func($img_o,$file_output);
    }
}

if (!function_exists("cdump")) {
    function cdump($var){
        echo "<script>";
        echo "console.log(" . json_encode($var) . ");";
        echo "</script>";
    }
}

/* RESIZE SALES IMAGES */
function sale_resize_image($arFields)
{
    $db_props = CIBlockElement::GetProperty($arFields['IBLOCK_ID'], $arFields['ID'], "sort", "asc", array("CODE" => "photos"));
    $PROPS = array();

    while($ar_props = $db_props->Fetch())
    {
        $PROPS[] = $ar_props['VALUE'];
        $img_path = $_SERVER['DOCUMENT_ROOT'].CFile::GetPath($ar_props['VALUE']);
        list($width_orig, $height_orig) = getimagesize($img_path);
        resize($img_path, $img_path, 960, 0, false);
    };
};


function sendSubscribe($arFields)
{
    /*$sourceEmail = iconv('utf-8', 'cp1251', "Пионер-Лизинг")." <mail@pioneer-leasing.ru"; //ОТ

    $q = mysql_query("SELECT * FROM b_subscription WHERE (CONFIRMED = 'Y') AND (ACTIVE = 'Y')");
    if ($q)
    {
        if (mysql_num_rows($q) > 0)
        {
            while ($data = mysql_fetch_assoc($q))
            {

                $message = "<h1>Новая позиция в раделе \"Распродажи\"</h1>
                <p>
                    Название: ".$arFields['NAME']."
                    <br>Стоимость: ".$arFields['PROPERTY_VALUES']["18"]["n0"]["VALUE"]." руб.
                    <br><a target=\"_blank\" href=\"http://pioneer-leasing.ru/sale/\">Узнать подробнее</a>
                </p>
                <br>
                <p>
                    <a href=\"http://pioneer-leasing.ru/subscribe/?unConfirmCode=".$data['CONFIRM_CODE']."\">Отписаться от рассылки</a>
                </p>";

                $headers  = "Content-type: text/html; charset=utf-8 \r\n";
                $headers .= "From: ".$sourceEmail."\r\n";

                mail($data['EMAIL'], iconv('utf-8', 'cp1251', "Новая позиция в раделе \"Распродажи\""), iconv('utf-8', 'cp1251', $message), $headers);
                //mail($data['EMAIL'], "Новая позиция в раделе \"Распродажи\"", $message, $headers);
            };
        };
    };*/
};




require ($_SERVER["DOCUMENT_ROOT"].'/local/lib/PHPMailer/PHPMailerAutoload.php');
function custom_mail($to, $subject, $message, $additional_headers, $additional_parameters)
{
    if (stristr($additional_headers, "Content-Type: text/html") || stristr($message, "Content-Type: text/html"))
    {
        $isHTML=true;
    } else
    {
        $isHTML=false;
    }
    $isHTML=false;

    $filesIDs=array();
    $filesSRCs=array();
    if (stristr($message,'------------'))
    {
        $messageArr=explode('------------',$message);
        $messageArr2=explode('Content-Transfer-Encoding: 8bit',$messageArr[1]);
        $message=trim($messageArr2[1]);

        for ($i=2;$i<count($messageArr);$i++)
        {
            $curPart=$messageArr[$i];
            if (stristr($curPart,'Content-ID: <'))
            {
                $curPartArr=explode('Content-ID: <',$curPart);
                $curPartArr=explode('>',$curPartArr[1]);
                $filesIDs[]=$curPartArr[0];
            }
        }
    }
    if (stristr($message,'---------'))
    {
        $messageArr=explode('---------',$message);
        $messageArr2=explode('Content-Transfer-Encoding: 8bit',$messageArr[1]);
        $message=trim($messageArr2[1]);

        for ($i=2;$i<count($messageArr);$i++)
        {
            $curPart=$messageArr[$i];
            if (stristr($curPart,'Content-ID: <'))
            {
                $curPartArr=explode('Content-ID: <',$curPart);
                $curPartArr=explode('>',$curPartArr[1]);
                $filesIDs[]=$curPartArr[0];
            }
        }
    }


    foreach ($filesIDs as $filesID)
    {
        $src=CFile::GetFileArray($filesID);
        $filesSRCs[]=$src["SRC"];
    }

    $to = str_replace(' ','',$to);
    $to = strtolower($to);

    $fromName="pioneer-leasing.ru";

    $host="post.nfksber.ru";
    $port=587;
    $user="lk@nfksber.ru";
    $from="lk@nfksber.ru";
    $pass="2ghWTVs8N3";


    preg_match('/Reply-To: (.+)\n/i', $additional_headers, $matches);
    list(, $ReplyTo) = $matches;
    $ReplyTo = str_replace(' ','',$ReplyTo);
    $ReplyTo = strtolower($ReplyTo);
    $ReplyTo=explode(",",$ReplyTo);

    preg_match('/BCC: (.+)\n/i', $additional_headers, $matches);
    list(, $bcc) = $matches;

    $bcc=explode(",",$bcc);
    $bcc2=COption::GetOptionString("main", "all_bcc");
    $bcc2=explode(",",$bcc2);
    $bcc=array_merge($bcc,$bcc2);
    $bcc2=array();
    $address = explode(',', $to);
    foreach ($bcc as $email)
    {
        $mail=trim($email);
        if (!in_array($mail,$address))
        {
            $bcc2[]=$mail;
        }
    }
    $bcc=$bcc2;
    $bcc=array_unique($bcc);

    if ($isHTML)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();

        $address = explode(',', $to);
        foreach ($address as $addr)
        {
            $mail->addAddress(trim($addr));
        }

        foreach ($ReplyTo as $email)
        {
            if (trim($email)!="")
            {
                $mail->AddReplyTo($email);
            }
        }

        foreach ($bcc as $email)
        {
            if (trim($email)!="")
            {
                $mail->addBCC(trim($email));
            }
        }

        $mail->CharSet = 'UTF-8';
        $mail->Host = $host; // SMTP server example
        $mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
        $mail->SMTPAuth = true; // enable SMTP authentication
        //$mail->SMTPSecure = 'tls';
        $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Port = $port; // set the SMTP port for server
        $mail->Username = $user; // SMTP account username example
        $mail->Password = $pass; // SMTP account password example
        $mail->From = $from;
        $mail->FromName = $fromName;

        $mail->IsHTML(true);
        $mail->Subject = $subject;

        $bndr = substr(substr($message, 0, 25), -23); // А ВОТ ТУТ МУТИМ СВОЮ МАГИЮ!
        $mail->ContentType = 'multipart/mixed; boundary="' . $bndr . '"';
        $mail->Body = $message;
        $mail->AltBody = strip_tags(str_replace("<br />","\n",$message));

        foreach ($filesSRCs as $file)
        {
            $mail->AddAttachment($_SERVER["DOCUMENT_ROOT"].$file);
        }

        if (!$mail->send())
        {
            //file_put_contents($_SERVER["DOCUMENT_ROOT"]."/_asd","\nError: ".$mail->ErrorInfo."\n",FILE_APPEND);
            return false;
            exit;
        }
        return true;
    } else
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();

        $address = explode(',', $to);
        foreach ($address as $addr)
        {
            $mail->addAddress(trim($addr));
        }

        foreach ($ReplyTo as $email)
        {
            if (trim($email)!="")
            {
                $mail->AddReplyTo(trim($email));
            }
        }

        foreach ($bcc as $email)
        {
            if (trim($email)!="")
            {
                $mail->addBCC(trim($email));
            }
        }

        $mail->CharSet = 'UTF-8';
        $mail->Host = $host; // SMTP server example
        $mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
        //$mail->SMTPSecure = 'tls';
        $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->SMTPAuth = true; // enable SMTP authentication
        $mail->Port = $port; // set the SMTP port for the GMAIL server
        $mail->Username = $user; // SMTP account username example
        $mail->Password = $pass; // SMTP account password example
        $mail->From = $from;
        $mail->FromName = $fromName;

        $mail->Subject = $subject;
        $mail->Body = $message;

        foreach ($filesSRCs as $file)
        {
            $mail->AddAttachment($_SERVER["DOCUMENT_ROOT"].$file);
        }

        if (!$mail->send())
        {
            //file_put_contents($_SERVER["DOCUMENT_ROOT"]."/_asd","\nError: ".$mail->ErrorInfo."\n",FILE_APPEND);
            return false;
            exit;
        }
        return true;
    }
    return false;
}


function HeaderStyleClass()
{
    $header_class = $GLOBALS['APPLICATION']->GetPageProperty('header-class');
    return $header_class;
}


function BodyStyleClass()
{
    $body_class = $GLOBALS['APPLICATION']->GetPageProperty('body-class');
    return $body_class;

    return $content;
}