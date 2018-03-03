<html>
    <head>
        <link rel="shortcut icon" href="logo56.jpg" type="image/x-icon" />
        <title>Generation of Key Pairs for Symmetric-Key Algorithms</title>
        <link href="content/app.css" rel="stylesheet"/>
        <script src="scripts/app.js" type="application/javascript"></script>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
    </head>

    <body>
        <header class="container-fluid">
            <h1>Generation of Key Pairs for Symmetric-Key Algorithms</h1>    
        </header>

        <fieldset>
            <legend>
                <p>Please choose the method of generation of symmetric keys:</p>                   
            </legend>

            <select onchange="location = this.options[this.selectedIndex].value;">  
                    <option value=".php">Direct Generation of Symmetric Keys</option>
                    <option value=".php">Symmetric Keys Generated Using Key-Agreement Schemes</option>
                    <option value=".php">Symmetric Keys Derived From a Pre-shared Key</option> 
                    <option value=".php">Symmetric Keys Derived From Passwords</option> 
                    <option value=".php">Symmetric Keys Produced by Combining Multiple Keys and Other Data</option> 
                </select>

            <ul>                
                <li>Distributing the Generated Symmetric Key</li>
                <li>Replacement of Symmetric Keys</li>
                
            </ul>        

        </fieldset>

        <fieldset>           
            <a href="KeyGeneration.php">
                <button>Key Generation</button>
            </a>                
        
            <a href="Home.php">
                    <button>Home</button>
            </a>
        </fieldset>


    </body>

</html>









