<?php
  include "config/config.php";
  include "lib/Database.php";

  $db = new Database();

  $emloyeeid = $_GET['delemloyeeid'];

  $delSql = "DELETE FROM tbl_employee WHERE id = $emloyeeid";
  $delEmployee = $db->delete($delSql);

  if($delEmployee){
      header("Location: index.php");
  }else{
    echo "<span style='color:red;'>The Employee Not Included Successfully.</span>";
  }




