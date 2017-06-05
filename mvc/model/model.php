<?php 
	function busca_log() {

		//recebendo dados do form
		$email = $_POST['us_email'];
		$senha = $_POST['us_senha'];
		$busca = '';
		//busca os dados no banco de dados
		//e retorna $usuario(com dados do usuario) quando a busca for true
		//ou retorna false, quando a busca não é concluída com exito.
		/*...*/

		if ($busca != true){
			return false;
		} else {
			return $usuario;
		}
	}
?>
