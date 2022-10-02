<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM customers WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO customers (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				
				echo "<script>alert('User Registration Completed.')</script>";
				
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				
			} else {
				echo "<script>alert('Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CUSTOMER REGISTRATION</title>
        <link rel="stylesheet" href="style.css">
		<script type="text/javascript">
          function validate()
          {
            var username=document.getElementById("username");
            var password=document.getElementById("email");
			var password=document.getElementById("password");
			var cpassword=document.getElementById("cpassword");

            if(username.value=="" || email.value=="" || password.value=="" || cpassword.value=="" )
            {
              alert("No Blank values allowed.");
              return false;
            }
            else{
                  true;
            }

}
          </script>
 </head>
<body background="background.jpg"style="background-repeat:no-repeat;background-size:100%100%">
<section>
    <form method="POST" action="#">
    <div class="form-container" >
        <h1>REGISTER</h1>

       <div class="input-group">
        <input type="text" class="input" id="username" pattern="[a-zA-Z0-9].{5,}" title="Must contain at least 5 or more alphanumeric characters" name="username" value="<?php echo $username; ?>" required>
  <label class="user-label">Username</label>
</div>
<br/>

<div class="input-group">
<input type="text" class="input" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
titel="Must contain" value="<?php echo $email; ?>" required>
  <label class="user-label">Email</label>
</div>
<br/>

<div class="input-group">
<input type="password" class="input" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?php echo $_POST['password']; ?>" required>
  <label class="user-label">Password</label>
</div>
<br/>

<div class="input-group">
<input type="password" class="input" name="cpassword" id="cpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  value="<?php echo $_POST['cpassword']; ?>" required>
  <label class="user-label">Confirm Password</label>
</div>
<br/>
            
<div class="control">
<input type="submit" name="submit" onclick="validate()" value="Register">
</div>
<br/>

<div>
<p>Have an account? <a href="login.php">Login Here</a>.</p>
</div>
<br/>




</form>
</div>
</section>
</body>
</html>

