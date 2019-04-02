<?php
$t = date('d-m-y h:i:s',1546880400);
echo $t;
echo "<br>";
echo date('d-m-y',time());
echo "<br>";
echo strtotime(date('d-m-y',time()));
echo "<br>";
echo(date("Y", 1526880400));
?>
<form method="GET" action="get.php">
	<input type="text" name="ten">
	<input type="text" name="tuoi">
	<button type="submit">click</button>
</form>
<form method="POST" action="post.php">
	<input type="text" name="ten">
	<input type="text" name="tuoi">
	<button type="submit">click</button>
</form>
<?php
function testFunction($string = NULL){
	if ($string) {
		echo "Hello ".$string;
	}else{
		echo 'Fuck';
	}
}

testFunction();
echo strip_tags(strtolower("<b>Hello WORLD</b>."));

?>