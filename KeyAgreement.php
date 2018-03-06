<html>
    <head>
        <link rel="shortcut icon" href="logo56.jpg" type="image/x-icon" />
        <title>Key Agreement</title>
        <link href="content/app.css" rel="stylesheet"/>     
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->           
    </head>

    <body onbeforeunload='resetSelect()'>
        <header class="container-fluid">
            <h1>Key Agreement</h1>    
        </header>
        <fieldset>
             <p>During a pair-wise key-agreement scheme, the secret keying material to be established is not 
                sent directly from one entity to another. Instead, the two parties exchange information from 
                which they each compute a shared secret that is used (along with other exchanged/known data)
                to derive the secret keying material.</p> 
                <p>The method used to combine the information made available to both parties provides
                assurance that neither party can control the output of the key-agreement process (neither party
                can predetermine the value of the secret keying material independently from the contributions 
                of the other party.) Contrast with key-transport. </p>
           

        
  
        </fieldset>

        <fieldset>
            <legend> <h2>Key Agreement Categories</h2></legend>
            
            <p>The classification of the categories is based on the number of ephemeral keys used by the 
                two parties to the key-agreement process, parties U and V. In category C(<i>i</i>e), parties <i>U</i> and 
                <i>V</i> have a total of <i>i</i> ephemeral key pairs.</p>
            <ol>
                <li><p>The first category, C(2e), consists of schemes requiring the generation of ephemeral key
                        pairs by both parties; a C(2e) scheme is suitable for an interactive key-establishment protocol.</p></li>
                <li><p>The second category, C(1e), consists of schemes requiring the generation of an ephemeral key pair by only one party;
                    a C(1e) scheme is suitable for a store-and-forward scenario, but may also be used in an interactive key-establishment protocol.</p>
                </li>
                <li><p>The third category, C(0e), consists of schemes that do not use ephemeral keys.</p> </li>
            </ol>
              
                  

            <p>Please select the type of the key agreement scheme:</p>
            <select onchange="location = this.options[this.selectedIndex].value;"  id="DropDownList">
                <option>Select the key agreement scheme:</option>
                <option value="KA_2e.php">Schemes Using Two Ephemeral Key Pairs, C(2e)</option>
                <option value="KA_1e.php">Schemes Using One Ephemeral Key Pair, C(1e)</option>
                <option value="KA_0e.php">Schemes Using No Ephemeral Key Pair, C(0e, 2s)</option>
            </select>  
           

                
            <p>Key confirmation may be added to many of the key agreement schemes to provide assurance that the 
                participants share the same keying material. Each party <b>should</b> have such assurance.</p>
            <a href="KeyConfirmation.php">
                <button>Key Confirmation</button>
            </a>

        </fieldset>


        <fieldset>
            <legend> <h2></h2></legend>
    
            <p>The approved key-agreement schemes are described in terms of the roles played by parties
                <i>U</i> and <i>V</i>.</p>
                <p> These are specific labels that are used to distinguish between the two participants
                engaged in key agreement irrespective of the actual labels that may be used by a protocol 
                employing a given approved key-agreement scheme. </p>

        </fieldset>

        <fieldset>
            <legend><h2>Key Agreement Process</h2>  </legend>
                <p>Sequence of steps for the key-agreement process</p>
                <ul>
                    <li>Obtain other party's static public key</li>
                    <li>Obtain required assurance for other party's static public key</li>
                    <li>Generate shared secret and drive keying material</li>
                    <li>Complete key confirmation</li>
                    <li>Obtain assurance of possession of private keys</li>
                    <li>Destroy shared secret, ephemeral private key, etc</li>
                </ul>
                <p>The approved key-agreement schemes are described in terms of the roles played by parties
                <i>U</i> and <i>V</i>.</p>
                <p> These are specific labels that are used to distinguish between the two participants
                engaged in key agreement irrespective of the actual labels that may be used by a protocol 
                employing a given approved key-agreement scheme. </p>
           

            <button onclick="history.go(-1);">Back </button> 
            <a href="Home.php">
                <button>Home</button>
            </a>
        </fieldset>

    </body>

</html>