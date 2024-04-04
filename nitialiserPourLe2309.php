<?php
	$passagers = array ( 35,10,22,52,15,58,8,73);
	for ($i=0; $i< count($passagers); $i= $i+1){
		($passagers[$i]= 0 ) ;
		echo "Traversée ",$i+1," : ", $passagers[$i]," passagers. \n";
		
	}
?>

