<?php
function con_db(){
  $host = "localhost";
  $db_user = "root";
  $db_pwd = "";
  $db_name = "pkldamri";
  $con = ($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $db_user, $db_pwd));
  if($con){
      // konek ke host
      $con_db = mysqli_select_db($GLOBALS["___mysqli_ston"], $db_name);
      if($con_db){
          return 1;
          //konek ke database
      }
      else{
          return 0;
          // tidak konek ke database
      }
  }
  else{
      return 0;
      // tidak konek ke database
  }
}
