<?php 
class Combo{
    private static $selection=false;
    private static function no_data($options=[]){
        $ret='';
        $selected=self::$selection?'':'selected';
        if(isset($options['no_data'])){
            $no_data_key=$options['no_data'][0]??'';
            $no_data_val=$options['no_data'][1]??'Selectionnez';
            $ret='<option '.$selected.' disabled value="'.$no_data_key.'">'.$no_data_val.'</option>';
        }
        self::$selection=false;
        return $ret;
    } 
    public static function array($items=[],$options=[]){
        $default=$options['default']??'<EMPTY>';
        $except=$options['except']??[];
        $selected='';
        $disabled='';
        $ret='';
        foreach($items as $item){
            if($default==$item){
                $selected='selected';
                self::$selection=true;
            }
            else{$selected='';}
            $disabled=in_array($item,$except)?'disabled':'';
            $ret.='<option '.$selected.' '.$disabled.' value="'.$item.'">'.$item.'</option>';
        }
        $ret=self::no_data($options).$ret;
        return $ret;
    }
    public static function list($items=[],$options=[]){
        $default=$options['default']??'<EMPTY>';
        $except=$options['except']??[];
        $i=$options['start']??0;
        $step=$options['step']??1;
        $selected='';
        $disabled='';
        $ret='';
        foreach($items as $item){
            if($default==$item){
                $selected='selected';
                self::$selection=true;
            }
            else{$selected='';}
            $disabled=in_array($i,$except)?'disabled':'';
            $ret.='<option '.$selected.' '.$disabled.' value="'.$i.'">'.$item.'</option>';
            $i+=$step;
        }
        $ret=self::no_data($options).$ret;
        return $ret;
    }
    public static function count($items=[],$options=[]){
        $default=$options['default']??'<EMPTY>';
        $except=$options['except']??[];
        $zerofill=$options['zerofill']??1;
        $step=$options['step']??1;
        $selected='';
        $disabled='';
        $begin=$items[0]??0;
        $end=$items[1]??0;
        if($begin<$end):
            for($i=$begin;$i<=$end;$i+=$step){
                if($i==$default){
                    $selected='selected';
                    self::$selection=true;
                }
                else{$selected='';}
                $item=sprintf("%0{$zerofill}d",$i);
                $disabled=in_array($item,$except)?'disabled':'';
                $ret.='<option '.$selected.' '.$disabled.' value="'.$item.'">'.$item.'</option>';
            }
        else:
            for($i=$begin;$i<=$end;$i-=$step){
                if($i==$default){
                    $selected='selected';
                    self::$selection=true;
                }
                else{$selected='';}
                $item=sprintf("%0{$zerofill}d",$i);
                $disabled=in_array($item,$except)?'disabled':'';
                $ret.='<option '.$selected.' '.$disabled.' value="'.$item.'">'.$item.'</option>';
            }
        endif;
        $ret=self::no_data($options).$ret;
        
        return $ret;
    }
    public static function object($items=[],$options=[]){
        $default=$options['default']??'<EMPTY>';  
        $except=$options['except']??[];
        $selected='';
        $disabled='';
        foreach($items as $key=>$val){
            if($default==$key){
                $selected='selected';
                self::$selection=true;
            }
            else{$selected='';}
            $disabled=in_array($key,$except)?'disabled':'';
            $ret.='<option '.$selected.' '.$disabled.' value="'.$key.'">'.$val.'</option>';            
        }
        $ret=self::no_data($options).$ret;
        return $ret;
    }
    public static function data($items=[],$options=[]){
        $default=$options['default']??'<EMPTY>';  
        $except=$options['except']??[];
        $selected='';  
        $disabled='';
        $key=$options['key']??'id';
        $val=$options['val']??'lib';
        foreach($items as $item){
            if($default==$item[$key]){
                $selected='selected';
                self::$selection=true;
            }
            else{$selected='';}
            $disabled=in_array($item[$key],$except)?'disabled':'';
            $ret.='<option '.$selected.' '.$disabled.' value="'.$item[$key].'">'.$item[$val].'</option>';
        }   
        $ret=self::no_data($options).$ret;
        return $ret;
    }
}