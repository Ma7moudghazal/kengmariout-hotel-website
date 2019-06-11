<?php 
include('connection.php');
?>
<html>
<head>
<title>Registration Page</title>
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
  margin: 80px auto 100px;
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
.btn_reg{
    background-color: #1795d8;
    border: none;
    color: white;
    width: 100%;
    margin: 0 0 15px;
    padding: 15px;
    font-size: 16px;
    font-weight: bold;
}
.btn_reg:hover{
    background-color: #1795d8;
    color: white;
	box-shadow: 0 12px 10px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            
}
</style>  
</head>
    
<body background="images/mariot3.jpg" >
    
    <div class="register-page">
        <div class="form"> 
     <form class="register-form" action="#" method="post">        
          <input type="text" name="user" required="required" placeholder="Username" autofocus required>
          <input type="password" name="pass" required="required" placeholder="Password" required>
          <input type="text" name="fname" required="required" placeholder="First Name" autofocus required>
          <input type="text" name="lname" required="required" placeholder="Last Name" autofocus required>
          <input type="text" name="phone" required="required" placeholder="Phone Number" autofocus required>
          <button  class="btn_reg" name="btnRegister">Register Now</button>
          <b>Already have an account? </b><a href="Login.php">Login</a>
  </form>
    
  <?php
	if (isset($_POST['btnRegister'])) //check if there's data or not
		{
			$username = $_POST['user']; //take take from textbox and store it in a variable
			$password = $_POST['pass'];
            $firstName=$_POST['fname'];
            $lastName=$_POST['lname'];
            $phone=$_POST['phone'];
        
			$query 		= mysqli_query($conn, "INSERT INTO guests(username,password, firstName, lastName, phone) VALUES ('$username','$password','$firstName','$lastName','$phone')");		
			if ($query) 
				{	
                    echo "<strong>"; 
					echo '<span style="color:#28a745;text-align:center;">You are now a member!</span>';
					echo "</strong>";
				}
			else
			{
				die ("Something Wrong with the statment".mysqli_error($conn));
			}
		}
  ?>
    
    </div>
    </div>

</body>
</html>