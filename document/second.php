<?php


if(empty($_POST["username"]) || empty($_POST["password"]))
{
	echo "invalid username or password";
}
else
{
	$conn = mysqli_connect("localhost","root","","dac");
	$result = mysqli_query($conn,"SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
        
        echo "Invalid Username or Password!";
        
    }
     else 
    {
        session_start();
       $_SESSION["username"] = $_POST["username"];
       header("location: third.php");
        
	}
}

?>
