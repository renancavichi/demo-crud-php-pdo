<?php 
require('helpers/conectaBD.php');
try{
  $stmt = $conn->prepare("SELECT * FROM products;");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($result);
} catch(PDOException $e) {
  $result['error']['message'] = "Erro ao buscar produtos no Banco de Dados: " . $e->getMessage();
  http_response_code(500); //php muda o status de resposta da requisição
  echo json_encode($result);
}
?>