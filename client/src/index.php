<?php

$json=file_get_contents('http://api-service');
$content=array('status'=>true,'content'=>json_decode($json));
echo json_encode($content);

?>