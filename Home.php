<!DOCTYPE html>
<html>

    <head>
        <link rel="shortcut icon" href="Handshake-icon.png" type="image/x-icon" />
        <title>Key Management</title>
        <link href="content/app.css" rel="stylesheet"/>
        <script src="scripts/app.js" type="application/javascript"></script>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
    </head>

<body>

    <header class="container-fluid">
        <h1>Key Management</h1>    
    </header>
 
        <fieldset>
            <legend><h2>Key Generation</h2></legend>
            <p>The keys are either generated using mathematical processing on the output of approved Random Bit Generators and possibly other parameters,
                or generated based upon keys that are generated in this fashion.
            </p> 
            <a href="KeyGeneration.php">
                <button>Key Generation</button>
            </a>
        </fieldset>

 <fieldset>
            <legend><h2>Key Establishment</h2></legend>
            <p>Secret cryptographic keying material may be electronically 
                established between parties by using a key-establishment scheme, that is, 
                by using either a key-agreement scheme or a key-transport scheme.</p>

            <a href="KeyEstablishmentPrep.php">
                <button>Key Establishment Preparations</button>
            </a>
        
            <a href="KeyAgreement.php">
                <button>Key Agreement</button>
            </a>

            <a href="KeyTransport.php">
                <button>Key Transport</button>
            </a>

            <a href="KE_Security.php">
                <button>Security of Key-Establishment Scheme</button>
            </a>
        </fieldset>

        <fieldset>
            <legend><h2>Key Derivation</h2></legend>
            <a href="KeyDerivation.php">
                <button>Key Derivation</button>
            </a>
        </fieldset>

        <fieldset>
            <legend><p></p></legend>
            <a href="Assurance.php">
                <button>Assurance</button>
            </a>

        </fieldset>
        
        
        <footer class="container-fluid">
            <p>Copyright 2018 Penumbra Security, Inc.</p>
            <p {{ timestamp }}></p>
        </footer>
       

</body>
</html> 

