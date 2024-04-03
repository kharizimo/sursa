<?php 
class URLs{
    public static function get(){
        $first=true;
        $ret=$_GET['_c']??'';
        $ret.=isset($_GET['_a'])?'/'.$_GET['_a']:'';
        $vars='';
        foreach($_GET as $k=>$v){
            if($k=='_c') continue;
            $vars.=($first?'?':'&')."$k=$v";
            $first=false;
        }
        return $ret.$vars;
    }
}