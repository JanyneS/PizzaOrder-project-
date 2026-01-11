<?php

  session_start();
  $user = 'root';
  $pass = '';
  $db = 'pizzaria';
  $host = 'localhost';

 
// O bloco try tenta executar um código que pode gerar erro
   try {
     $conn = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Define o modo de erro do PDO para EXCEPTION, isso faz o PHP lançar erros caso algo dê errado
     $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Desativa a emulação de prepared statements, isso torna as consultas mais seguras contra SQL Injection



// Se ocorrer algum erro no try, o código cai aqui
   } catch (PDOException $e) {
     print 'Erro ao conectar com o banco de dados: ' . $e->getMessage() . '<br/>';  // Exibe a mensagem de erro retornada pelo PDO
     die();   // Encerra a execução do script 
   }
 










?>