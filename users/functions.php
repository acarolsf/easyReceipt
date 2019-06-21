<?php

require_once('../config.php');
require_once(DBAPI);

$users = null;
$user = null;

/**
 *  Listagem de users
 */
function index() {
	global $users;
	$users = find_all('users');
}
/**
 *  Cadastro de users
 */
function add() {

    if (!empty($_POST['user'])) {
      
      $today = 
        date_create('now', new DateTimeZone('America/Sao_Paulo'));
  
      $user = $_POST['user'];
      // $user['modified'] = $user['created'] = $today->format("Y-m-d H:i:s");
      
      save('users', $user);
      header('location: index.php');
    }
  }
  
/**
 *	Atualizacao/Edicao de user
 */
function edit() {

    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  
    if (isset($_GET['id'])) {
  
      $id = $_GET['id'];
  
      if (isset($_POST['user'])) {
  
        $user = $_POST['user'];
        // $user['modified'] = $now->format("Y-m-d H:i:s");
  
        update('users', $id, $user);
        header('location: index.php');
      } else {
  
        global $user;
        $user = find('users', $id);
      } 
    } else {
      header('location: index.php');
    }
  }

  /**
 *  Visualização de um user
 */
function view($id = null) {
  global $user;
  $user = find('users', $id);
}

  /**
 *  Exclusão de um user
 */
function delete($id = null) {

	global $user;
	$user = remove('users', $id);
  
	header('location: index.php');
  }