<?php 
	include_once 'DAO.php';

	$dao = new DAO();

	$id = 6;

	$nome = "Fábio";

	$sobrenome = "Jr";

	echo $dao->insert_dados($id, $nome, $sobrenome);
?>