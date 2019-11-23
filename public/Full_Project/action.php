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

     <h3>All Project List [<a href="addProject.php" class="btn">Add Project</a>]</h3>	
     <hr>

         <div id="index" class=" text-center">         
            <div class="row"> 
               <div class="offset-md-2 col-8">  

               <table class="table table-striped table-dark">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Link</th>
                        <th scope="col">User Id</th>
                        <th scope="col">Password</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                        $conn =mysqli_connect('localhost','root','','project_all'); 
                        $sql="select*from project_list"; 
                        $result=mysqli_query($conn,$sql);
                        $i=0;
                     ?>

                     <?php while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                           <td><?= $i=$i+1; ?></td>
                           <td><?= $row['name'] ?></td>
                           <td> <a href="<?= $row['link'] ?>" target="_blank"><?= $row['link'] ?></a></td>
                           <td><?= $row['userId'] ?></td>
                           <td><?= $row['password'] ?></td>
                        </tr>
                     <?php } ?>
                 </tbody>
               </table>   
               </div>
            </div>
         </div>
	</body>	
</html>