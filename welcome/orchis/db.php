<?php
/*
powered by Trésor Sukami
Sépia Technologies 
version 1.1
*/
class Db{
    private static $cn=null;
    public static function connect($param){
        extract($param);
        $db_charset='utf8';
        $db_dns="mysql:host=$db_host;dbname=$db_name;charset=$db_charset";
        $db_options=[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ];
        try{self::$cn=new PDO($db_dns,$db_user,$db_pwd,$db_options);}
        catch(exception $e){}
        
    }
    /** database functions */
    public static function rows($sql){
        $ret=[];
        try{
            $q=self::$cn->query($sql);
            while($r=$q->fetch()){
                $ret[]=$r;
            }
        }
        catch(exception $e){}
        return $ret;
    }
    public static function row($sql){
        $ret=[];
        try{
            $q=self::$cn->query($sql);
            if($r=$q->fetch()){
                $ret=$r;
            }
        }
        catch(exception $e){}
        return $ret;
    }
    public static function get($sql,$key='data'){
        $ret=null;
        try{
            $q=self::$cn->query($sql);
            if($r=$q->fetch()){
                $ret=$r[$key];
            }
        }
        catch(exception $e){}
        return $ret;
    }
    public static function gets($sql,$key='data'){
        $ret=[];
        try{
            $q=self::$cn->query($sql);
            while($r=$q->fetch()){
                $ret[]=$r[$key];
            }
        }
        catch(exception $e){}
        return $ret;
    }
    public static function execute($sql){
        $ret='';
        try{
            $q=self::$cn->exec($sql);
            return self::$cn->lastInsertId();
        }
        catch(exception $e){}
        return $ret;
    }
    public static function prepare($sql,$array=[],$map=[]){
        $q=self::$cn->prepare($sql);
        $i=0;
        foreach($array as $row){
            foreach($map as $field){
                $i++;
                $q->bindValue($i,$row[$field]);
            }
            if($i){
                $q->execute();
                $i=0;
            }
        }
        
    }
}

/** Connection */