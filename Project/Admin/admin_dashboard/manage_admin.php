<?php
 include ('partials/menu.php'); 
 ?>

        <!--Menu Content Section Starts Here --> 
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>

                <br/>
                
                <?php
                  if(isset($_SESSION['add']))
                  {
                    echo $_SESSION['add'];//displaying  the session message
                    unset($_SESSION['add']);//removing the session message
                  }
                ?>
                <br/><br/>   
                 <!-- Button to Add Admin -->
                <a href='add_admin.php' class='btn-primary'>Add Admin</a>
                <br/><br/><br/>
                <table class='tbl-full'>
                    <tr>
                        <th>S.N.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr> 
                    <?php 
                    //Query to get all admin
                     $sql="SELECT * FROM tbl_admin";
                     //Execute the query
                     $res=mysqli_query($conn,$sql);
                     //Check whether the query is executed or not
                     if($res==TRUE)
                     {
                        //Count the rows to check whether we have data in database
                        $count=mysqli_num_rows($res);//Function to get all the rows in the database.

                         $sn=1;//Create a variable and assign the value
                        //Check the num of rows
                     if($count>0)
                     {
                     //We have data in database
                     while($rows=mysqli_fetch_assoc($res)){
                           //Using while loop to get all the data from database.
                           //and while loop will run as long as we have data in database.

                           //get individual datas
                           $id=$rows['id'];
                           $full_name=$rows['full_name'];
                           $username=$rows['username'];

                           //Display the values in the table
                             ?>
                             <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $full_name; ?></td>
                                <td><?php echo $username; ?></td>
                                <td>
                                    <a href='#' class='btn-secondary'>Update Admin</a>
                                    <a href='#' class='btn-danger'>Delete Admin</a></td>
                            </tr>
                             <?php
                     }
                     } 
                     else{
                //we do not have data in database
                     }        
                     }
                    ?>
                
                  
                   </table>
            </div>
        </div>
        <!--Menu Content Section  Ends Here -->    
<?php
 include ('partials/footer.php'); 
 ?>      
       