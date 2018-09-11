<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/css/style1.css?<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/home/css/style.css?<?php echo time(); ?>" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/home/css/navbar.css?<?php echo time(); ?>" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/home/css/footer.css?<?php echo time(); ?>" rel="stylesheet">
  
  <style>
  @media (min-width: 768px) {
  .navbar .nav > .active > a, .navbar .nav > .active > a:hover {
      margin-top: 5px !important;
  }
  .nav.navbar-nav.navbar-right {
    padding-top: 10px !important;
  }
}
</style>

</head>

<body>
    
<div class="wrapper">
  <header>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="http://compassionatekeralam.org/" style="outline: none;"><img src="<?php echo base_url(); ?>assets/ck_logo.png" class="hidden-sm hidden-md hidden-lg kc-logo" style="margin-left: 12%;margin-top: 2%;width: 40%;"></a>
          <a href="<?php echo base_url(); ?>home">
            <div class="logo">
              <img src="<?php echo base_url(); ?>assets/home/img/together.png" class="logo-top">
              <span class="hidden-xs logo-text">together we begin</span>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index">Home</a></li>
            <li><a href="services">Services</a></li>
            <li><a href="contact">Contact Us</a></li>
            <li class="hidden"><a href="statistics">Statistics</a></li>
            <li>
              <?php 
              if (is_null($this->session->userdata('user_id'))) { 
              echo '<a href="'.base_url().'login">Login</a>';
              } else {
              echo '<a href="'.base_url().'logout">Logout</a>';
              }
              ?>
            </li>
          </ul>
          <a href="http://compassionatekeralam.org/" style="outline: none;"><img src="<?php echo base_url(); ?>assets/ck_logo.png" class="visible-lg" style="margin-left: 38%;margin-top: 0%;width: 18%;"></a>
        </div>
      </div>
    </nav>
  </header>
</div>

<div class="gen-sign">
<div class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="home" style="font-size: 26px;">Together <b>we</b> begin !</a>
            <a href="home" style="font-size: 26px;">നമുക്കൊരുമിച്ചു തുടങ്ങാം !</a>
            <!--<small>Rise together</small>-->
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST">
                    <div class="msg">രജിസ്റ്റർ ചെയ്യുക</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Name / പേര്" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email / ഇ-മെയിൽ" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password / പാസ്സ്‌വേർഡ്" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Password / പാസ്സ്‌വേർഡ്" required>
                        </div>
                    </div>
                    <div class="form-group">
                       
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">ഞാൻ <span  data-toggle="modal" data-target="#largeModal">ഉപയോഗ നിബന്ധനകൾ</span> അംഗീകരിക്കുന്നു</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Register / രജിസ്റ്റർ ചെയ്യൂ</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="signin">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="container-fluid footer-content">
  <div>
      <p><span>Affiliated with</span><!-- <i class="fa fa-heart"></i> --></p>
      <p><span><a href="http://compassionatekeralam.org/" style="outline: none;"><img src="<?php echo base_url(); ?>assets/ck_logo.png" class="logo-kc"></a></span></p>
      <a class="hidden" href="home">Compassionate Kerala</a>
  </div>
</div>

    <!-- Large Size -->
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Terms and Conditions</h4>
                        </div>
                        <div class="modal-body">
                            As a condition of use you promise not use the Services for any purpose that is unlawful or prohibited by these terms, or any other purpose not reasonably intended by. By way of example ,and not as a limitation ,you agree not to use the services:
                            <br><br><ul>
                                <li>To abuse, harass, threaten, impersonate ,intermediate any person. </li>
                                <li>To post or transmit or cause to be posted or transmitted any content that is libelous, defamatory, obscene, abusive, offensive profile of that infringes any copyright or are the right of any person. </li>
                                <li>To post or transmit or cause to be posted or transmitted in communication or solicitation designed or intended to obtain password account or private information from any user. </li>
                                <li>To create or transmit unwanted spam to any person. </li>
                                <li>To provide inaccurate information within your knowledge. </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>

    <!-- Large Size -->
            
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/formbsb/js/pages/examples/sign-up.js"></script>
    <script src="<?php echo base_url(); ?>assets/formbsb/js/pages/ui/modals.js"></script>
    
    



   
</body>

</html>