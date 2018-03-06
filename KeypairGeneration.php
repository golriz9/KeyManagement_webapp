<html>
    <head>
        <link rel="shortcut icon" href="logo56.jpg" type="image/x-icon" />
        <title>Key Pair Generation</title>
        <link href="content/app.css" rel="stylesheet"/>
        <script src="scripts/app.js" type="application/javascript"></script>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
    </head>

    <body onbeforeunload='resetSelect()'>
        <header class="container-fluid">
            <h1>Key Pair Generation</h1>    
        </header>

        <fieldset>
            <legend>
                <p>Prior to performing key-pair generation with the selected domain parameters,
                    the party generating the key pair <b>shall</b> obtain assurance of domain-parameter
                    validity.</p>                   
            </legend>


            <select onchange="location = this.options[this.selectedIndex].value;">
                <option>Please select the key-pair generation method:</option>
                <option value="FFCKeypairGen.php">FFC key-pair generation</option>
                <option value="ECCKeypairGen.php">ECC key-pair generation</option>                
             </select>


        </fieldset>

        <fieldset>      
            <button onclick="history.go(-1);">Back </button>      
            <a href="RequiredAssurance.php">
                <button>Next</button>
            </a>                
        
            <a href="Home.php">
                    <button>Home</button>
            </a>
        </fieldset>


    </body>

</html>




