<!doctype html>
<html lang="en">
<head> 
<div class="header">
			<div class="container">
				<a href="index.php" class="logo">
                    <img src="assets\img\logo.png" width="220" height="220" 
                    alt="" style="position:absolute;top:0px;left:0px"/>
                </a>
            </div>
</div>
</head>
<body>
<?php
session_start();
require_once 'connection.php'; 
	if (count($_POST)>0) {  
        $sq = "SELECT * FROM users WHERE login='$_POST[login]' and password='$_POST[password]'";
        $res = mysqli_query ($conn, $sq);
		$row = mysqli_fetch_array($res);
        
        if (is_array($row)){
            $_SESSION['id'] = $row['id'];
            $_SESSION['login'] = $row['login'];
        } 
        else {
            echo '<br>Incorrect!<br>';
        }
    }
?>
<p>Link for registration:
<a href="registration.php">Registration</a></p>
</body>
</html>