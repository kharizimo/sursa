<?php 
class SQLs{
    public static function addslashes_array($array){
        $ret=[];
        foreach($array as $k=>$v){
            $ret[$k]=addslashes($v);
        }
        return $ret;
    }
    public static function addslashes_list($array){
        $ret=[];
        foreach($array as $a){
            $ret[$a]=addslashes($GLOBALS[$a]);
        }
        return $ret;
    }
    public static function insert($table,$item=[],$model=[]){
        $first=true;$k=$v='';
        foreach($model as $m){
            if(isset($item[$m])){
                $m_=addslashes($item[$m]);
                $k.=($first?'':',').$m;
                $v.=($first?'':',')."'{$m_}'";
            }
            $first=false;
        }
        return "insert into $table($k) values($v)";
    }
    public static function update($table,$item=[],$model=[]){
        $first=true;$k=$v='';
        foreach($model as $m){
            if(isset($item[$m])){
                $m_=addslashes($item[$m]);
                $v.=($first?'':',')."$m='$m_'";
            }
            $first=false;
        }
        return "update $table set $v where id={$item['id']}";
    }
}