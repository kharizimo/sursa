<?php 
$length = 8;
$chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
          '0123456789@';

$str = '';
$max = strlen($chars) - 1;

for ($i=0; $i < $length; $i++)
  $str .= $chars[random_int(0, $max)];

echo $str;