<?php 

	//MAÍUSCULO
	$nome = "joao rangel";
	$nome = strtoupper($nome);
	echo $nome;
	echo "</br>";

	//MINÚSCULO
	$nome = strtolower($nome);
	echo $nome;
	echo "</br>";
	
	//PRIMEIRA LETRA DA PRIMEIRA PALAVRA EM MAÍSCULO
	echo ucfirst($nome);
	echo "</br>";

	//PRIMEIRA LETRA DE CADA PALAVRA EM MAÍSCULO
	echo ucwords($nome);
	 


 ?>