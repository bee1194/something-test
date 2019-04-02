<?php
$array = [
    [
    "name" => "Nguyen Van Cuong",
    "email" => "TheHalfHeart@gmail.com",
    "website" => "freetuts.net" ],
    ["name" => "Tran Van Anh",
    "email" => "Le Anh@gmail.com",
    "website" => "beeoh.net"]
];
 
function json($array)
{
    return json_encode($array);
};

// echo json($array);
$t = [
    ['id'=>'1',
    'text'=>'<div><span class="mr-2">Phong 1</span><i class="fas fa-circle"></i>Available</div><div>Day la phong 1<div>',
    'title'=>'<span>Phong 1</span>'],
    ['id'=>'2',
    'text'=>'<div><span>Phong 2</span><i class="fas fa-circle"></i>Available</div><div>Day la phong 1<div>',
    'title'=>'<span>Phong 2</span>'],
    ['id'=>'7',
    'text'=>'<div><span>Phong 7</span><i class="fas fa-circle"></i>Available</div><div>Day la phong 1<div>',
    'title'=>'<span>Phong 7</span>']];
// echo json_encode($t);
$phong = [];
for ($i=1; $i < 10; $i++) { 
    array_push($phong, ['id'=>$i,'text'=>'<div><span class="mr-2">Phong'.$i.'</span><i class="fas fa-circle"></i>'.$i.'</div><div>Day la phong'.$i.'</div>',
'title'=>'<span>Phong' .$i.'</span>']);
}
echo json_encode($phong);
?>