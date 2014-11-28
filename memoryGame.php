<!DOCTYPE html>

<html>
  <head>
      <title>Memory Game</title>
      <link  rel="stylesheet" type="text/css" href="css/memoryStyle.css">
  </head>

  <body>
    <div id="main">
    </div>
    <div class = "menu">
      <div id="left" class="side">
        <a href="main.html" class="buttons"><img src="images/menu.png" alt="menu"></a>
      </div>
      <div id="right">
        <a id="resetId" class="buttons" onClick="newBoard()"><img src="images/reset.png" alt="reset game"></a>
      </div>
    </div>
    
    <div id ="memory_board"></div>
  <!--
  <script src="script/sectionone.js"></script>

  -->

  <?php 
     //Connect to the Database
      require "db.php";

      try {
        $dbh = new PDO("mysql:host=$hostname;
                       dbname=caseym_Aviation", $username, $password);
        echo "Connected to database.";
      } 
      catch (PDOException $e) {
        echo $e->getMessage();
      }
  ?>


  <script src="script/memoryScript.js"></script>

  </body>
</html>