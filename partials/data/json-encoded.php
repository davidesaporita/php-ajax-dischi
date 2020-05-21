<?php 

include_once 'db.php';
header('Content-Type: application/json');
echo json_encode($collection);

?>