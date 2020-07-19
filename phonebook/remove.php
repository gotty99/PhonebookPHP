<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>

  <div id="wrap">
    <div id="search">
      <img src="img/remove.ico" alt="remove person img" class="searchIMG">

      <a href="index.php"><img src="img/search.png" alt="search person icon" title="Search" class="linkImage"></a>
      <a href="insert.php"><img src="img/add.ico" alt="add person icon" title="Add Person" class="linkImage"></a>
   
    </div>

    <?php 

    require('inc/connect.php');
    $query = "SELECT * FROM contact";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0 ){

      while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <div id="result">
          <a href="inc/removeContact.php?id=<?php echo $row['id'] ?>"> <img src="img/removeperson.png" alt="remove icon"></a>
          <p> <b>Name: </b> <?php echo $row['fname'] . " " . $row['lname']; ?></p>
          <br>
          <p> <b>E-mail: <?php echo $row['email']?> </b> </p>
          <br>
          <p> <b>Tel: <?php echo $row['tel']?> </b> </p>
          <br>
        </div>
        
        <?php
      }
    } else {
      echo "No contacts!";
    }


    ?>


  </div> 

</body>

</html>