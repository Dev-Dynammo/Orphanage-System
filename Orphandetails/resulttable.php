<?php
include("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM ophdetails ORDER BY id ASC");
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Evolve Orphanage</title>
</head>
<body>

<div class="container">
    <h1>Registration Details of Orphans:</h1>
    <table border="20" class="table table-striped table-dark">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Height(in cms)</th>
            <th>Weight(in kgs)</th>
            <th>Blood Group</th>
            <th>Date of Birth</th>
        </tr>
        <?php
        while ($res = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>' . $res['name'] . '</td>';
            echo '<td>' . $res['age'] . '</td>';
            echo '<td>' . $res['height'] . '</td>';
            echo '<td>' . $res['weight'] . '</td>';
            echo '<td>' . $res['bldgrp'] . '</td>';
            echo '<td>' . $res['dob'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <br><br>
    <button class="btn btn-secondary"><a href="http://localhost/oph/" style="text-decoration:none; color:white;">Go back to Main Page</a></button>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>