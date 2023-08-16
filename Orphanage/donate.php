<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="contact_1.css">

    <title>Evolve Orphanage</title>
</head>

<body>

<style>
    z  {
      text-shadow: 1px 1px 2px black;
      font: italic small-caps bold 20px Georgia, Garamond, serif;
    
       }
       .navbar {
        background-image: linear-gradient(to right, #777879, #343A40);
    }
   
  </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img class="img-rounded roundkar" height="60px" src="Images/logo.jpeg" alt="">&nbsp;&nbsp;
        <a class="navbar-brand" href="#"><z> Orphanage</z></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="stories.php">Stories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="motto.php">Motto</a>
                </li>
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Donate
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="donate.php">UPI Payment</a>
                        <a class="dropdown-item" href="http://localhost/oph/login.php">Banking(User login)</a>
                        <a class="dropdown-item" href="Nonmonetary.php">Non-Monetary</a>
                       
                    </div>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact us</a>
                </li>
            </ul>
            <div class="mx-2">
                <button class="btn btn-outline-success" data-toggle="modal" data-target="#LoginModal"><a href="http://localhost/oph/login.php">User Login </a></button>
               
            </div>
            <div class="mx-2">
                <button class="btn btn-outline-success" data-toggle="modal" data-target="#LoginModal"><a href="http://localhost/oph/admin/login.php">Admin Login </a></button>
               
            </div>
        </div>
    </nav>
    <!-- Navigation bar ended -->

   
   <div class="container my-4 ml-auto">

   <div class="row mb-2">
                <div class="col-md-100">
                  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                     
                    <z><h1 class="mb-0">UPI Payment:-</h1></z>
                      <h4><div class="mb-1 text-muted">Scan to Pay<h4></div>
                      <p class="card-text mb-auto">
                      <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                    </div>
                    <div class="col-auto d-none d-lg-block">
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <img class="bd-placeholder-img" width="400" height="400" src="Images/Scanner.jpeg">
                    </div>
                  </div>
   </div>

   <footer class="container">
        <p class="float-right"><a href="about.php">Back to top</a></p>
        <p>© 2021-2022 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>

</html>