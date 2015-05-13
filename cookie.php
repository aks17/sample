<?php


$exp=time()+86400;
//setcookie("cookie_1","username",$exp);
//setcookie("cookie_2","password",$exp);
//$exp-=86401;
//setcookie("cookie_2","",$exp);
//echo $_COOKIE["cookie_1"]."<br>";
//echo $_COOKIE["cookie_2"]."<br>";

setcookie("cookie_5","password",$exp);
setcookie("colour","red",$exp,'/');
echo $_COOKIE["colour"];
/*color is red*/
/* your codes and functions*/
setcookie("color","blue");
echo $_COOKIE["color"];
/*new color is blue*/

print_r($_COOKIE);

?>
