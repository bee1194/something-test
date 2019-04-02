<?php 
function tenFunction($param,$clo){
	echo 'Echo ra: '.$clo($param);
}
$t = 2;
$t2= 1;
tenFunction($t2,function($biennaychinhlathangdangtruoc){
	return ($biennaychinhlathangdangtruoc==1) ? 'bang mot' : 'bang hai' ;
});

echo "<br>----------------------******------------------------<br>";

function speak($message){
  echo $message();
  echo "<br>";
}

speak(function(){
  return "Xin chào";
});
?>