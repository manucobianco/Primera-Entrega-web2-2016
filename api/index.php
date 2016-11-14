<?php
require_once 'comentarios_api.php';

$comentariosAPI = new comentariosApi($_REQUEST['request']);
echo $comentariosAPI->processAPI();
?>
