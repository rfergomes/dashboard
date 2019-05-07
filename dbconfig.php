<?php
/**
 * PDO - Conexão com a base de dados - Aula 28
 * http://www.todoespacoonline.com/w/2014/07/23/pdo-em-php/
 */
 
// Variáveis da conexão
$base_dados  = 'u604974123_dashb';
$usuario_bd  = 'u604974123_dashb';
$senha_bd    = 'dashboard';
$host_db     = 'https://auth-db165.weblink.com.br/';
$charset_db  = 'UTF8';
$conexao_pdo = null;

// Concatenação das variáveis para detalhes da classe PDO
$detalhes_pdo  = 'mysql:host=' . $host_db . ';';
$detalhes_pdo .= 'dbname='. $base_dados . ';';
$detalhes_pdo .= 'charset=' . $charset_db . ';';

// Tenta conectar
try {
    // Cria a conexão PDO com a base de dados
    $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);
} catch (PDOException $e) {
    // Se der algo errado, mostra o erro PDO
    print "Erro: " . $e->getMessage() . "<br/>";
   
    // Mata o script
    die();
}
