<?php 
	include_once 'DAO.php';

	$dao = new DAO();
	$alunos = $dao->select_aluno();

	foreach ($alunos as $field => $value) {
		echo "$field = $value <br>";
	}

?>