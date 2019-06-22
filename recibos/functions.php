<?php

require_once('../config.php');
require_once(DBAPI);

$recibos = null;
$recibo = null;
$sRecibos = null;
$sR = null;

/**
 *  Listagem de recibos
 */
function index() {
	global $recibos;
	$recibos = find_all('recibos');
}
/**
 *  Cadastro de recibos
 */
function add() {

    if (!empty($_POST['recibo'])) {
      
      $today = 
        date_create('now', new DateTimeZone('America/Sao_Paulo'));
  
      $recibo = $_POST['recibo'];
      $recibo['data'] = $today->format("Y-m-d H:i:s");
      
      save('recibos', $recibo);
      header('location: index.php');
    }
  }

  function addI() {

    if (!empty($_POST['recibo'])) {
      
      $today = 
        date_create('now', new DateTimeZone('America/Sao_Paulo'));
  
      $recibo = $_POST['recibo'];
      $recibo['data'] = $today->format("Y-m-d H:i:s");
      
      save('recibos', $recibo);
      header('location: imprimir.php');
      header('location: index.php');
    }
  }

 
  function addS() {

    if (!empty($_POST['servicos_recibo'])) {
      
      $today = 
        date_create('now', new DateTimeZone('America/Sao_Paulo'));
  
      $sRecibo = $_POST['servicos_recibo'];
      // $recibo['data'] = $today->format("Y-m-d H:i:s");
      
      save('servicos_recibo', $sRrecibo);
      //header('location: add.php');
    }
  }
  function deleteS($id = null) {

    global $sRecibo;
    $sRecibo = remove('servicos_recibo', $id);
    
    //header('location: add.php');
    }
    function indexS() {
      global $sRecibos;
      $sRecibos = find_all('servicos_recibo');
    }
  
/**
 *	Atualizacao/Edicao de recibo
 */
function edit() {

    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  
    if (isset($_GET['id'])) {
  
      $id = $_GET['id'];
  
      if (isset($_POST['recibo'])) {
  
        $recibo = $_POST['recibo'];
        // $recibo['data'] = $now->format("Y-m-d H:i:s");
  
        update('recibos', $id, $recibo);
        header('location: index.php');
      } else {
  
        global $recibo;
        $recibo = find('recibos', $id);
      } 
    } else {
      header('location: index.php');
    }
  }

  /**
 *  Visualização de um recibo
 */
function view($id = null) {
  global $recibo;
  $recibo = find('recibos', $id);
}

  /**
 *  Exclusão de um recibo
 */
function delete($id = null) {

	global $recibo;
	$recibo = remove('recibos', $id);
  
	header('location: index.php');
  }