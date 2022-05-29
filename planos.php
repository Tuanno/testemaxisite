<?php 
	$con = new PDO('mysql:host=192.168.1.18;dbname=teste_engenharia','root','poi123');
	if(!$con) die('Erro ao conectar ao banco de dados');


	$queryPlanos = $con->prepare("SELECT * FROM plano ORDER BY ordem,nome ASC");
    $queryPlanos->execute();
    $planos = $queryPlanos -> fetchAll(PDO::FETCH_ASSOC);

    foreach ($planos as $plano) {
    	echo '<br>'.$plano['ordem'].' - '.$plano['nome'];
    }