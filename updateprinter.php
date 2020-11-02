<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Confirmation Page</title>

  <!-- Local CSS -->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  
  <header>
    <nav>
        <ul>
          <li class= "desktop"><a href="newgridlayout.php">New Grid</a></li> <!-- v2.0 -->
          <li class= "desktop"><a href="gridlayout.php">Grid</a></li>
          <li class="logo"><a href="../index.html">Essentium Logo</a></li>
          <li class= "mobile"><a href="newgridlayout.php"><h3>New Grid</h3></a></li> <!-- v2.0 -->
          <li class= "mobile"><a href="gridlayout.php"><h3>Grid</h3></a></li>
          <li class= "mobile"><a href="form.php"><h3>Form</h3></a></li>
          <li class= "mobile"><a href="newform.php"><h3>New Form</h3></a></li> <!-- v2.0 -->
          <li class= "desktop"><a href="form.php">Form</a></li>
          <li class= "desktop"><a href="newform.php">New Form</a></li> <!-- v2.0 -->
        </ul>
    </nav>
  </header>

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
    $sql = "UPDATE Printers_table SET Printer_status='$new_status' WHERE PrinterID LIKE '$selected_printer'";

    if ($mysqli->query($sql) === TRUE) {
      echo "Status for the printer in spot $selected_printer updated successfully!<br>";
    } else {
      echo "Error updating printer status: " . $mysqli->error;
    }


    //update user
    $sql = "UPDATE Printers_table SET Printer_user='$new_user' WHERE PrinterID LIKE '$selected_printer'";

    if ($mysqli->query($sql) === TRUE) {
      echo "<br>User for the printer in spot $selected_printer updated successfully!<br>";
    } else {
      echo "Error updating user: " . $mysqli->error;
    }


    //update temp
    $sql = "UPDATE Printers_table SET Printer_usetemp='$use_temp' WHERE PrinterID LIKE '$selected_printer'";

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