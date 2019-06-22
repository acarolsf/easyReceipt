<?php

require_once('../../config.php');
require_once(DBAPI);

$servicos = null;
$servico = null;

/**
 *  Listagem de servicos
 */
function index() {
	global $servicos;
	$servicos = find_all('servicos');
}
/**
 *  Cadastro de servicos
 */
function add() {

    if (!empty($_POST['servico'])) {
      
      $today = 
        date_create('now', new DateTimeZone('America/Sao_Paulo'));
  
      $servico = $_POST['servico'];
      // $servico['modified'] = $servico['created'] = $today->format("Y-m-d H:i:s");
      
      save('servicos', $servico);
      header('location: index.php');
    }
  }
  
/**
 *	Atualizacao/Edicao de servico
 */
function edit() {

    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  
    if (isset($_GET['id'])) {
  
      $id = $_GET['id'];
  
      if (isset($_POST['servico'])) {
  
        $servico = $_POST['servico'];
        // $servico['modified'] = $now->format("Y-m-d H:i:s");
  
        update('servicos', $id, $servico);
        header('location: index.php');
      } else {
  
        global $servico;
        $servico = find('servicos', $id);
      } 
    } else {
      header('location: index.php');
    }
  }

  /**
 *  Visualização de um servico
 */
function view($id = null) {
  global $servico;
  $servico = find('servicos', $id);
}

  /**
 *  Exclusão de um servico
 */
function delete($id = null) {

	global $servico;
	$servico = remove('servicos', $id);
  
	header('location: index.php');
  }