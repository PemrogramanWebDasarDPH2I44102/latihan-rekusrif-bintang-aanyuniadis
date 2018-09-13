<?php
echo " Rekursif Piramida Bintang <br>";
$tampung= 5;
function rekursif($a,$b){
	if ($a >0){
		if($b >0){
			echo "*";
			$b--;
			rekursif($a, $b);
		}else{
			echo "<br>";
			$a--;
			rekursif($a,$a);
		}
	}
}
rekursif($tampung,$tampung);
echo "<br>";
echo "<br>";
echo "*/=====================================================*/<br>";

echo " Rekursif Piramida Angka <br>";
$print= 5;
function number($x,$y,$print){
	if ($x <= $print){
		if($y <= $x){
			echo "$y";
			$y++;
			number($x, $y, $print);
		}else{
			echo "<br>";
			$x++;
			number($x,1,$print);
		}
	}
}
number(1,1,$print);

?>
