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

    <h1>Old Form Page</h1>

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

            <!-- Text input for new status-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="newstatus">What is the new status for this printer?</label>  
                <div class="col-md-6">
                <select id="ddselect" onchange="ddlselect();">
                            <option> -- Select -- </option>
                            <option>Ready</option>
                            <option>Build-out</option>
                            <option>Down</option>
                            <option>Sold</option>
                            <option>Inventory</option>
                            </select>
                            <input type="text" id="newstatus" name="newstatus"/>
                <!--input id="newstatus" name="newstatus" type="text" placeholder="e.g. Ready, Usable, Unusable, Busy" class="form-control input-md">-->
                <span class="help-block">Enter the new status here.</span>  
                </div>
            </div>

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
                <select id="ddselect1" onchange="ddlselect1();">
                            <option> -- Select -- </option>
                            <option>High Temperature</option>
                            <option>Low Temperature</option>
                            <option>Testing</option>
                            </select>
                            <input type="text" id="usetemp" name="usetemp"/>
                <!--input id="usetemp" name="usetemp" type="text" placeholder="e.g. High Temperature, Low Temperature" class="form-control input-md"-->
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


    <script>
    function ddlselect()
    {
      let d = document.getElementById("ddselect");
      let displaytext = d.options[d.selectedIndex].text;
      document.getElementById("newstatus").value=displaytext;
    }
  </script>

<!-- Script for the temperature -->
<script>
    function ddlselect1()
    {
      let d = document.getElementById("ddselect1");
      let displaytext = d.options[d.selectedIndex].text;
      document.getElementById("usetemp").value=displaytext;
    }
  </script>
</body>

</html>