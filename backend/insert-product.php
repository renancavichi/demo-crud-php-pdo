<?php
// Recebe os dados enviados pelo formulário pelo método POST
// IMPORTANTE o valor entre colchetes $_POST['photo'] o valor 'photo' deve ser o mesmo do name="photo" no input no formulário
// Confirmar se o formulário está enviando o method="POST"
$photo = $_POST['photo'];
$title = $_POST['title'];
$price = $_POST['price'];
// echo $photo.'<br>';
// echo $title.'<br>';
// echo $price.'<br>';

// Cria a conexão com banco ($conn)
require('helpers/conectaBD.php');

try {
	$stmt = $conn->prepare("INSERT INTO products (photo, title, price) VALUES (:photo, :title, :price)");
	$stmt->bindParam(':photo', $photo);
	$stmt->bindParam(':title', $title);
	$stmt->bindParam(':price', $price);
	$stmt->execute();
	echo "Produto Cadastrado com Sucesso!<br>";
  echo '<a href="../">Home</a>';
} catch(PDOException $e) {
	echo "Erro ao inserir produto no Banco de Dados: " . $e->getMessage();
}
?>