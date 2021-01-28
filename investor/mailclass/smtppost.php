<?php
/*
    класс отправки почты через SMTP 
*/
namespace mailclass;

class smtppost {

    private $MAIL_HOST      = 'post.nfksber.ru';
    private $MAIL_PORT      = 587;
    private $MAIL_SMTPDebag = false;
    private $MAIL_SMTPAuth  = true;
    private $MAIL_LOGIN     = 'sendmail@pioneer-leasing.ru';
    private $MAIL_PASSWORD  = 'x9FtJ7#Bj75';
    private $MAIL_EMAIL     = 'sendmail@pioneer-leasing.ru';

    // Заголовок письма
    private function HeadersText($reciever){
        $headers = "MIME-Version: 1.0\r\n";        
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "To: $reciever\r\n";
        $headers .= "From: Имя отправителя <sendmail@pioneer-leasing.ru>";

        return $headers;
    }

    // отправка письма
    private function MailSmtp($reciever, $subject, $content, $headers) {

        $smtp_server    = $this->MAIL_HOST ; // адрес SMTP-сервера
        $smtp_port      = $this->MAIL_PORT; // порт SMTP-сервера
        $smtp_user      = $this->MAIL_LOGIN; // »м¤ пользовател¤ дл¤ авторизации на SMTP-сервере
        $smtp_password  = $this->MAIL_PASSWORD; // ѕароль дл¤ авторизации на SMTP-сервере
        $mail_from      = $this->MAIL_EMAIL; // ящик, с которого отправл¤етс¤ письмо
      
        $sock = fsockopen($smtp_server,$smtp_port,$errno,$errstr,30);
      
        $str = fgets($sock,512);
        
        if (!$sock) {
          printf("Socket is not created\n");
          exit(1);
        }
      
        $this->smtp_msg($sock, "HELO " . $_SERVER['SERVER_NAME']);
        $this->smtp_msg($sock, "AUTH LOGIN");
        $this->smtp_msg($sock, base64_encode($smtp_user));
        $this->smtp_msg($sock, base64_encode($smtp_password));
        $this->smtp_msg($sock, "MAIL FROM: <" . $mail_from . ">");
        $this->smtp_msg($sock, "RCPT TO: <" . $reciever . ">");
        $this->smtp_msg($sock, "DATA");
      
        $headers = "Subject: " . $subject . "\r\n" . $headers;
      
        $data = $headers . "\r\n\r\n" . $content . "\r\n.";
      
        $this->smtp_msg($sock, $data);
        $this->smtp_msg($sock, "QUIT");
      
        fclose($sock);
    }

    // доступ к методу отправки писем
    public function sendPost($reciever, $subject, $content){
        
        //echo "Ваше сообщение отправлено!";
        
        $headers = $this->HeadersText($reciever);
        $this->MailSmtp($reciever, $subject, $content, $headers);
    }


    private function smtp_msg($sock, $msg) {

        //$_SERVER['debug'] = true;

        if (!$sock) {
          printf("Broken socket!\n");
          exit(1);
        }
      
        if (isset($_SERVER['debug']) && $_SERVER['debug']) {
          printf("Send from us: %s<BR>", nl2br(htmlspecialchars($msg)));
        }
        fputs($sock, "$msg\r\n");
        $str = fgets($sock, 512);
        if (!$sock) {
          printf("Socket is down\n");
          exit(1);
        }
        else {
          if (isset($_SERVER['debug']) && $_SERVER['debug']) {
            printf("Got from server: %s<BR>", nl2br(htmlspecialchars($str)));
          }
      
          $e = explode(" ", $str);
          $code = array_shift($e);
          $str = implode(" ", $e);
      
          if ($code > 499) {
            printf("Problems with SMTP conversation.<BR><BR>Code %d.<BR>Message %s<BR>", $code, $str);
            exit(1);
          }
        }
      }

}

?>