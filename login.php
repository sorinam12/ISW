<?php
   session_id("mainID");
   session_start();

   function check_existence($user, $pass)
	{
      $conn=mysqli_connect("localhost", "root","", "userregistration") or die(mysqli_error($myConnection));
      $sql_read = "SELECT * FROM usertable where name ='$user' and password='$pass' ";
      $result = mysqli_query($conn, $sql_read);
      if(! $result )
            {
              die('Could not read data: ' . mysqli_error($conn));
            }
      return mysqli_num_rows($result);
   }
?>

<html>
   
<head>
	<title> login and registeration form design </title>
    <link rel= "stylesheet" type="text/css" href="styleLogin.css">
	<link rel= "stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

   <body>
<div class="container">
<div class="login-box">
<div class="square" style="--i:0";></div>
   <div class="square" style="--i:1";></div>
   <div class="square" style="--i:2";></div>
   <div class="square" style="--i:3";></div>
   <div class="square" style="--i:4";></div>
   <div class="square" style="--i:5";></div>
   <div class="square" style="--i:6";></div>
<div class="register-form">

		<div class="row">
		<div class="col-md-6 login-left">
      
      <h2>Login Here</h2> 
         
         <?php
           
           
            $msg = '';
              
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
                  $user = $_POST['username'];
                  $pass = $_POST['password'];
               if (check_existence($user,$pass)==1) {
				      $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = $user;
                  header('Location: cinema.php');
               }else {
                  echo 'Wrong username or password';
               }
            }
         ?>
      
      
      
      
         <form  method = "post">
	<div class= "form-group">
		<label> Username </label>
            <input type = "text" name = "username" class= "form-control">
	</div>
	<div class= "form-group">
		<label> Password </label>
            <input type = "password" name = "password" class= "form-control" required>
	</div>
            <button type = "submit" name = "login" class="btn">Login</button>
         </form>
	</div> 





<div class = "col-md-6 login-right">
	<h2> Register Here</h2>
	<form action= "registration.php" method="post">
	<div class ="form-group">
	<label> Username </label>
	<input type ="text" name="user" class="form-control" required>
	</div>
	<div class= "form-group">
	<label> Password</label>
	<input type= "password" name="password" class="form-control" required>
	</div>
	<button type ="submit" class="btn"> Register </button>
	
	</form>
	</div>
         	</div> 
		</div> 
      </div> 
      </div>
   </body>
</html>