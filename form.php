<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Form Page</title>

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

    <h1 class='formTitle'>Technical Form Page</h1>

    <!-- Printer Reset Form -->
    <hr>

    <form class="form-horizontal" action="advancedupdate.php"><!-- change action -->
    <center>
        <fieldset>

            <!-- Form Name -->
            <legend>To change a printer's ECN value or serial number please fill out the form below</legend>
            <br>
            <!-- Text input for selected printer-->
            <div class="form-group">
                
                <label class="col-md-4 control-label" for="selectedprinter"><strong>Which printer spot are you updating the ECN and serial number of?</strong>  
                    <input id="selectedprinter" name="selectedprinter" type="text" placeholder="e.g. A1, D2" required> 
                </label>
                
            </div>

            <br>
            <br>
            <br>

            <!-- Text input for new user-->
            <div class="form-group">
            
                <label class="col-md-4 control-label" for="newECN"><strong>What is the new ECN value?</strong> 
                    <input id="newECN" name="newECN" type="text" placeholder="Enter current if no change" required>
                </label>
            
            </div>

            <br>
            <br>
            <br>

            <div class="form-group">
            
                <label class="col-md-4 control-label" for="newSN"><strong>What is the new serial number for the printer in this spot?</strong> 
                    <input id="newSN" name="newSN" type="text" placeholder="Enter current if no change" required>
                </label>
            
            </div>

            <br>
            <br>

            <!-- Submit Button -->
            <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Update Printer</button>
                </div>
            </div>

            <br>

        </fieldset>
    </center>
    </form>

</body>

</html>