<html>
    <head>
        <link rel="shortcut icon" href="logo56.jpg" type="image/x-icon" />
        <title>Generation of Key Pairs for Asymmetric-Key Algorithms</title>
        <link href="content/app.css" rel="stylesheet"/>
        <script src="scripts/app.js" type="application/javascript"></script>
    </head>

    <body onbeforeunload='resetSelect()'>
        <header class="container-fluid">
            <h1>Generation of Key Pairs for Asymmetric-Key Algorithms</h1>    
        </header>

        <fieldset>
            <!--<legend></legend>-->
            <p>Asymmetric-key algorithms, also known as public-key algorithms, require the use of asymmetric
                key pairs, consisting of a private key and a corresponding public key. The key to be used for
                each operation depends on the cryptographic process being performed (e.g., digital-signature
                generation or verification). Each public/private key pair is associated with only one entity;
                this entity is known as the key-pair owner. The public key may be known by anyone, whereas the
                private key must be known and used only by the key-pair owner.</p>

            <p>Key pairs <b>shall</b> be generated by:
                <ul>
                    <li>The key-pair owner, or </li>
                    <li>A Trusted Party that provides the key pair to the owner in a secure manner. The Trusted Party must be trusted by all parties that use the public key. </li>
                </ul>
            </p>



            <select onchange="location = this.options[this.selectedIndex].value;">
                <option>Please select the key pairs scheme:</option>
                <option value="KeypairForDigitSign.php">Key Pairs for Digital Signature Schemes</option>
                <option value="KeypairForKeyEstab.php">Key Pairs for Key Establishment</option>
                <option value="DistributKeyPairs.php">Distributing the Key Pairs</option>
            </select>


        </fieldset>

        <fieldset>         
            <button onclick="history.go(-1);">Back </button>            
            <a href="KeyGeneration.php">
                <button>Key Generation</button>
            </a> 
            <a href="Home.php">
                <button>Home</button>
            </a>
        </fieldset>


    </body>

</html>









