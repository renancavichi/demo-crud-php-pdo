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
    $result['success']['message'] = 'Produto Deletado com Sucesso!';
    echo json_encode($result);
	} else {
		$result['success']['message'] = 'ID não cadastrado!';
    echo json_encode($result);
	}
} catch(PDOException $e) {
	echo "Erro ao deletar produto no Banco de Dados: " . $e->getMessage();
  echo '<a href="../">Home</a>';
}
?>