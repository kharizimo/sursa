<?php 
class Utils{
    public static function token($option){
        $type=$option['type']??'alpha';
        $case=$option['case']??'min';//maj
        $size=$option['size']??8;
        $case=$option['case']??'maj';
        $ret='';
        switch($type){
            case 'alpha':
                $t=substr(sha1(time()),-$size);
                $ret=$case=='min'?strtolower($t):strtoupper($t);
                break;
            case 'num':
                $ret=rand((int)str_repeat('1',$size),(int)str_repeat('9',$size));
        }
        return $ret;
    }
    public static function send_mail($content,$option=[]){

    }
    public static function pdf($content,$option){

    }    
}