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
    <title>Home</title>
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
        <p>MD Sayfuddin | 17CSE041</p>
      </div>
    </header>

    <div class="main_wrapper">
      <div class="wrapper_header">
        <p class="head_title">Add New Employee</p>
        <form action="create.php" method="POST">
          <div class="input_div">
            <div>
              <p>Full Name</p>
              <input type="text" name='name' />
            </div>
            <div>
              <p>Address</p>
              <input type="text" name='address'  />
            </div>
            <div>
              <p>Date of Birth</p>
              <input type="date" name='dob'  />
            </div>
            <div>
              <p>Section</p>
              <input type="text" name='section'  />
            </div>
            <div>
              <p>Salary</p>
              <input type="number" name='salary'  />
            </div>
          </div>
          <div class="btn_holder">
            <input type="submit" value="ADD" />
          </div>
        </form>
      </div>
      <p class="head_title">Employee List</p>
      <div class="wrapper_bdy">




<?php

  $sqlEmployee = "SELECT * FROM tbl_employee ORDER BY id DESC";
  $employeeData = $db->select($sqlEmployee);

  if($employeeData){

    while($result = $employeeData->fetch_assoc()){

?>


    <div class="prod_template">
    <div>
      <p>Name</p>
      <p><?php echo $result['name']; ?></p>
    </div>
    <div>
      <p>Address</p>
      <p><?php echo $result['address']; ?></p>
    </div>
    <div>
      <p>Date of Birth</p>
      <p><?php echo $result['dob']; ?></p>
    </div>
    <div>
      <p>Section</p>
      <p><?php echo $result['section']; ?></p>
    </div>
    <div>
      <p>Salary</p>
      <p> <span style='font-weight: bold'>$</span> <?php echo $result['salary']; ?></p>
    </div>
    <div>
      <a href="delete.php?delemloyeeid=<?php echo $result['id']; ?>">Delete</a>
    </div>
    <div>
      <a href="updateEmployee.php?emloyeeid=<?php echo $result['id']; ?>">Update</a>
    </div>
  </div>

<?php

  }
}else{
  echo "<div class='no_prod'><p>Add Employee to View List</p></div>";
}

?>


      </div>
    </div>
  </body>
</html>
