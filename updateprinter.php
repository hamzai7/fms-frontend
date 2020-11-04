<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Confirmation Page</title>

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
          <li><a class= "nav-links" href="gridlayout.php">Grid</a></li>
          <li><a class= "nav-links" href="form.php">Form</a></li>
          <li><a class= "nav-links" href="newgridlayout.php">New Grid</a></li> <!-- v2.0 -->
          <li><a class= "nav-links" href="newform.php">New Form</a></li> <!-- v2.0 -->
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
    $new_status = $_GET["newstatus"];
    $new_user = $_GET["newuser"];
    $use_temp = $_GET["usetemp"];

    $selected_printer = addslashes($selected_printer);
    $new_status = addslashes($new_status);
    $new_user = addslashes($new_user);
    $use_temp = addslashes($use_temp);


    //update status
    $sql = "UPDATE printers_table SET Printer_status='$new_status' WHERE PrinterID LIKE '$selected_printer'";

    if ($mysqli->query($sql) === TRUE) {
      echo "Status for the printer in spot $selected_printer updated successfully!<br>";
    } else {
      echo "Error updating printer status: " . $mysqli->error;
    }


    //update user
    $sql = "UPDATE printers_table SET Printer_user='$new_user' WHERE PrinterID LIKE '$selected_printer'";

    if ($mysqli->query($sql) === TRUE) {
      echo "<br>User for the printer in spot $selected_printer updated successfully!<br>";
    } else {
      echo "Error updating user: " . $mysqli->error;
    }


    //update temp
    $sql = "UPDATE printers_table SET Printer_usetemp='$use_temp' WHERE PrinterID LIKE '$selected_printer'";

    if ($mysqli->query($sql) === TRUE) {
      echo "<br>Use temperature for the printer in spot $selected_printer updated successfully!<br>";
    } else {
      echo "Error updating use temperature: " . $mysqli->error;
    }


    $mysqli->close();
    ?>
    </center>

</body>
</html>