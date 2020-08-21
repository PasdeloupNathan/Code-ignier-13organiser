<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
    <meta charset="utf-8">
	<title>Aller l'OM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>


 <style type="text/css">

body{
    text-align:center;
}
form{
    text-align:center;
}

</style>



 <!-- container --> 
  <section class="showcase animate__animated animate__backInUp" >
    <div class="container">
      <div class="pb-2 mt-4 mb-2 ">
        
      </div> 
      <form action="<?php print site_url();?>auth/doLogin" class="remember-login-frm" id="remember-login-frm" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">
		<div class="row"><?php echo validation_errors('<div class="col-12 col-md-12 col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div></div>'); ?></div>
        <!--Form with header-->
            <div class="card border-info rounded-0">
                
            <legend style="padding-top: 15%;">Connectez-Vous</legend>

                <div class="card-body p-3">                
                    
                <!-- Text input-->
                <div class="form-group ">
                    <div class="col" style="padding-top: 15%;">
                        <input id="textinput" name="textinput" type="email" placeholder="Email" class="form-control input-md" required="" style="border:solid 1px #707070;" value="<?php if(isset($_COOKIE["loginId"])) { echo $_COOKIE["loginId"]; } ?>">

                    </div>
                </div>



                    <!-- Password input-->
                <div class="form-group">
                    <div class="col" style="padding-top: 5%;">
                        <input id="" name="" type="password" placeholder="Mot de passe" class="form-control input-md" required="" style="border:solid 1px #707070;" value="<?php if(isset($_COOKIE["loginPass"])) { echo $_COOKIE["loginPass"]; } ?>">

                    </div>
                </div>                              
                    
                    <div class="form-group">
                        <div class="checkbox">
                                                              
                        </div>
                    </div>
                    
                <!-- Button -->
                <div class="form-group text-center">
                    <div class="col" style="padding-top: 7.5%;">
                        <button type="submit" id="contact-send-a" name="" class="btn btn-info btn-block rounded-0 py-2" style="width: 100%;background-color: #ffffff;color: #707070;border:solid 1px #707070;">Connectez-Vous</button>
                    </div>
                </div>

                   
                    <br>
                    <a href="<?= site_url("index.php/auth/registration"); ?>">Pas encore inscrit ? Inscrivez-vous.</a>

                </div>
            </div> 
          </div>
        </div>
    </form>
    </div>
  </section>

  
 <?php $this->load->view('templates/footer');?>        
