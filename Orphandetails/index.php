<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Orphan Registration</title>
</head>
<body style="background-color: bisque;">

    <style>
         z  {
      text-shadow: 1px 1px 2px black;
      font: italic small-caps bold 20px Georgia, Garamond, serif;
    
       }
    </style>

    <center><z><h1 class="card-title">Orphan Registration Form :</h1></z></center>
    <div class="container py-5">
        <div class="card">
            <div class="card-body">
                
                <center><div><br<z><h3><u>Please enter the details below:</u></h3></z></div><br></center>
                <form action="function.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter the name of the Orphan">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" name="age" placeholder="Enter the age of the Orphan">
                    </div>
                    <div class="form-group">
                        <label for="height">Height(in cms)</label>
                        <input type="number" class="form-control" name="height" placeholder="Enter the Height of the Orphan">
                    </div>
                    <div class="form-group">
                        <label for="Weight">Weight(in kgs)</label>
                        <input type="number" class="form-control" name="weight" placeholder="Enter the Weight of the Orphan">
                    </div>
                    <div class="form-group">
                        <label for="age">Blood Group</label>
                        <input type="text" class="form-control" name="bldgrp" placeholder="Enter the Blood Group of the Orphan">
                    </div>
                    <div class="form-group">
                        <label for="dateofbirth">Date of Birth</label>
                        <input type="date" class="form-control" name="dob">
                    </div><br>
                    <center><button type="submit" class="btn btn-outline-primary" name="submit">Submit</button></center>
                </form>
                <br>
                <!-- <button class="btn btn-secondary"><a href="http://htdocs/Orphandetails/resulttable.php" style="text-decoration:none; color:white;">Orphan Details</a></button><br><br> -->
                <center><div><button class="btn btn-secondary"><a href="http://localhost/oph/" style="text-decoration:none; color:white;">User-DashBoard</a></button>
</div></center><br> 
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>