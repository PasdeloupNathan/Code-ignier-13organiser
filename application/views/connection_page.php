<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
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
                <legend style="padding-top: 15%;">Connectez-Vous</legend>

                <!-- Text input-->
                <div class="form-group ">
                    <div class="col" style="padding-top: 15%;">
                        <input id="textinput" name="textinput" type="email" placeholder="Email" class="form-control input-md" required="" style="border:solid 1px #707070;" value="<?php if(isset($_COOKIE["loginId"])) { echo $_COOKIE["loginId"]; } ?>">

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <div class="col" style="padding-top: 5%;">
                        <input id="" name="" type="password" placeholder="Mot de passe" class="form-control input-md" required="" style="border:solid 1px #707070;" >

                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <div class="col" style="padding-top: 7.5%;">
                        <button id="" name="" class="btn btn-primary" style="width: 100%;background-color: #ffffff;color: #707070;border:solid 1px #707070;">Connectez-Vous</button>
                    </div>
                </div>


                <div style="padding-top: 5%;">
                    <a href="<?= site_url("inscription/indexins"); ?>">Pas encore inscrit ? Inscrivez-vous.</a>
                </div>
                </div>
            </fieldset>
        </form>
    </div>


</body>
</html>
