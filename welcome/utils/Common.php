<?php
class Common{
    public static function send_mail($param){
        extract($param);
        
        $ret=true;
        $_from=$_from??'SURSA - RD Congo <noreply@sursa.cd>';
        $_content=$_content??'';
        $_body=$_body??'';
        $_to=$_to??'kharizimo@gmail.com';
        $_subject=$_subject??'No subject';
        extract($_vars??[]);
        $_headers[]='MIME-Version: 1.0';
        $_headers[]='Content-type: text/html; charset=utf-8';
        $_headers[] = "From: $_from";
        $_url="../mails/$_content.php";
        if(is_file($_url)):
            ob_start();
            require $_url;
            $_body=ob_get_clean();
        endif;
        if(!@mail($_to, $_subject, $_body, implode("\r\n", $_headers))){
            $ret=false;
        }    
        return $ret;
    }    
}