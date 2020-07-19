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
      <img src="img/add.ico" alt="add person img" class="searchIMG">

      <a href="index.php"><img src="img/search.png" alt="search person icon" title="Search" class="linkImage"></a>
      <a href="remove.php"><img src="img/remove.ico" alt="remove person icon" title="Remove Person" class="linkImage"></a>
   
   
        <form action="#" method="POST">

          <label>First name: <br>
          <input type="text" name="fname"></label><br>

          <label>Last name: <br>
          <input type="text" name="lname"></label><br>

          <label>Email name: <br>
          <input type="text" name="email"></label><br>

          <label>Tel: <br>
          <input type="text" name="tel"></label><br>

          <input type="submit" name="insert" value="insert"><br>
        </form>
    </div>
  
      <div id="message">
        <?php
            //if insert is submited
          if(isset($_POST['insert'])){

             //and something is entered in fields
            if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['tel'])) {
              
              //and it's not empty
              if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['tel'])) {

                //store trimed values into variables
                $fname = trim($_POST['fname']);
                $lname = trim($_POST['lname']);
                $email = trim($_POST['email']);
                $tel = trim($_POST['tel']);

                //include connection
                require('inc/connect.php');

                //preventing sql injections
                $fname = mysqli_real_escape_string($conn,$fname);
                $lname = mysqli_real_escape_string($conn,$lname);
                $email = mysqli_real_escape_string($conn,$email);
                $tel = mysqli_real_escape_string($conn,$tel);

                //inserting values into data base
                $query = "INSERT INTO contact(fname, lname, email, tel) VALUES ('{$fname}','{$lname}','{$email}','{$tel}')";

                //sending sql query
                if (mysqli_query($conn,$query) === TRUE) {
                  echo "New Person succesfully created";
                } else {
                  echo "Error!";
                }


                } else {
                  echo "All field must be filled in.";
                }

            } else {
               echo "All parameters must be sent.";
          }
        }
        ?>
      </div>
  </div> 

</body>

</html>