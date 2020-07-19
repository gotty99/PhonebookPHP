<?php
  //connection included
  require("connect.php");

  //does GET exist
  if(isset($_GET['criteria'])){

    if(!empty($_GET['criteria'])) {
      //trimed value
      $criteria = trim($_GET['criteria']);
      //preventing sql injections
      $criteria = mysqli_real_escape_string($conn, $criteria);
      //sql query
      $query = "SELECT * FROM contact WHERE fname LIKE '%{$criteria}%' OR lname LIKE '%{$criteria}%'";
      
      //sending sql query and saving it to $result
      $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)) {

                ?>

                  <div id="result">
                    <img src="img/user.png" height = "70px;">
                    <p> <b>Name: </b> <?php echo $row['fname'] . " " . $row['lname']; ?></p>
                    <br>
                    <p> <b>E-mail: <?php echo $row['email']?> </b> </p>
                    <br>
                    <p> <b>Tel: <?php echo $row['tel']?> </b> </p>
                    <br>
                  </div>

                <?php
            }

            echo "Number of results: " . mysqli_num_rows($result);

        } else {
          echo "No results";
        }


    } else {
      echo "Criteria is empty";
    }



  }

?>