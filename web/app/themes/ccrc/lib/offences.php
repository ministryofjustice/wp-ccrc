<?php
include($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');  
echo json_encode(get_terms( "offence" , array("fields"=> "names"))); 
?>