<?php 
class Lang{
    public static $lang='';
    public static $dictionnary=[];
    public static function translate($index=''){
        $ret=$index;
        if(self::$lang=='us'){
            if(isset(self::$dictionnary[$index])){$ret=self::$dictionnary[$index];}
        }
        return $ret;
    }
} 