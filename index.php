<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="assets\css\table.css">

<!doctype html>
<html lang="en">
<head>
  
<div class="header">
			<div class="container">
				<a href="index.php" class="logo">
          <img src="assets\img\logo.png" width="220" height="220"
            alt="" style="position:absolute;top:0px;left:50px"/>
          </a>
        </div>
   </div>

<h1><a  href="login_page.php" style="position:absolute;top:70px;right:250px">SIGN IN</a></h1>
<h1><a  href="registration.php" style="position:absolute;top:70px;right:100px">SIGN UP</a></h1>
</head>

<?php session_start(); ?>
<table class="table" >
    <thead>
        <th>#</th>
        <th>First Name</th> 
        <th>Last Name</th>
        <th>Email</th>
        <th>Role</th>
    </thead>
    <tbody>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "testdb";
        
            $conn = mysqli_connect($servername, $username, $password, $database);

            $queryUser = "SELECT * FROM users";
            $resultUser = mysqli_query($conn, $queryUser);

            if($resultUser){
                while($rowUser = mysqli_fetch_array($resultUser)){
                    echo "<tr>";
                        echo "<td>".$rowUser['id']."</td>";
                        echo "<td>".$rowUser['first_name']."</td>";
                        echo "<td>".$rowUser['last_name']."</td>";
                        echo "<td>".$rowUser['login']."</td>";

                        $queryRole = "SELECT title FROM roles WHERE id = '{$rowUser['role_id']}'";
                        $resultRole = mysqli_query($conn, $queryRole);
                        $rowRole = mysqli_fetch_array($resultRole);
                        echo "<td>".$rowRole['title']."</td>";
                    echo "</tr>";
                }
            }
        ?>
    </tbody> 
</table>
</body>

</html>