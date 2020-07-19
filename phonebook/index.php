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
      <img src="img/search.png" alt="search img" class="searchIMG">

      <a href="insert.php"><img src="img/add.ico" alt="add person icon" title="Add Person" class="linkImage"></a>
      <a href="remove.php"><img src="img/remove.ico" alt="remove person icon" title="Remove Person" class="linkImage"></a>

      <form action="#" method="GET">
          <input type="text" placeholder="Search Person" name="criteria">
          <input type="submit" value="Search">
          <br>
        </form>  
    </div>

     <?php 
        include("inc/getResults.php");
     ?>

  </div>
</body>

</html>