<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet"type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <title>Photo Garelly</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Garelly</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#About">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactus">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#login">Login</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#Nature">Nature</a>
          <a class="dropdown-item" href="#Architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#Travel">Travel</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/image1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/image2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/image3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <a id="nature">
      <section class="my-4">
         <div class="py-4">
            <h2 class="text-center">Nature</h2>
         </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/image3.jpg" class="img-fluid pb-3">
                </div> 
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/image2.jpg" class="img-fluid pb-3">
                </div> 
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/image1.jpg" class="img-fluid pb-3">
                </div> 

            </div>       
      </section>
      </a> 
      <a id="Architecture">
      <section class="my-4">
         <div class="py-4">
            <h2 class="text-center">Architecture</h2>
         </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/image1.jpg" class="img-fluid pb-3">
                </div> 
                <div class="col-lg-4 col-md-4 col-10">
                    <img src="image/image3.jpg" class="img-fluid pb-3">
                </div> 
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/image2.jpg" class="img-fluid pb-3">
                </div> 
            </div>
      </section>
       </a>
       <a id="Travel">
      <section class="my-4">
         <div class="py-4">
            <h2 class="text-center">Travel</h2>
         </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/image2.jpg" class="img-fluid pb-3">
                </div> 
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/image1.jpg" class="img-fluid pb-3">
                </div> 
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="image/image3.jpg" class="img-fluid pb-3">
                </div> 

            </div>
      </section>
    </a>

    <section class="my-4">
         <div class="py-4">
            <h1 class="text-center"></h1>
         </div>
</section>
     <a id="contactus">
         <section>
          <div class="w-50 m-auto">
              <form action="contactus.php" method="POST">
                <h1 class="text-center">contact us</h1>
                  <div class="form-group">
                     <label>Names:</label>
                     <input type="text" name="form-names" class="form-control" required>
                 </div> 
                 <div class="form-group">
                     <label>Email:</label>
                     <input type="email" name="form-email" class="form-control" required>
                 </div> 
                 <div class="form-group">
                     <label>password:</label>
                     <input type="password" name="form-password" class="form-control" required>
                 </div> 
                    
                  <div class="form-group">
                     <label>Message:</label>
                     <textarea name="form-message" rows="3" class="form-control"></textarea>
                  </div> 
                  <button type="submit" class="btn btn-success">submit</button>
                </form>
            </div>
        </section> 
      </a> 
      <a id="login">
         <section>
             <div class="w-50 m-auto">
                   <form action="login.php" method="POST">
                       <h1 class="text-center">LOGIN FORM</h1>
                       <div class="form-group">
                           <label>Email:</label>
                           <input type="email" name="form-email" class="form-control" required>
                       </div> 
                       <div class="form-group">
                           <label>Password:</label>
                           <input type="password" name="form-password" class="form-control" required>
                       </div>  
                       <button type="submit" class="btn btn-success">Login</button>
                   </form>
              </div>
         </section>
      </a>         
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

