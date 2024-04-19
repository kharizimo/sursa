<?php 
class Lang{
    private static $_dictionnary=[];
    private static string $_langage='fr';

    public static function load($langage='fr',$file='lang.json'){
        self::$_langage=$langage;
        if(is_file($file)){
            self::$_dictionnary=json_decode(file_get_contents($file),true);
        }
    }
    public static function _($text){
        return self::$_dictionnary[$text][self::$_langage]??$text;
    }
    public static function translate($text){
        return self::$_dictionnary[$text][self::$_langage]??$text;
    }
}