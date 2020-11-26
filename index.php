<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<link rel="stylesheet" href="assets\css\style.css">

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

<h1><a  href="index.php" style="position:absolute;top:70px;right:250px">SIGN IN</a></h1>
<h1><a  href="registration.php" style="position:absolute;top:70px;right:100px">SIGN UP</a></h1>
</head>

<?php session_start(); ?>
<body>
  
    <form action="login.php" method="post" class="justify-content-center ">
    <div
        class="text-center">
    <label>
        <input type="email" placeholder="Enter Login" name="login">
    </label>
    <p> 
    <label>
        <input type="password" placeholder="Enter Password"name="password">
    </label>
    </p>
    <input type="submit" value="SIGN IN">
    </div>
</form>
    <!--table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Name</th>
              <th>Name</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>00</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>00</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>00</td>
          </tr>
        </tbody>
      </table-->

</body>

</html>