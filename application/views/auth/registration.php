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
  <section class="showcase">
    <div class="container">
      <div class="pb-2 mt-4 mb-2 ">
        <h2>Inscription</h2>
      </div> 
      <form action="<?php print site_url();?>auth/actionRegister" class="remember-login-frm" id="remember-login-frm" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">
		<div class="row"><ul style="color: #CB0000"><?php echo validation_errors('<li>', '</li>'); ?></div>
        <!--Form with header-->
            <div class="card border-info rounded-0">
                
                <div class="card-body p-3">                
                    <!--Body-->
                    

            <!-- mail input  -->
                <div class="form-group ">
                    <div class="col" ">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email *" style="border:solid 1px #707070;">
                    </div>
                </div>

            <!-- Password input-->
                <div class="form-group">
                    <div class="col" style="padding-top: 5%;">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password *" style="border:solid 1px #707070;">
                    </div>
                </div>


            <!-- Password conf input-->
            <div class="form-group">
                    <div class="col" style="padding-top: 5%;">
                        <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Confirm Password *" style="border:solid 1px #707070;">
                    </div>
                </div>

                   
                   
                   
                                                       
                    <div class="text-center">
                        <button type="submit" id="contact-send-a" class="btn btn-info btn-block rounded-0 py-2">Register</button>
                    </div>
                    
                </div>
            </div> 
          </div>
        </div>
    </form>
    </div>
  </section>     
