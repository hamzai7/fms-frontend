<html>

<head>
	<!-- Local CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/newstyles.css">

    <!-- javascript for modal -->
    <script defer src="js/script.js"></script>
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


    <ul class='bigflex'> <!-- upper sections -->
        <li>
            <ul class="smallflex"> <!-- section a -->
                <li>
                    <ul class="cellflex">
                        <li>
                            <h1>A1</h1> <!-- Specify each printer spot -->
                            <?php

                                include "db_connect.php"; //connect to data base

                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'A1'"; //Specify printer id for each spot
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <br>";
                                    }
                                } else {
                                    echo "0 results";
                                }
                                //add $mysqli->close(); to close database connection later
                            ?>
                            <button data-modal-target="#modal1" class="modal-button">View details</button>
                            <div class="modal" id="modal1"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">A1 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'A1'"; //Specify printer id for each spot
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div> <div> <h4>ECN: </h4>" . $row["Printer_ecn"]. "</div>" ;
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        //add $mysqli->close(); to close database connection later
                                    ?>
                                </div>
                            </div>
                            <div id="overlay"></div>
                        </li>
                        <li>
                            <h1>A2</h1> <!-- Specify each printer spot -->
                            <?php

                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'A2'"; //Specify printer id for each spot
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div> <h4>Status: </h4>" . $row["Printer_status"]. "</div> <br>";
                                    }
                                } else {
                                    echo "0 results";
                                } 
                            ?>
                            <button data-modal-target="#modal2" class="modal-button">View details</button>
                            <div class="modal" id="modal2"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">A2 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        
                                        $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'A2'"; //Specify printer id for each spot
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                                echo "<div> <h4>User: </h4>" . $row["Printer_user"]. "</div> <div> <h4>Last used for: </h4>" . $row["Printer_usetemp"]. "</div> <div> <h4>ECN: </h4>" . $row["Printer_user"]. "</div>" ;
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div id="overlay"></div>
                        </li>
                        <li>
                            <h1>A3</h1>
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
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="cellflex">
                        <li>
                            <h1>A4</h1>
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
                        </li>
                        <li>
                            <h1>A5</h1>
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
                        </li>
                        <li>
                            <h1>A6</h1>
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
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="cellflex">
                        <li>
                            <h1>A7</h1>
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
                        </li>
                        <li>
                            <h1>A8</h1>
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
                        </li>
                        <li> <h1>A9</h1>
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
                        </li></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <ul class="smallflex"> <!-- section b -->
                <li>
                    <ul class="cellflex">
                        <li>
                            <h1>B1</h1>
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
                        </li>
                        <li>
                            <h1>B2</h1>
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
                        </li>
                        <li>
                            <h1>B3</h1>
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
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="cellflex">
                        <li>
                            <h1>B4</h1>
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
                        </li>
                        <li>
                            <h1>B5</h1>
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
                        </li>
                        <li>
                            <h1>B6</h1>
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
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="cellflex">
                        <li>
                            <h1>B7</h1>
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
                        </li>
                        <li>
                            <h1>B8</h1>
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
                        </li>
                        <li> <h1>B9</h1>
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
                        </li></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>

    <ul class='bigflex'> <!-- lower sections -->
        <li>
            <ul class="smallflex"> <!-- section c -->
                <li>
                    <ul class="cellflex">
                        <li>
                            <h1>C1</h1>
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
                        </li>
                        <li>
                            <h1>C2</h1>
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
                        </li>
                        <li>
                            <h1>C3</h1>
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
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <ul class="smallflex"> <!-- section d -->
                <li>
                    <ul class="cellflex">
                        <li>
                            <h1>D1</h1>
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
                        </li>
                        <li>
                            <h1>D2</h1>
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
                        </li>
                        <li>
                            <h1>D3</h1>
                            
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    
</body>

</html>