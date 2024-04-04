<?php
	$passagers = array ( 35,10,22,52,15,58,8,73);
	for ($i=0;count($passagers) > $i ; $i+=1){
		if ($passagers[$i]== 52 ) {
			echo "la traversée ",$i +1 ," a transporté ", $passagers[$i]," passagers. \n";
		}
	}
?>

