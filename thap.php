funtion chuyen($n,$a,$b,$c){
	chuyen($n-1,$a,$c,$b);
	chuyen(1,$a,$b,$c);
	chuyen(n-1,$b,$a,$c);
}

echo chuyen(4,'A','B','C');