<?php
// Definir os dados para conexão no Banco MySQL
// Lembrar de ligar o MySQL no xampp (desenvolvimento local)
$servername = "localhost"; // host onde o Mysql está rodando
$database = "computer_store"; // Nome do banco de dados
$username = "root"; // Usuário de conexão do Mysql
$password = ""; // Senha do usuário de conexão

try { // Try vai ter executar todo o bloco de código se der erro vai rodar o catch
  // Criar um objeto (variável) de conexão com o banco
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // Liga a captura de erros para o Catch
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Conectado com Sucesso!";
} catch(PDOException $e) { // Se der erro ele vai criar um objeto de erro do PDO
  echo "Erro ao conectar no Banco de Dados: " . $e->getMessage();
}
?>