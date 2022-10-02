<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $database = "bluediamond";
    $error="";
    $success="";
    $conn = mysqli_connect($servername,$username, $password, $database);

    if(isset($_POST["submit"])){
        $adname=$_POST["username"];
        $adpass=$_POST["password"];

        $sql=mysqli_query($conn, "select * from adminlogin where username='$adname' and password='$adpass'");
        $msql=mysqli_fetch_assoc($sql);
        if($msql){
               //redirect to admin dashboard on successful login
                 header("Location: http://localhost/Project/Admin/admin_dashboard/admin_dashboard_index.php"); 
        }
        else{
            $error="Invalid Authentication!!!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMIN</title>
        <link rel="stylesheet" href="adminstyle.css">
 </head>
<body background="backgroundadmin.jpeg"style="background-repeat:no-repeat;background-size:100%100%">
<section>
    <form method="POST" action="#">
    <div class="form-container" >
        <h1>ADMIN LOGIN</h1>
        <center><p><?php echo $error; ?></p><br/></center>
        <div class="input-group">
  <input type="text" name="username" class="input" id="username" required>
  <label class="user-label">User name</label>
</div>
<br/>
<div class="input-group">
  <input type="password" name="password" class="input" id="password" required>
  <label class="user-label">Password</label>
</div>
<br/>
            <div class="control">
                <input type="submit" name="submit" value="Login">
 
              </div>
</form>
</div>
</section>
</body>
</html>