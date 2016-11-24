<?php
  include '../libs/Smarty.class.php';
  include 'db.php';
  $smarty = new Smarty();
  try {
      $conexionValida = new PDO('mysql:host=localhost;charset=utf8', 'root', '');
  } catch (PDOException $e) {
      $conexionValida = false;
  }
if(isset($_REQUEST['email'])&&isset($_REQUEST['pass'])){
    if($conexionValida){
      $conexionValida->exec('CREATE DATABASE IF NOT EXISTS cuarteto');
      $conexionValida->exec('USE cuarteto');
      $QUERIES=DataBase::queries();
      foreach ($QUERIES as $query) {
        $conexionValida->exec($query);
      }
      $usuario = $conexionValida->prepare("INSERT INTO usuario (email,password,tipo) VALUES(?,?,1)");
      $password=  $hash = password_hash($_REQUEST['pass'], PASSWORD_DEFAULT);
      $usuario->execute(array($_REQUEST['email'],$password));
      header('Location: ../index.php');
      die();
    }else{
      $smarty->display("formulario.tpl");
    }
  }else {
    $smarty->display("formulario.tpl");
  }



 ?>
