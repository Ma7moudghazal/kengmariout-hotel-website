<?php session_start(); ?>
<?php include('connection.php');
?>
<html>
<head>
<title>Login Page</title>
<style>
    body{
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: center;
          opacity: 0.91;
    }
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.submit{
    background-color: #1795d8;
    border: none;
    color: white;
    width: 100%;
    margin: 0 0 15px;
    padding: 15px;
    font-size: 16px;
    font-weight: bold;
}
.submit:hover{
    background-color: #1795d8;
    color: white;
	box-shadow: 0 12px 10px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            
}
</style>
</head>
    
<body background="images/mariot3.jpg" >
    
    <div class="login-page">
        <div class="form"> 
     <form class="login-form" action="#" method="post">
          
          <input type="text" name="user" required="required" placeholder="Username" autofocus required>
          <input type="password" name="pass" required="required" placeholder="Password" required>
        
          <div>
              <button class="submit" name="btnlogin">Login</button>
          </div>
           
      
  </form>
    
  <?php
	if (isset($_POST['btnlogin'])) //check if there's data or not
		{
			$username = $_POST['user']; //take take from textbox and store it in a variable
			$password = $_POST['pass'];
			
			$query 		= mysqli_query($conn, "SELECT * FROM guests WHERE password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query); //get a row of data
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['g_ID']=$row['g_ID'];
					header('location:home.php');  //redirect you to another page
					
				}
			else
				{
					echo '<span style="color:#dc3545;text-align:center;">Invalid Username or Password!</span>';
				}
		}
  ?>
    <p>Not a member? <a href="registration.php">Sign up now</a></p>
    </div>
    </div>

</body>
</html>