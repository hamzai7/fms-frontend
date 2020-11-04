<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Grid Page</title>

	<!-- Local CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/newstyles.css">

    <!-- javascript for modal -->
    <script defer src="js/script.js"></script>
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
    
    

    <section class="bay">
        <figure>
            <img src="images/warehouseFloor.png" alt="Printer bay diagram">
            <figcaption>The Printer Bay</figcaption>
        </figure>
        
       
    </section>


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
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'A1'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                                //add $mysqli->close(); to close database connection later
                            ?>
                            <button data-modal-target="#modal1" class="modal-button">View details</button> <!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modal1"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">A1 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'A1'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'A2'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalA2" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalA2"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">A2 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'A2'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'A3'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalA3" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalA3"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">A3 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'A3'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div id="overlay"></div>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="cellflex">
                        <li>
                            <h1>A4</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'A4'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalA4" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalA4"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">A4 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'A4'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>A5</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'A5'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalA5" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalA5"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">A5 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'A5'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>A6</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'A6'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalA6" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalA6"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">A6 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'A6'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div id="overlay"></div>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="cellflex">
                        <li>
                            <h1>A7</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'A7'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalA7" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalA7"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">A7 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'A7'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>A8</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'A8'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalA8" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalA8"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">A8 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'A8'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>A9</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'A9'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalA9" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalA9"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">A9 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'A9'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div id="overlay"></div>
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
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'B1'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalB1" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalB1"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">B1 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'B1'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>B2</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'B2'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalB2" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalB2"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">B2 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'B2'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>B3</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'B3'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalB3" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalB3"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">B3 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'B3'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div id="overlay"></div>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="cellflex">
                        <li>
                            <h1>B4</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'B4'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalB4" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalB4"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">B4 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'B4'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>B5</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'B5'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalB5" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalB5"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">B5 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'B5'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>B6</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'B6'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalB6" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalB6"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">B6 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'B6'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div id="overlay"></div>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="cellflex">
                        <li>
                            <h1>B7</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'B7'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalB7" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalB7"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">B7 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'B7'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>B8</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'B8'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalB8" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalB8"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">B8 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'B8'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>B9</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'B9'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalB9" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalB9"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">B9 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'B9'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div id="overlay"></div>
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
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'C1'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalC1" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalC1"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">C1 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'C1'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>C2</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'C2'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalC2" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalC2"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">C2 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'C2'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>C3</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'C3'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalC3" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalC3"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">C3 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'C3'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div id="overlay"></div>
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
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'D1'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalD1" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalD1"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">D1 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'D1'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>D2</h1>
                            <?php
                                //search database for the printer and info
                                $sql = "SELECT PrinterID, Printer_status, Printer_user, Printer_usetemp FROM printers_table WHERE PrinterID LIKE 'D2'"; //Specify printer id for each spot and columns to pull
                                $result = $mysqli->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div><br><h4 style='font-size:20px'>Status: </h4><p style='color:blue'><br>" . $row["Printer_status"]. "</p></div> <br>";
                                    }
                                } else {
                                    echo "<br>0 results<br>";
                                }
                            ?>
                            <button data-modal-target="#modalD2" class="modal-button">View details</button><!-- Specify modal target for each printer spot -->
                            <div class="modal" id="modalD2"> <!-- Specify modal for each printer spot -->
                                <div class="modal-header">
                                    <div class="title">D2 Printer Details</div> <!-- Specify which printers details -->
                                    <center><button data-close-button class="close-button">&times;</button></center>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        //search database for the printer and info
                                        $sql = "SELECT PrinterID, Printer_user, Printer_usetemp, Printer_ecn, Printer_serial FROM printers_table WHERE PrinterID LIKE 'D2'"; //Specify printer id for each spot and columns to pull
                                        $result = $mysqli->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            //output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<h4 style='font-size:20px'>User: </h4><p style='color:blue'>" . $row["Printer_user"]. 
                                                "</p><h4 style='font-size:20px'><br>Last used for: </h4><p style='color:blue'>" . $row["Printer_usetemp"]. 
                                                "</p><h4 style='font-size:20px'><br>ECN: </h4><p style='color:blue'>" . $row["Printer_ecn"] . 
                                                "</p><h4 style='font-size:20px'><br>Serial number: </h4><p style='color:blue'>" . $row["Printer_serial"] . "</p>";
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
                            <h1>D3</h1>
                            
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    
</body>

</html>