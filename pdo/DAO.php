<?php
	require_once 'Connect.php';

	class DAO extends Connect{

		public function insert_dados($id, $nome, $sobrenome) {
			try {
				//criando o objeto pdo
				$pdo = parent::getInstance();

				//criando a query
				$query = "INSERT INTO alunos.dados (id, nome, sobrenome)";
				$query .= "VALUES (:id, :nome, :sobrenome)";

				$statement = $pdo->prepare($query);

				$id = filter_var($id);
				$nome = filter_var($nome);
				$sobrenome = filter_var($sobrenome);

				$statement->bindValue(":id", $id, PDO::PARAM_STR);
				$statement->bindValue(":nome", $nome, PDO::PARAM_STR);
				$statement->bindValue(":sobrenome", $sobrenome, PDO::PARAM_STR);

				//executando a query já com seus valores
				if ($statement->execute()) {
					echo "Registro inserido com sucesso. ";
				}
				
				return false;

			} catch (PDOException $e) {
				die("ERRO: Não foi possível executar $query. " . $e->getMessage());
			}
			// Close connection
			unset($pdo);
		}

		public function select_aluno() {

			//criando o objeto pdo...
			$pdo = parent::getInstance();
			$query = "SELECT * FROM alunos.dados";

			//preparando consulta 
			$statement = $pdo->prepare($query);

			//executando consulta
			$statement->execute();

			//preparando resultado
			$data = array();

			if ($statement->rowCount())
			{
				while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {

					$data[] = utf8_decode($result['nome']) . " " . utf8_decode($result['sobrenome']);

				}

				return $data;
			}

			//caso não entre no if
			return false;
		}
	} 
?>