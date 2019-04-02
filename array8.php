<?php
$mang=[];

$mang = ['so1'=>'so mot'];
$mang += ['so2'=>'so hai'];
$mang += ['so3'=>'so ba'];
echo "mang";
var_dump($mang);
//----------------------------------
$mang4=[];

$mang4[] = ['so1'=>'so mot'];
$mang4[] = ['so2'=>'so hai'];
$mang4[] = ['so3'=>'so ba'];
echo "mang4";
var_dump($mang4);
//----------------------------------

$mang5=[];

$mang5 = ['so1'=>'so mot'];
$mang5 = ['so2'=>'so hai'];
$mang5 = ['so3'=>'so ba'];
echo "mang5";
var_dump($mang5);
//----------------------------------

echo "-----------------------------";
$man=[];

$man['so1'] = ['keyso1'=>'so mot'];
$man['so2'] = ['so2'=>'so hai'];
$man['so5'] = ['so3'=>'so ba',
'so4'=>'day la so 4'
];
var_dump($man);
echo $man['so5']['so4'];
echo "<br>";
echo "------------------------------------";

$mang2=null;

$mang2[] = 'so mot';
$mang2[] = 'so hai';
$mang2[] = 'so ba';
var_dump($mang2);

$mang3=[];

$mang3['so1'] = 'so mot';
$mang3['so2'] = 'so hai';
$mang3['so3'] = 'so ba';
var_dump($mang3);