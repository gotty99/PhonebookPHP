<?php

if(isset($_GET['id'])){

  $id = $_GET['id'];
  require("connect.php");

$query = "DELETE FROM contact WHERE id = {$id}";

mysqli_query($conn,$query);

//getting back on remove.php page after executing code
header("Location: ../remove.php");


}

?>