<?php 
	//inclui o model
	include_once '../model/model.php';

	//invoca a função de busca de dados
	$log = busca_log();

	//testa o resultado da função acima 
	if ($log === false){
		//inclui mensagem de erro se os dados não forem encontrados
		include_once 'error.html';
	} else {
		//cria sessão com os dados do usuário se os dados forem encontrados
		session_start();
		$_SESSION['usuario'] = $log;

		//redireciona para area restrita
		header("location: usuario.php");

	}
?>