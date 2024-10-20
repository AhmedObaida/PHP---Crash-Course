<?php

echo"hello world";
echo nl2br("\n");
$arr = ['html', 'css', 'js', 'php', 'laravel'=>'50' ,70=>6 ];
echo $arr[0] , $arr[1] , $arr[2] , $arr['laravel'] , $arr[70];
$obj = new stdClass();
echo nl2br("\n");

var_dump($obj);

function calc($val1 , $val2):string{
    return $val1 + $val2;
}

$calc = calc(10, 20);
var_dump($calc);



function concatenate($transform, ...$strings) {
    $string = '';
    foreach($strings as $piece) {
      $string .= $piece;
    }
    return($transform($string));
  }
  
  echo concatenate("strtoupper", "I'm ", 20 + 2, " years", " old.");















  
?>
