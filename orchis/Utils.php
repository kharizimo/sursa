<?php 
class Utils{
    public static function token($option=[]){
        $case=$option['case']??'min';//maj
        $ret='';$t=sha1(time());
        $ret=$case=='min'?strtolower($t):strtoupper($t);
        return $ret;
    }
    public static function otp($option=[]){
        $size=$option['size']??4;
        $ret='';
        $ret=rand((int)str_repeat('1',$size),(int)str_repeat('9',$size));
        return $ret;
    }
    public static function send_mail($option){
        extract($option);
        
        $ret=true;
        $_from=$_from??'SURSA - RD Congo <noreply@sursa.cd>';
        $_content=$_content??'';
        $_content=$_content??'';
        $_to=$_to??'kharizimo360@gmail.com';
        $_subject=$_subject??'No subject';
        extract($_vars??[]);
        $_headers[]='MIME-Version: 1.0';
        $_headers[]='Content-type: text/html; charset=utf-8';
        $_headers[] = "From: $_from";
        
        if(!@mail($_to, $_subject, $_content, implode("\r\n", $_headers))){
            $ret=false;
        }    
        return $ret;
    } 
    public static function pdf($content,$option){

    }    
}