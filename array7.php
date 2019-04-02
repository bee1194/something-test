<?php
    $items['key-1'] = [
        'template' => 'template-key-1',
        'variables' => [
            'announcements' => 'announcements-key-1',
            'config' => 'config',
        ]
    ];

    $items['announcement_list'] = [
        'template' => 'announcement-list',
        'variables' => [
            'announcements' => 'announcements-list'
        ]
    ];

    $items['them_vao'] = [
    	'them_vao_day'=>'day them vao',
    ];
var_dump($items);
echo $items['key-1']['variables']['announcements'];
echo "<br><br>";
$content['row'] = [
            '#type'       => 'container',
            '#attributes' => ['class' => 'row']
        ];

$content['row']['title-col'] = [
            '#type'       => 'container',
            '#attributes' => ['class' => 'col-md-9']
        ];

$content['row']['filter-col'] = [
            '#type'       => 'container',
            '#attributes' => ['class' => 'col-md-3']
        ];

$content['row']['title-col']['page-title'] = [
            '#markup' =>'Latest News'
        ];

var_dump($content);

$array = [];
for ($i=0; $i < 10; $i++) { 
    $array[$i] = [
        'test'.$i=>'test-con',
        'test'.($i+1) =>['hello'=>'May cung'],
    ];
}
var_dump($array);
echo ($array[2]['test2']);