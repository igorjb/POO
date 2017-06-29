<?php 
	include_once 'DAO.php';

	$dao = new DAO();
	$nome = 'Karla';

	$aluno = $dao->select_aluno_by_nome($nome);

	foreach ($aluno as $field => $value) {
		echo "$field = $value <br>";
	}
	
?>