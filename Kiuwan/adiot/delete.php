<?php
include('../init.php');
$table = $_GET['table'];
$val = array();
$val[]   = $_POST['id'];
$query  = $con->prepare("DELETE FROM $table  WHERE id = ?;");
$query -> execute ( $val );
?>