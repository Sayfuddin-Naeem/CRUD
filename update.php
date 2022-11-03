<?php
  include "config/config.php";
  include "lib/Database.php";
  
  $db = new Database();
  
  //Recieving all data
  $id       = $_POST['id'];
  $name     = $_POST['name'];
  $address  = $_POST['address'];
  $dob      = $_POST['dob'];
  $section  = $_POST['section'];
  $salary   = $_POST['salary'];

  $sqlUp = "UPDATE tbl_employee
          SET
          name   ='$name',
          address='$address',
          dob    ='$dob',
          section='$section',
          salary ='$salary'
          WHERE id = '$id'";
  $employeeUp = $db->update($sqlUp);
  if($employeeUp){
      header("Location: index.php");
  }else{
      echo "<span style='color:red;'>Employee Data Not Updated Successfully.</span>";
  }




