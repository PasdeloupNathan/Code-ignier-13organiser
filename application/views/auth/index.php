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


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
.title {
  color: grey;
  font-size: 18px;
}
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #3498DB;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
button:hover, a:hover {
  opacity: 0.9;
}
</style>
 <!-- container --> 
  <section class="showcase">
    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2></h2>
      </div>
      <span id="success-msg"></span>       
      <form action="<?php print site_url();?>auth/doLogin" class="remember-login-frm" id="remember-login-frm" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <div class="card">          
  <img src="<?php print HTTP_IMAGE_PATH;?>blank-profile.png" alt="John" style="height:120px; width:100%">
  <br>
  <h3><?php print $this->session->userdata('ci_seesion_key')['first_name']; ?></h3>
  <p class="title"><?php print $this->session->userdata('ci_seesion_key')['address']; ?></p>
  <?php if($this->session->userdata('ci_seesion_key')) { ?>
    <p><?php print $this->session->userdata('ci_seesion_key')['email']; ?></p>
  <?php } ?>
  <div style="margin: 10px 0;">    
    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-linkedin"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
  </div>
  <p><a href="<?php print site_url();?>auth/logout" class="button">Logout</a></p>
</div>
    </form>
    </div>
  </section>
 <?php $this->load->view('templates/footer');?>        
