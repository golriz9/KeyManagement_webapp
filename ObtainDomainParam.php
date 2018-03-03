<html>
    <head>
        <link rel="shortcut icon" href="logo56.jpg" type="image/x-icon" />
        <title>Obtain Domain Parameters</title>
        <link href="content/app.css" rel="stylesheet"/>
        <script src="scripts/app.js" type="application/javascript"></script>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
    </head>

    <body>
        <header class="container-fluid">
            <h1>Obtain Domain Parameters</h1>    
        </header>

        <fieldset>
            <legend>
                <p>Please choose the domain parameter selection/generation method:</p>                   
            </legend>


            <select onchange="location = this.options[this.selectedIndex].value;">
                <option>Please select</option>
                <option value="FFC.php">Finite Field Cryptography (FFC)</option>
                <option value="ECC.php">Elliptical Curve Cryptography (ECC) </option>
            </select>


        </fieldset>

        <fieldset>           
            <a href="DomainParamAssurance.php">
                <button>Next</button>
            </a>                
        
            <a href="Home.php">
                    <button>Home</button>
            </a>
        </fieldset>


    </body>

</html>









