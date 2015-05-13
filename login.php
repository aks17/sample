<?php
session_start();
$name=$_POST["username"];
$pass=$_POST["password"];

$x=mysql_connect("localhost","root","") or die("x");
$x=mysql_select_db("newdatabase") or die("x");;

$query=mysql_query("SELECT * FROM user WHERE username='$name'");

$row=mysql_num_rows($query);
echo "$row <br>";


$data=mysql_fetch_assoc($query);

if($name==$data['username'])
	{
		//echo "user correct <br>";
        if($pass==$data['password'])
	      {
	      	//echo "password correct <br>";
	      	$_SESSION['username']=$name;
	      	echo $_SESSION['username'];
?>

	      	<a href='member.php'>click here </a>
<?php



	      }
        else 
	      echo "wrong password <br>";
	}

else 
	echo "wrong user name <br>";



?>
