<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>User App</title>
</head>

<body>
    <div class="container">
        <!-- Content here -->
         <div  class="wrapper p-5 m-5">
         <div class="d-flex justify-content-between">
             <h2> Add user</h2>
             <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>

         </div>
         <form action="index.php" method="POST">
         <div class="mb-3">
             <label  class="form-label">Name</label>
             <input type="text" class="form-control"  placeholder="Enter your name"  name="name"  autocomplete="FALSE">
        </div>

        <div class="mb-3">
             <label  class="form-label">Email</label>
             <input type="email" class="form-control"  placeholder="Enter your email"  name="email"  autocomplete="FALSE">
        </div> 

        

        <div class="mb-3">
             <label  class="form-label">Pass word</label>
             <input type="password" class="form-control"  placeholder="Enter your Pass word"  name="password"  autocomplete="FALSE">
        </div>

        <div class="mb-3">
             <label  class="form-label">Mobile</label>
             <input type="tel" class="form-control"  placeholder="Enter your mobile"  name="mobile"  autocomplete="FALSE">
        </div>

        <input class="btn btn-primary" name="save" type="submit" value="save">




         </form>
             
               
             

         </div>
    </div>
    
    <!-- <i data-feather="user-plus"></i> -->
    <script src="js/bootstrap.min.js"> </script>
    <script src="js/icons.js"> </script>
    <script>
        feather.replace();
    </script>
</body>


</html>