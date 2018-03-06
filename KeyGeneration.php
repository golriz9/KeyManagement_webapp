<html>
    <head>
        <link rel="shortcut icon" href="logo56.jpg" type="image/x-icon" />
        <title>Key Generation</title>
        <link href="content/app.css" rel="stylesheet"/>
        <script src="scripts/app.js" type="application/javascript"></script>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
    </head>
    <body onbeforeunload='resetSelect()'>
        <header class="container-fluid">
            <h1>Key Generation</h1>    
        </header>
       

        <fieldset>
            <h2>Requirements for where keys should be generated:</h2>
            <ul>
                <li>All keys <b>shall</b> be based directly or indirectly on the output of an approved Random Bit Generator (RBG).</li>
                <li>Cryptographic keys <b>shall</b> be generated within FIPS 140-compliant cryptographic modules [FIPS 140].</li>
                <li>Any random value required by the key-generating module <b>shall</b> be generated within that module.</li>
                <li>The RBG (or portion of the RBG) that generates the random value <b>shall</b> be implemented within the
                    FIPS-140 cryptographic module that generates the key.</li>
                <li>The generated keys <b>shall</b> be transported (when necessary) using secure channels and <b>shall</b> be used
                    by their associated cryptographic algorithm within FIPS 140-compliant cryptographic modules.</li>
    
            </ul>

           
            <h2>Methods of Key Generation</h2>
            <select onchange="location = this.options[this.selectedIndex].value;" id="DropDownList">
                <option>Please select the method of key generation:</option>
                <option value="RBG.php">Generation of a key using the output of an RBG</option>
                <option value="">Derivation of a key from another key (indirectly generated from RBG)</option>
                <option value="">Derivation of a key from a password for storage application (indirectly generated from RBG)</option>
                <option value="KeyAgreement.php">Key agreement transaction (indirectly generated from RBG)</option>               
            </select>
        </fieldset>

        <fieldset>
            <h2>Supporting a Security Strength</h2>
            <p>A method supports a given security strength if the security strength provided by that method is equal to 
            or greater than the security strength required for protecting the target data; the actual security strength
            provided can be higher than required.</p>

            <ul>
                <li>Security strength supported by an algorithm:</li>
                <li>Security strength supported by a key:</li>
            </ul>

        </fieldset>
        
        <fieldset>
            <legend><h2>Key Type Generation</h2></legend>
            <a href="AsymmetricKeyPairs.php">
                <button>Asymmetric</button>
            </a>
            <a href="SymmetricKeyPairs.php">
                <button>Symmetric</button>
            </a>
        </fieldset>


        <fieldset>
            <legend><p></p></legend>
            <button onclick="history.go(-1);">Back </button> 
            <a href="Home.php">
                <button>Home</button>
            </a>
        </fieldset>
    </body>

</html>