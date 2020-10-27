<html>

<head>
	<!-- Local CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/newstyles.css">
</head>

<body>

	<header>
        <nav>
            <ul>
                <li class= "desktop"><a href="gridlayout.php">Grid</a></li>
				<li class="logo"><a href="../index.html">Essentium Logo</a></li>
				<li class= "mobile"><a href="gridlayout.php"><h3>Grid</h3></a></li>
				<li class= "mobile"><a href="form.php"><h3>Form</h3></a></li>
				<li class= "desktop"><a href="form.php">Form</a></li>
            </ul>
        </nav>
	</header>





    <div class="container"> <!-- Section A -->
        <div class="cell cell-1">
            <center>
                <div class="block">
                    <h1> 
                        Spot A1
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                        include "db_connect.php"; //make connection
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 01'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-2">
            <center>
                <div class="block">
                    <h1> 
                        Spot A2
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 02'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-3">
            <center>
                <div class="block">
                    <h1> 
                        Spot A3
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 03'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-4">
            <center>
                <div class="block">
                    <h1> 
                        Spot A4
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 04'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-5">
            <center>
                <div class="block">
                    <h1> 
                        Spot A5
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                        
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 05'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-6">
            <center>
                <div class="block">
                    <h1> 
                        Spot A6
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 06'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-7">
            <center>
                <div class="block">
                    <h1> 
                        Spot A7
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 07'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-8">
            <center>
                <div class="block">
                    <h1> 
                        Spot A8
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 08'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-9">
            <center>
                <div class="block">
                    <h1> 
                        Spot A9
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 09'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div> 
    </div>







    <div class="container"> <!-- Section B -->
        <div class="cell cell-1">
            <center>
                <div class="block">
                    <h1> 
                        Spot A1
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                        
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 01'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-2">
            <center>
                <div class="block">
                    <h1> 
                        Spot A2
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 02'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-3">
            <center>
                <div class="block">
                    <h1> 
                        Spot A3
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 03'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-4">
            <center>
                <div class="block">
                    <h1> 
                        Spot A4
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 04'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-5">
            <center>
                <div class="block">
                    <h1> 
                        Spot A5
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                        
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 05'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-6">
            <center>
                <div class="block">
                    <h1> 
                        Spot A6
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 06'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-7">
            <center>
                <div class="block">
                    <h1> 
                        Spot A7
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 07'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-8">
            <center>
                <div class="block">
                    <h1> 
                        Spot A8
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 08'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div>
        <div class="cell cell-9">
            <center>
                <div class="block">
                    <h1> 
                        Spot A9
                    </h1>
                    <!-- Get table data using PHP -->
                    <?php
                    
                        //search database for the printer and info
                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 09'";
                        $result = $mysqli->query($sql);
                        
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                            }
                        } else {
                            echo "0 results";
                        }
                        //add $mysqli->close(); to close database connection later
                    ?>
                </div>
            </center>
        </div> 
    </div>




















	<div class="container-fluid">
        <div class="block">
            <h1> 
                <center>Spot A1</center>
            </h1>
            <?php
                include "db_connect.php"; //
            
                //search database for the printer and info
                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'Printer 01'";
                $result = $mysqli->query($sql);
                
                if ($result->num_rows > 0) {
                    //output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div>";
                    }
                } else {
                    echo "0 results";
                }
                //add $mysqli->close(); to close database connection later
            ?>
        </div>
    </div>

</body>

</html>