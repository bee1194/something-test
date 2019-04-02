<?php
$array = [];
$sub; 
for ($i=0; $i < 10; $i++) {
	array_push($array,array('ten'=>'Tao ten'.$i,
						'ho'=>'test'.$i));
}
echo json_encode($array);