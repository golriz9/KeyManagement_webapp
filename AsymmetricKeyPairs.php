<html>
    <head>
        <link rel="shortcut icon" href="logo56.jpg" type="image/x-icon" />
        <title>Generation of Key Pairs for Asymmetric-Key Algorithms</title>
        <link href="content/app.css" rel="stylesheet"/>
        <script src="scripts/app.js" type="application/javascript"></script>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
    </head>

    <body>
        <header class="container-fluid">
            <h1>Generation of Key Pairs for Asymmetric-Key Algorithms</h1>    
        </header>

        <fieldset>
            <legend>
                <p>Please select th key pairs scheme:</p>                   
            </legend>


            <select onchange="location = this.options[this.selectedIndex].value;">
                <option value=".html">Key Pairs for Digital Signature Schemes</option>
                <option value=".html">Key Pairs for Key Establishment</option>
                <option value=".html">Distributing the Key Pairs</option>
            </select>


        </fieldset>

        <fieldset>                    
            <a href="Key Generation.html">
                <button>Key Generation</button>
            </a> 
            <a href="Home.html">
                    <button>Home</button>
            </a>
        </fieldset>


    </body>

</html>









