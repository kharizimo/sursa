<?php
class Db{
    private static $cn=null;
    public static function connect($db){
        $db->type=$db->type??'MYSQL';
        $db->charset=$db->charset??'utf8';
        $db->options=$db->options??[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ];
        switch($db->type):
            case 'MYSQL':
                $db->dns="mysql:host=$db->host;dbname=$db->name;charset=$db->charset";
                try{self::$cn=new PDO($db->dns,$db->user,$db->pwd,$db->options);}
                catch(Exception $e){echo$e->getMessage();exit();}
                break;
            case 'SQLITE':
                $db->file=$db->file??'data.db';
                try{self::$cn=new PDO("sqlite:$db->file");}
                catch(Exception $e){echo$e->getMessage();exit();}
        endswitch;
    }
    public static function rows($sql){
        $ret=[];
        try{
            $q=self::$cn->query($sql);
            while($r=$q->fetch()){
                $ret[]=$r;
            }
        }
        catch(exception $e){echo $e->getMessage();}
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
        catch(exception $e){echo $e->getMessage();}
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
        catch(exception $e){echo $e->getMessage();}
        return $ret;
    }
    public static function gets($sql,$key='data'){
        $ret=null;
        try{
            $q=self::$cn->query($sql);
            while($r=$q->fetch()){
                $ret[]=$r[$key];
            }
        }
        catch(exception $e){echo $e->getMessage();}
        return $ret;
    }
    public static function execute($sql){
        $ret='';
        try{
            $q=self::$cn->exec($sql);
            return self::$cn->lastInsertId();
        }
        catch(exception $e){echo $e->getMessage();}
        return $ret;
    }
    public static function prepare($sql,$array=[],$map=[]){
        try{
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
        catch(exception $e){echo $e->getMessage();}
    }
}