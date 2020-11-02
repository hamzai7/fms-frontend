<html>

<head>

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

    <h1>Form Page</h1>

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

        </fieldset>
    </center>
    </form>

    <!-- Links to other pages -->
    <a href="gridlayout.php">Go to grid page</a><br>

</body>

</html>