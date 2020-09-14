<?php 

include_once __DIR__ . '/../partials/data/db.php';
header('Content-Type: application/json');
echo json_encode($collection);

?>