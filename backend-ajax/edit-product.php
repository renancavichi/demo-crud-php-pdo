<?php
$id = $_POST['id'];
$photo = $_POST['photo'];
$title = $_POST['title'];
$price = $_POST['price'];

require('helpers/conectaBD.php');

try {
	$stmt = $conn->prepare("UPDATE products
  SET photo = :photo, title = :title, price = :price
  WHERE id = :id;
  ");
  $stmt->bindParam(':id', $id);
	$stmt->bindParam(':photo', $photo);
	$stmt->bindParam(':title', $title);
	$stmt->bindParam(':price', $price);
	$stmt->execute();
  if($stmt->rowCount()){
    $result['success']['message'] = 'Produto Editado com Sucesso!';
    echo json_encode($result);
	} else {
		$result['success']['message'] = 'ID não cadastrado!';
    echo json_encode($result);
	}
} catch(PDOException $e) {
	echo "Erro ao editar produto no Banco de Dados: " . $e->getMessage();
  echo '<a href="../">Home</a>';
}
?>