<?php
session_start();

if(isset($_SESSION['username']))
    {
        echo "hi ".$_SESSION['username']."<br>";
   
?>
        <a href='logout.php'> logout?</a>
<?php
    }


else
        echo "kaun hai be tu?";

?>