<?php
$url = $_GET['url']; 
//$jsonText = file_get_contents('https://validator.w3.org/nu/?doc='.$url.'&out=json', false, $context);
//$jsonArray = json_decode($jsonText,True);
//echo $jsonArray;
$site = file_get_contents('https://html5.validator.nu/?doc='.$url.'&out=json');
print_r($site); 
?>
