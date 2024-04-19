<?php
class SecurePage{
    public static function build($param){
        $id=$param['id']??'';
        $code=$param['code']??'';
        $delai=$param['delai']??''; // en minute

        $ret='';
        $timeout=0;
        //$token=$param['token']??'';
        //$tval=$param['tval']??'';
        //$tkey=$param['tkey']??'';
        if($id){
            $ret.=($ret)?'&':'';
            $token=sha1($id);
            $ret.="id=$id&token=$token";
        }
        if($code){
            $ret.=($ret)?'&':'';
            $token=sha1($code);
            $ret.="code=$code&token=$token";
        }
        if($delai){
            $ret.=($ret)?'&':'';
            $timeout=time()+$delai*60;
            $timekey=sha1($timeout);
            $ret.="t=$timeout&tk=$timekey";
        }
        return $ret;
    }
    public static function parse($param):string{
        $id=$param['id']??'';
        $code=$param['code']??'';
        $token=$param['token']??'';
        $tm=$param['t']??'';
        $tk=$param['tk']??'';
        $now=time();

        $ret='';
        if($id){
            if(sha1($id)!=$token){$ret='error';}
        }
        if($code){
            if(sha1($code)!=$token){$ret='error';}
        }
        if($tm){
            if(sha1($tm)!=$tk){$ret='error';}
            if($tm<$now && !$ret){$ret='expired';}
        }
        return $ret;
    } 
}