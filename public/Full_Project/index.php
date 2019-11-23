<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="ISO-8859-1">
		<title>Favorite Songs</title>
      <!-- <meta http-equiv="refresh" content="5" /> -->
      <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css
">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">


<script type="text/javascript">
   $(document).ready( function () {
    $('#search').DataTable();
} );
</script>
   </head>
	<body>

<!-------------- navbar  --------------> 

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
               <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
               </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
         </ul>
         <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>
      </div>
   </nav>


   <section id="playlist">
      <div class="row">
         <div class="ffset-lg-4 col-lg-4 col-md-6 col-sm-12">

            <div class="card" style="">
               <div class="row">
                  <div class="col .bg-info">
                     <img src="images/sherine.jpg" class="card-img-top" alt="...">                     
                  </div>
                  <div class="col bg-info">
                     <h1>Sherine</h1>
                     <p>Age: 36</p>
                     <p>Total Songs: 12</p>
                  </div>                  
               </div>

               <div class="card-body bg-light">
                  <h5 class="card-title">Best Song List</h5>
               </div>

               <table class="table able-striped" id="search">
                  <thead>
                     <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Link</th>
                        <!-- <th scope="col">User Id</th>
                        <th scope="col">Password</th> -->
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                        $conn =mysqli_connect('localhost','root','','project_all'); 
                        $sql="select*from project_list where projectType='1'"; 
                        $result=mysqli_query($conn,$sql);
                        $i=0;
                     ?>

                     <?php while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                           <td><?= $i=$i+1; ?></td>
                           <td><?= $row['name'] ?></td>
                           <td><button class="btn">Play</button></td>
                           <!-- <td><?= $row['userId'] ?></td>
                           <td><?= $row['password'] ?></td> -->
                        </tr>
                     <?php } ?>
                  </tbody>
               </table>

               <nav aria-label="Page navigation example">
                 <ul class="pagination justify-content-center">
                   <li class="page-item disabled">
                     <a class="page-link" href="#" tabindex="-1">Previous</a>
                   </li>
                   <li class="page-item"><a class="page-link" href="#">1</a></li>
                   <li class="page-item"><a class="page-link" href="#">2</a></li>
                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                   <li class="page-item">
                     <a class="page-link" href="#">Next</a>
                   </li>
                 </ul>
               </nav>

               <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
               </div>
            </div>          
         </div>
         
      </div>
      
   </section>





	</body>	
</html>