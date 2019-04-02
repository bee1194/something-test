<?php
$danhsach = [1,2,3,4,6,10];
if (in_array(5, $danhsach)) {
	echo "Co so 10";
}else{
	echo "Eo co";
}
$options = [];
for ($i=0; $i < 10; $i++) { 
	$options += [$i => 'Noi dung thu'.$i];
}
?>
<br>
<select>
	<?php foreach ($options as $key => $value):?>
	<option value="<?= $key ?>"><?= $value ?></option>
	<?php endforeach; ?>
</select>