<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advanced Confirmation Page</title>

  <!-- Local CSS -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- javascript for navbar -->
  <script defer src="js/nav.js"></script>
</head>

<body>
  

  <nav class="navbar">
      <span class="navbar-toggle">
          <button id="jsToggle">Show Menu</button>
      </span>
      <a class="logo" href="../index.html">Essentium Logo</a>
      <ul class="main-nav" id="jsMenu">
          <li><a class= "nav-links" href="newgridlayout.php">Grid</a></li>
          <li><a class= "nav-links" href="newform.php">Form</a></li>
          <li><a class= "nav-links" href="form.php">Technical Form</a></li>
      </ul>
  </nav>
  

  <br>

  <center>
  <?php

    include "db_connect.php"; //connect to data base
    // Check connection
    if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
    }

    //take input from form and convert to variables
    $selected_printer = $_GET["selectedprinter"];
    
    $newECN = $_GET["newECN"];
    $newSN = $_GET["newSN"];

    $selected_printer = addslashes($selected_printer);
    
    $newECN = addslashes($newECN);
    $newSN = addslashes($newSN);



    //update ECN
    $sql = "UPDATE printers_table SET Printer_ecn='$newECN' WHERE PrinterID LIKE '$selected_printer'";

    if ($mysqli->query($sql) === TRUE) {
      echo "<br>ECN for the printer in spot $selected_printer updated successfully!<br>";
    } else {
      echo "Error updating ECN: " . $mysqli->error;
    }


    //update serial number
    $sql = "UPDATE printers_table SET Printer_serial='$newSN' WHERE PrinterID LIKE '$selected_printer'";

    if ($mysqli->query($sql) === TRUE) {
      echo "<br>Serial number for the printer in spot $selected_printer updated successfully!<br>";
    } else {
      echo "Error updating serial number: " . $mysqli->error;
    }


    $mysqli->close();
    ?>
    </center>

</body>
</html>