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
        <fieldset>

            <!-- Form Name -->
            <legend>To update the status of a printer please fill out the form below</legend>

            <!-- Text input for selected printer-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectedprinter">Which printer are you updating the status of?</label>  
                <div class="col-md-6">
                    <input id="selectedprinter" name="selectedprinter" type="text" placeholder="e.g. A1, D2" class="form-control input-md">
                    <span class="help-block">Enter the printer name as shown in the grid</span>  
                </div>
            </div>

            <br>

            <!-- Radio input for new status-->
            <div class="form-group">
            <center>
                <strong>What is the new status for this printer?</strong>
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
            </center>
            </div>

            <br>

            <!-- Text input for new user-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="newuser">Who is now using this printer?</label>  
                <div class="col-md-5">
                    <input id="newuser" name="newuser" type="text" placeholder="e.g. John Doe" class="form-control input-md">
                    <span class="help-block">Enter your name if you are reserving this printer, otherwise enter "None" </span>  
                </div>
            </div>

            <!-- Text input for new user-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="usetemp">What temperature was this printer used at last?</label>  
                <div class="col-md-5">
                    <input id="usetemp" name="usetemp" type="text" placeholder="e.g. High Temperature, Low Temperature, n/a" class="form-control input-md">
                    <span class="help-block">If you are done with this printer, what temperature did you last use it for. If reserving, what temperature do you intend to use it for?</span>  
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Update Printer</button>
                </div>
            </div>

        </fieldset>
    </form>

    <!-- Links to other pages -->
    <a href="gridlayout.php">Go to grid page</a><br>

</body>

</html>