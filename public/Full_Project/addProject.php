<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="ISO-8859-1">
      <title>Project list</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>

<!-------------- navbar  -------------->
      <!-- <nav class="navbar navbar-light bg-light text-center ustify-content-between">
         <a class="navbar-brand"></a>
         <a class="navbar-brand form-inlin">Project</a>
      </nav>
       -->
      <a class="btn btn-info" href="index.php">See all project</a>
      <div id="index" class=" text-center">         
         <div class="row"> 
            <div class="offset-md-4 col-4" style="background-color: #1abc9c; border: 5px solid green; border-radius: 30px 0px">     
               <p>Add Project</p>
               <form method="POST">
                  <div class="form-group row">
                     <label class="col-4 col-form-label">Project Name</label>
                     <div class="col-8">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-4 col-form-label">Project Link</label>
                     <div class="col-8">
                        <input type="text" class="form-control" name="link" placeholder="Project Link" required>
                     </div>
                  </div>
                    <div class="form-group row">
                     <label class="col-4 col-form-label">User ID</label>
                     <div class="col-8">
                        <input type="text" class="form-control" name="userId" placeholder="ID" required>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-4 col-form-label">Password</label>
                     <div class="col-8">
                        <input type="text" class="form-control" name="password" placeholder="Password" required>
                     </div>
                  </div>
                  
                  <div class="form-group row">
                     <label class="col-4 col-form-label">Project type</label>
                     <div class="col-8">
                        <select name="projectType" class="form-control" required>
                           <option value="">Select Now</option>
                           <option value="0">Small Project</option>
                           <option value="1">Big Project</option>
                        </select>
                     </div>
                  </div>

                  <div class="form-group row">
                     <label class="col-4 col-form-label">Admin CSE Roll:</label>
                     <div class="col-8">
                        <input type="text" class="form-control" name="roll" placeholder="University ID" required>
                        <small class="">If you are not admin, please leave from this page</small>
                     </div>
                  </div>
                    
                  <div class="form-group row">
                     <div class="offset-4">
                        <button type="submit" name="submit" class="btn btn-primary">Add Now</button>
                     </div>
                  </div>
               </form>                             
            </div>
         </div>            
      </div>
      
      <div id="footer">
         <h2 class="text-center">Classroom Management System</h2>    
      </div>
   </body>  
</html>


<?php
   $conn =mysqli_connect('localhost','root','','project_all');  

   if(isset($_POST['submit']) && $_POST['name']=='00450') {

      $name=$_POST['name'];
      $link=$_POST['link'];
      $userId=$_POST['userId'];
      $password=$_POST['password'];
      $projectType=$_POST['projectType'];

      $sql="insert into project_list values (null, '$name', '$link', '$userId', '$password', '$projectType')";
      $result=mysqli_query($conn,$sql);

      if($result) {  
         $_SESSION['lecture']=true;
         header("Location: index.php");
      }else{
         echo "have problem";
      }
   }else{
              echo '<script type="text/javascript">
                alert("You are not admin. please leave from this page.");
                </script>';

}
?>