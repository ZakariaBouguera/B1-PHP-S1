<?php
	$liaisons = array( "belle-ile-en-mer:15:8.3:Quiberon:Le Palais", "belle-ile-en-mer:24:9:Le Palais:Quiberon",
	"belle-ile-en-mer:16:8:Quiberon:Sauzon","belle-ile-en-mer:17:7.9:Sauzon:Quiberon","belle-ile-en-mer:19:23.7:Vannes:Le Palais",
	"belle-ile-en-mer:11:25.1:Le Palais:Vannes","Houat:25:8.8:Quiberon:Port St Gildas","Houat:30:8.8: Port St Gildas:Quiberon",
	"Ile de Groix:21:7.7:Lorient:Port-Tudy","Ile de Groix:22:7.4:Port-Tudy:Lorient");
	$codes = array();
	for ( $i = 0 ; count($liaisons)> $i ; $i+=1){
		$extraits= explode(":",$liaisons[$i]);
		$extraits[3] = strtoupper($extraits[3]);
		$extraits [4]= strtoupper($extraits[4]);
		$uneliaison = implode (":", $extraits);	
		array_push ($codes, $uneliaison);
	}
	
	print_r ($codes)
	
	
?>
