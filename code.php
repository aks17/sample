<?php



$y=file_get_contents("count.txt");
$y++;
echo $y."<br>";
$x=fopen("count.txt","w");
fwrite($x,"$y");



?>