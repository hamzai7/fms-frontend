<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>

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
            <li><a class= "nav-links" href="gridlayout.php">Old Grid</a></li>
            <li><a class= "nav-links" href="form.php">Old Form</a></li>
            <li><a class= "nav-links" href="newgridlayout.php">Grid</a></li> <!-- v2.0 -->
            <li><a class= "nav-links" href="newform.php">Form</a></li> <!-- v2.0 -->
        </ul>
    </nav>

    <h1 class='formTitle'>Form Page</h1>

    <!-- Printer Reset Form -->
    <hr>

    <form class="form-horizontal" action="updateprinter.php">
    <center>
        <fieldset>

            <!-- Form Name -->
            <legend>To update the status of a printer please fill out the form below</legend>
            <br>
            <!-- Text input for selected printer-->
            <div class="form-group">
                
                <label class="col-md-4 control-label" for="selectedprinter"><strong>Which printer are you updating the status of?</strong>  
                    <input id="selectedprinter" name="selectedprinter" type="text" placeholder="e.g. A1, D2" required> 
                </label>
                
            </div>

            <br>
            <br>
            <br>

            <!-- Radio input for new status-->
            <div class="form-group">
            
                <strong>What is the new status for this printer?</strong>
                <br>
                <br>
                <label class="" for="open"> 
                    <input id="open" name="newstatus" type="radio" value="Open" checked>
                    Open
                </label>
                <label class="" for="reserved"> 
                    <input id="reserved" name="newstatus" type="radio" value="Reserved">
                    Reserved
                </label>
                <label class="" for="down"> 
                    <input id="down" name="newstatus" type="radio" value="Down">
                    Down
                </label>
                <label class="" for="inventory"> 
                    <input id="inventory" name="newstatus" type="radio" value="Inventory">
                    Inventory
                </label>
            
            </div>

            <br>
            <br>
            <br>

            <!-- Text input for new user-->
            <div class="form-group">
            
                <label class="col-md-4 control-label" for="newuser"><strong>Who is now using this printer?</strong> 
                    <input id="newuser" name="newuser" type="text" placeholder="'none' if not reserving" required>
                </label>
            
            </div>

            <br>
            <br>
            <br>

            <!-- Radio input for use temperature-->
            <div class="form-group">
            
                <strong>What temperature was this printer used at last?</strong>
                <br>
                <br>
                <label class="col-md-4 control-label" for="hightemp"> 
                    <input id="hightemp" name="usetemp" type="radio" value="High Temperature" required>
                    High Temperature 
                </label>
                
                <label class="col-md-4 control-label" for="lowtemp"> 
                    <input id="lowtemp" name="usetemp" type="radio" value="Low Temperature">
                    Low Temperature 
                </label>
                
                <label class="col-md-4 control-label" for="na"> 
                    <input id="na" name="usetemp" type="radio" value="N/A">
                    I am reserving it 
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