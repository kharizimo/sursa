<?php
$a=[1,2,3,4,5,6,7] ;
$i=1;
$x=array_map(function($e,$c=0){
    $ret=$c;
    $c++;
    return $c;
},$a);
print_r($x);

exit()
?>