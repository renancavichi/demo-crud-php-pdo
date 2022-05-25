<?php
if(!isset($_GET['id'])){
		die;
}
$id = $_GET['id'];

require('helpers/conectaBD.php');
try {
	$stmt = $conn->prepare("DELETE from products WHERE id = :id;");
	$stmt->bindParam(':id', $id);
	$stmt->execute();
	if($stmt->rowCount()){
		//echo "Produto removido com sucesso!<br>";
    //echo '<a href="../">Home</a>';
    header('Location: ../');
	} else{
		echo "Id do Produto não encontrado!";
    echo '<a href="../">Home</a>';
	}
} catch(PDOException $e) {
	echo "Erro ao deletar produto no Banco de Dados: " . $e->getMessage();
  echo '<a href="../">Home</a>';
}
?>