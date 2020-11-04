<html>

<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<!-- Local CSS -->
	<link rel="stylesheet" href="css/styles.css">
	<script defer src="js/script.js"></script>
</head>

<body>

	<nav class="navbar">
        <span class="navbar-toggle">
            <button id="jsToggle">Show Menu</button>
        </span>
        <a class="logo" href="../index.html">Essentium Logo</a>
        <ul class="main-nav" id="js-Menu">
            <li><a class= "nav-links" href="gridlayout.php">Old Grid</a></li>
            <li><a class= "nav-links" href="form.php">Old Form</a></li>
            <li><a class= "nav-links" href="newgridlayout.php">Grid</a></li> <!-- v2.0 -->
            <li><a class= "nav-links" href="newform.php">Form</a></li> <!-- v2.0 -->
        </ul>
    </nav>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron">
					<h2>
						Howdy!
					</h2>
					<p>
						This is a test website for the fleet management system.
					</p>
					<p>
						<a class="btn btn-primary btn-large" href="form.php">Update printer info</a>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"><!-- Left side spacing for top sections of printers -->
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-4">
						<h2>
							<b>Spot: A1</b>
						</h2>
						<p>
							<?php
								include "db_connect.php"; //
							
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 01'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
								//add $mysqli->close(); to close database connection later
							?>
						</p>
						<button data-modal-target="#modal" class="modal-button">Open Modal</button>
						<div class="modal" id="modal">
							<div class="modal-header">
								<div class="title">Example Modal</div>
								<button data-close-button class="close-button">&times;</button>
							</div>
							<div class="modal-body">
								Example text
							</div>
						</div>
						<div id="overlay"></div>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: A2</b>
						</h2>
						<p>
							<?php
								//search database for printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 02'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: A3</b>
						</h2>
						<p>
							<?php
								//search database for printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 03'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2>
							<b>Spot: A4</b>
						</h2>
						<p>
							<?php
								//search database for printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 04'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: A5</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 05'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: A6</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 06'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2>
							<b>Spot: A7</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 07'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: A8</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 08'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: A9</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 09'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-2"><!-- Middle spacing for top sections of printers -->
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-4">
						<h2>
							<b>Spot: B1</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 10'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: B2</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 11'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: B3</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 12'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2>
							<b>Spot: B4</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 13'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: B5</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 14'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: B6</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 15'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2>
							<b>Spot: B7</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 16'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: B8</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 17'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: B9</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 18'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-1"><!-- Right side spacing for top sections of printers -->
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h1>
					<br> 
				</h1>
				<h2>
					<br> 
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"><!-- Left side spacing for bottom row of printers -->
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-4">
						<h2>
							<b>Spot: C1</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 19'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: C2</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 20'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: C3</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 21'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-2"><!-- Middle spacing for bottom row of printers -->
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-4">
						<h2>
							<b>Spot: D1</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 22'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
						<h2>
							<b>Spot: D2</b>
						</h2>
						<p>
							<?php
								//search database for the printer and info
								$sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 23'";
								$result = $mysqli->query($sql);
							
								if ($result->num_rows > 0) {
									//output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<h4>Status: </h4>" . $row["Printer_status"]. "<br> <br> <h4>User: </h4>" . $row["Printer_user"]. "<br> <br> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "<br>";
									}
								} else {
									echo "0 results";
								}
							?>
						</p>
						<p>
							<a class="btn" href="form.php">Go to the update form</a>
						</p>
					</div>
					<div class="col-md-4">
					</div>
				</div>
			</div><!-- Right side spacing for bottom row of printers -->
			<div class="col-md-1">
			</div>
		</div>
	</div>

</body>

</html>