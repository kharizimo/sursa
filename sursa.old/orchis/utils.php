<?php
/*
powered by Trésor Sukami
Sépia Technologies 
version 1.2
*/
class Utils{
    public static function combobox($param=[]){
        $ret='';
        $default=$param['default']??'<NULL>';
        $id=$param['id']??'id';
        $lib=$param['lib']??'lib';
        $no_data=$param['no_data']??'';
        $zero=$param['zero']??0;

        $ret.=($no_data)?'<option  value="" disabled '.($default=='<NULL>'?'selected':'').'>'.$no_data.'</option>':'';
        foreach($param['data']??[] as $item):
            $selected=$default==$item[$id]?'selected="selected"':'';
            $ret.= '<option '.$selected.' value="'.$item[$id].'">'.$item[$lib].'</option>';
        endforeach;
        foreach($param['array']??[] as $item):
            $selected=$default==$item?'selected="selected"':'';
            $ret.= '<option '.$selected.' value="'.$item.'">'.$item.'</option>';
        endforeach;
        foreach($param['list']??[] as $key=>$value):
            $selected=$default==$key?'selected="selected"':'';
            $ret.= '<option '.$selected.' value="'.$key.'">'.$value.'</option>';
        endforeach;
        if(isset($param['count'])){
            for($i=$param['count'][0];$i<=$param['count'][1];$i++){
                $i=$zero?sprintf("%0{$zero}s",$i):$i;
                $selected=$default==$i?'selected="selected"':'';
                $ret.= '<option '.$selected.' value="'.$i.'">'.$i.'</option>';
            }
        }
        return $ret;
    }
    public static function addslashes_array($array){
        $ret=[];
        foreach($array as $k=>$v){
            $ret[$k]=addslashes($v);
        }
        return $ret;
    }
    public static function build_var_sql($statement,$array=[],$fields=[]){
        $ret='';extract($array);
        if($statement=='select'){
            $clause='';
            foreach($fields as $item){
                if(isset($$item)){
                    $clause.=" and $item='{$$item}'";
                }
            }
            $ret=['clause'=>$clause];
        }
        if($statement=='insert'){
            $key='';$value='';
            foreach($fields as $item){
                if(isset($$item)){
                    $key.=",$item";
                    $$item=trim(addslashes($$item));
                    $value.=",'{$$item}'";
                }
            }
            $ret=['key'=>$key,'value'=>$value];
        }
        if($statement=='update'){
            $field='';
            foreach($fields as $item){
                if(isset($$item)){
                    $$item=trim(addslashes($$item));
                    $field.=",$item='{$$item}'";
                }
            }
            $ret=['field'=>$field];
        }
        return $ret;
    }
    public static function generate_password(){
        $length = 8;
        $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
                    '0123456789@';
      
        $str = '';
        $max = strlen($chars) - 1;
      
        for ($i=0; $i < $length; $i++)
          $str .= $chars[random_int(0, $max)];
      
        return $str;
    }

}