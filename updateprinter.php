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
  echo "Status for $selected_printer updated successfully";
} else {
  echo "Error updating printer status: " . $mysqli->error;
}


//update user
$sql = "UPDATE Printers_table SET Printer_user='$new_user' WHERE PrinterID LIKE '$selected_printer'";

if ($mysqli->query($sql) === TRUE) {
  echo "<br>User for $selected_printer updated successfully";
} else {
  echo "Error updating user: " . $mysqli->error;
}


//update temp
$sql = "UPDATE Printers_table SET Printer_usetemp='$use_temp' WHERE PrinterID LIKE '$selected_printer'";

if ($mysqli->query($sql) === TRUE) {
  echo "<br>Use temperature for $selected_printer updated successfully <br>";
} else {
  echo "Error updating use temperature: " . $mysqli->error;
}


$mysqli->close();
?>

<a href="gridlayout.php">Go to grid page to update</a>