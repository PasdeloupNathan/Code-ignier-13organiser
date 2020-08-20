<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
    <meta charset="utf-8">
	<title>Aller l'OM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>

<style type="text/css">

body{
    text-align:center;
}
form{
    margin-left:32%;
    text-align:center;
}

</style>




<body>  
<div class="row conect" style="width: 100vw;">

        
        <form class="form-horizontal col-md-4 animate__animated animate__backInUp">
            <fieldset>


                <!-- Form Name -->
                <legend style="padding-top: 15%;">Inscrivez-vous</legend>

                <!-- Text input-->
                <div class="form-group ">
                    <div class="col" style="padding-top: 15%;">
                        <input id="textinput" name="textinput" type="email" placeholder="Email" class="form-control input-md" required="" style="border:solid 1px #707070;">

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <div class="col" style="padding-top: 5%;">
                        <input id="" name="" type="password" placeholder="Mot de passe" class="form-control input-md" required="" style="border:solid 1px #707070;">

                    </div>
                </div>

                <!-- File Button --> 
                <div class="form-group row" style="padding-top: 5%;">
                    <div class="col-md-3">
                        <p style="width: 13vw;">Choisisez une image:</p>
                    </div>
                    <div class="col-md-3">
                        <input id="filebutton" name="filebutton" class="input-file" type="file" style="padding-left: 51%;" >
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <div class="col" style="padding-top: 5%;">
                        <button id="" name="" class="btn btn-primary" style="width: 100%;background-color: #ffffff;color: #707070;border:solid 1px #707070;">Inscrivez-vous</button>
                    </div>
                </div>

                <div style="padding-top: 5%;">
                    <a href="<?= site_url("connection/index"); ?>">Deja inscrit ? Connectez-vous.</a>
                </div>

                </div>
            </fieldset>
        </form>
    </div>


</body>
</html>
