<?php
  require 'connection.php';

  session_start();
  if(!isset($_SESSION["userID"]))
  {
    header("Location:admin.login.php");
  }

  if(isset($_POST["input-submit"]))
  {
    $sssn=$_POST["sssn"];

    $sql="DELETE FROM medical_staff WHERE SSN = '$sssn'";

    $is_deleted=mysqli_query($conn,$sql);

    if($is_deleted)
    {
      header("Location:adelete.php?login=success");
    }
    else {
      header("Location:adelete.php?error=wronguser");
    }
  }
  else {
    header("Location:adelete.php");
  }




 ?>
