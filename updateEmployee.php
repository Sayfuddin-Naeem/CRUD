<?php
  include "config/config.php";
  include "lib/Database.php";
  
  $db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Update Employee Data</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;1,400;1,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div>
        <h2>My <span>CRUD</span> Application</h2>
        <p>Employee Managemnet System</p>
      </div>
    </header>

    <div class="main_wrapper">
      <div class="wrapper_header">
        <p class="head_title">Upadate Employee Data</p>
        <form action="update.php" method="POST">




<?php

$emloyeeid = $_GET['emloyeeid'];

$employeeSql = "SELECT * FROM tbl_employee WHERE id = $emloyeeid";

$employee = $db->select($employeeSql);

if($employee){

  while($result = $employee->fetch_assoc()){

    ?> 

    <div class="input_div">
    <input style='display: none' type="text" name='id' value='<?php echo $emloyeeid; ?>' />

    <div>
      <p>Employee Name</p>
      <input type="text" name='name' value='<?php echo $result['name']; ?>' />
    </div>
    <div>
      <p>Employee Address</p>
      <input type="text" name='address' value='<?php echo $result['address']; ?>'  />
    </div>
    <div>
      <p>Employee Date of Birth</p>
      <input type="date" name='dob' value='<?php echo $result['dob']; ?>'  />
    </div>
    <div>
      <p>Section</p>
      <input type="text" name='section' value='<?php echo $result['section']; ?>'  />
    </div>
    <div>
      <p>Salary</p>
      <input type="number" name='salary' value='<?php echo $result['salary']; ?>' />
    </div>
  </div>
  <div class="btn_holder">
    <input type="submit" value="Update" />
  </div>


  <?php
  }
}

?>



        </form>
      </div>
      







    
    </div>
  </body>
</html>
