<html>
    <head>
        <link rel="shortcut icon" href="logo56.jpg" type="image/x-icon" />
        <title>Distributing the Kay Pairs</title>
        <link href="content/app.css" rel="stylesheet"/>
        <script src="scripts/app.js" type="application/javascript"></script>
    </head>

    <body>
        <header class="container-fluid">
            <h1>Distributing the Kay Pairs</h1>    
        </header>

        <fieldset>
            <p>
                The private key <b>shall</b> be kept secret. It <b>shall</b> either be generated:
                <ol>
                    <li>within the key-pair owner’s cryptographic module (i.e., the key-pair owner’s key-generating module), or </li> 
                    <li>within the cryptographic module of an entity trusted by the key-pair owner and any relying party not to misuse
                        the private key or reveal it to other entities (i.e., generated within the key-generating module of a Trusted
                        Party, and securely transferred to the key-pair owner’s cryptographic module).</li>
                </ol>   
            </p>

            <p> 
                If a private key is ever output from a cryptographic module, the key <b>shall</b> be output and transferred in a form 
                and manner that provides appropriate assurance of its confidentiality and integrity.
            </p>
            <p>           
                The protection <b>shall</b> provide appropriate assurance that only the key-pair owner and/or the party that generated
                the key pair will be able to determine the value of the plaintext private key (e.g., the confidentiality and integrity
                protection for the private key uses a cryptographic mechanism that is at least as strong as the (maximum) security 
                strength that must be supported by the asymmetric algorithm that will use the private key).
            </p>

            <p>
                The public key of a key pair may be made public. However, it shall be distributed and verified in a manner that assures 
                its integrity and association with the key-pair owner (e.g., using a X.509 certificate that provides a level of 
                cryptographic protection that is at least as strong as the security strength associated with the key pair).
            </p>            
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









