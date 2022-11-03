<?php
  include "config/config.php";
  include "lib/Database.php";
  
  $db = new Database();
  
//Recieving all data
  $name     = $_POST['name'];
  $address  = $_POST['address'];
  $dob      = $_POST['dob'];
  $section  = $_POST['section'];
  $salary   = $_POST['salary'];


//creatinng connection
  
  $sqlIn = "INSERT INTO tbl_employee( name, address, dob, section, salary) VALUES ('$name','$address','$dob','$section','$salary')";
  $employeeIn = $db->insert($sqlIn);

  if($employeeIn){
      header("Location: index.php");
  }else{
    echo "<span style='color:red;'>The Employee Not Included Successfully.</span>";
  }




