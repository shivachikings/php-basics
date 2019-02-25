<!--\n-new line-->
<?php
//files.php
$data="\ntony mark";

file_put_contents("names.txt", $data, FILE_APPEND);

$data2= file_get_contents("names.txt");
echo $data2;