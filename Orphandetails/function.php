<?php
include("config.php");
?>

<?php
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $age=$_POST['age'];
  $height=$_POST['height'];
  $weight=$_POST['weight'];
  $bldgrp=$_POST['bldgrp'];
  $dob=$_POST['dob'];

  $result=mysqli_query($mysqli,"INSERT into ophdetails values('','$name','$age','$height','$weight','$bldgrp','$dob')");
  if($result)
  {
    header("location:index.php");
  }
  else
  {
    echo"Failed";
  }

}
?>