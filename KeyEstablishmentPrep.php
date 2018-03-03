<html>
    <head>
        <link rel="shortcut icon" href="logo56.jpg" type="image/x-icon" />
        <title>Key Establishment Preparation</title>
        <link href="content/app.css" rel="stylesheet"/>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
    </head>

    <body>
        <header class="container-fluid">
            <h1>Key-Establishment Preparations</h1>    
        </header>

        <fieldset>
            <legend><p>The owner of a private/public key pair is the entity that is authorized to use the private key
                of that key pair. The precise steps required may depend upon the key-establishment scheme
                and the type of key pair (static or ephemeral).</p>   
                <ol>
                    <li>Obtain domain parameters</li>
                    <li>Obtain assurance of domain parameter validity</li>
                    <li>Depending on the scheme:</li>
                    <ul>
                        <li>For static key pair</li>
                        <ul>
                            <li>Obtain static key pair</li>
                            <li>Establish trusted association with identifiers</li>
                        </ul>
                        <li>For ephemeral key pair</li>
                        <ul>
                            <li>Generate ephemeral key pair</li>                            
                        </ul>
                    </ul>
                    
                    <li>Obtain required assurances </li>
                </ol>
                <p>Now, you are ready for key establishment.</p>
            </legend>
        </fieldset>

        <fieldset>
                <a href="ObtainDomainParam.php">
                    <button>Next</button>
                </a>   
         
                <a href="Home.php">
                        <button>Home</button>
                </a>
        </fieldset>

    </body>

</html>