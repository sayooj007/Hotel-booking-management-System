<<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username']))
{
    $_SESSION['username'] = $username;
    header("Location: ../Homepage/index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM customers WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: ../Homepage/index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CUSTOMER LOGIN</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
          function validate()
          {
            var password=document.getElementById("email");
			var password=document.getElementById("password");
            if(email.value=="" || password.value=="")
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
        <h1>CUSTOMER LOGIN</h1>
        <div class="input-group">
        <input type="text" class="input" id="email" name="email" value="<?php echo $email;?>" required>
     <label class="user-label">Email</label>
</div>
<br/>
<div class="input-group">
<input type="password" class="input" id="password" name="password" value="<?php echo $_POST['password']; ?>" required>
    <label class="user-label">Password</label>
</div>
<br/>
            
<div class="control">
<input type="submit" name="submit"  onclick="validate()" value="Login">
</div>
<br/>

<div>
<p>Don't have an account? <a href="register.php">Register Here</a>.</p>
</div>
<br/>




</form>
</div>
</section>
</body>
</html>