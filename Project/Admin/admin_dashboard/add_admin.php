<?php
 include ('partials/menu.php'); 
 ?>
 <div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br/>
        <?php 
         if(isset($_SESSION['add'])){//checking whether the session is set or not
            echo $_SESSION['add'];//Display the session message if sett 
            unset($_SESSION['add']);//remove the session message
         }
        ?>
        <form action="" method="POST">
            <br/><br/>
              <table class="tbl-30">
                 <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                 </tr>

                 <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Your Username"></td>
                 </tr>

                 <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Your Password"></td>
                 </tr>

                 <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary"> 
                    </td>
                 </tr>

              </table>
        </form>
    </div>
</div>


<?php
 include ('partials/footer.php'); 
 ?>  

<?php
  //Process the value from form and save it in database. 

  //Check whether the submit button is clicked or not.

  if(isset($_POST['submit']))
  {
    //button clicked.
    //echo "Button clicked";

    //1.Get the data from the form.
    $full_name=$_POST['full_name'];  
    $username=$_POST['username']; 
    $password=md5($_POST['password']) ;  //Password encryption with MD5

    //2.SQL query to save data into database.
    $sql="INSERT INTO tbl_admin SET
     full_name='$full_name',
     username='$username',
     password='$password'
     "; 
     
     //this code is the constants.php file inside config folder and that is applied to all the pages (Connection code)

    //3.Execute the query and save data into the database.
     $res=mysqli_query($conn,$sql) or die(mysqli_error());

    //Check whether the (Query is Exexuted) data is inserted or not.And display appropriate message.
    if($res==TRUE){
        //Data inserted
        // echo "Data inserted";
        //Create a session a variable to display message.
        $_SESSION['add']="Admin Added Successfully";
        //redirect page to manage admin page.
        header("Location:./manage_admin.php"); 
    }
    else{
        //Data not inserted
        // echo "Data not inserted";
        //Create a session a variable to display message.
        $_SESSION['add']="Failed to Add Admin";
        //redirect page to manage admin page.
        header("Location:./manage_admin.php"); 
    }
}
  
 ?>  