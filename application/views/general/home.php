<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Together We Begin!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Rebuild Kerala" />
  <meta name="author" content="Sreenath B S" />


  <link href="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- <link href="<?php echo base_url(); ?>assets/home/css/bootstrap-responsive.css" rel="stylesheet" /> -->
  <!-- <link href="<?php echo base_url(); ?>assets/home/css/prettyPhoto.css" rel="stylesheet" /> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> -->
  <link href="<?php echo base_url(); ?>assets/home/css/style.css?<?php echo time(); ?>" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/home/css/navbar.css?<?php echo time(); ?>" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/home/css/footer.css?<?php echo time(); ?>" rel="stylesheet">

  <!-- Theme skin -->
  <!-- <link id="t-colors" href="<?php echo base_url(); ?>assets/home/color/default.css" rel="stylesheet" /> -->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/home/ico/favicon.png" />

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

    <!-- section intro -->
    <div id="intro">
      <div class="intro-content">
        <h2 class="hidden-xs" style="line-height: 10px;">Together we begin !</h2>
        <h2 class="hidden-xs">നമുക്കൊരുമിച്ചു തുടങ്ങാം !</h2>
        <h2 class="visible-xs" style="line-height: 5px;">Together we begin !</h2>
        <h2 class="visible-xs">നമുക്കൊരുമിച്ചു തുടങ്ങാം !</h2>
        <h3>Let us rebuild Kerala </br> കേരളത്തെ പുനർനിർമ്മിക്കാം</h3>
        <div class="row home-btns">
            <!--<div class="span3"></div>-->
          <div class="span3">
            <a href="offer_service" class="btn-get-started scrollto">Offer Service | സേവനം നൽകുക</a>
          </div>
<!--          <div class="hidden span4">
            <a href="request_service" class="btn-get-started scrollto">Request Service</a>
          </div>-->
          <div class="span3">
            <a href="nearby" class="btn-get-started scrollto">Find Service | സേവനം കണ്ടുപിടിക്കുക</a>
          </div>
        </div>
        <p class="hidden-xs" style="color:white;position: relative; bottom:0%; width:100%; text-align: center">ഈ പ്രളയസമയത്ത് സേവനങ്ങൾ ആവശ്യമുള്ളവരെയും സേവനങ്ങൾ നൽകാൻ താൽപ്പര്യം ഉള്ളവരെയും തമ്മിലെ സഹകരണത്തിന് വേണ്ടി വികസിപ്പിച്ചെടുത്തതാണ് ഈ വെബ് സൈറ്റ്. ഇതിലെ വിവരങ്ങളിലെ പൂർണ്ണത, കൃത്യത, രജിസ്റ്റർ ചെയ്ത ആളുകളുടെ കഴിവുകൾ എന്നിവയിൽ ഒരു തരത്തിലെയും ഉറപ്പ് ഞങ്ങൾ നൽകുന്നില്ല. എന്നാൽ ഈ വിവരങ്ങളുടെ കൃത്യത ഉറപ്പ് വരുത്താൻ ഞങ്ങൾ നിരന്തരം ശ്രമിക്കുന്നു. ഈ വെബ്സൈറ്റ് ഉപയോഗിക്കുമ്പോൾ മേൽ പറഞ്ഞവ അറിഞ്ഞു, അവ പൂർണമായി അംഗീകരിച്ചു കൊണ്ട് മാത്രം മുന്നോട്ട് പോവുക.</p>
        <p class="hometnc m-r-20" style="color:white;position: relative; bottom:0%; width:100%; text-align: center" data-toggle="modal" data-target="#myModal">ഉപയോഗ നിബന്ധനകൾ</p>
        
        <!-- Large Size -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-backdrop="false">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">ഉപയോഗ നിബന്ധനകൾ</h4>
                        </div>
                        <div class="modal-body" style="text-align: initial;">
                            ഈ പ്രളയസമയത്ത് സേവനങ്ങൾ ആവശ്യമുള്ളവരെയും സേവനങ്ങൾ നൽകാൻ താൽപ്പര്യം ഉള്ളവരെയും തമ്മിലെ സഹകരണത്തിന് വേണ്ടി വികസിപ്പിച്ചെടുത്തതാണ് ഈ വെബ് സൈറ്റ്. ഇതിലെ വിവരങ്ങളിലെ പൂർണ്ണത, കൃത്യത, രജിസ്റ്റർ ചെയ്ത ആളുകളുടെ കഴിവുകൾ എന്നിവയിൽ ഒരു തരത്തിലെയും ഉറപ്പ് ഞങ്ങൾ നൽകുന്നില്ല. എന്നാൽ ഈ വിവരങ്ങളുടെ കൃത്യത ഉറപ്പ് വരുത്താൻ ഞങ്ങൾ നിരന്തരം ശ്രമിക്കുന്നു. ഈ വെബ്സൈറ്റ് ഉപയോഗിക്കുമ്പോൾ മേൽ പറഞ്ഞവ അറിഞ്ഞു, അവ പൂർണമായി അംഗീകരിച്ചു കൊണ്ട് മാത്രം മുന്നോട്ട് പോവുക.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="tnc-close btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>


    <!-- Large Size -->
           
      </div>
    </div>
    <!-- /section intro -->
<!-- <div class="wrapper">
  <div class="footer-bottom ">
          <img style="width: 10%;float: right;" src="http://localhost/flood/assets/ck_logo.png" class="ck_logo">
      </div>
</div> -->

<div class="container-fluid footer-content">
  <div>
      <p><span>Affiliated with</span><!-- <i class="fa fa-heart"></i> --></p>
      <p><span><a href="http://compassionatekeralam.org/" style="outline: none;"><img src="<?php echo base_url(); ?>assets/ck_logo.png" class="logo-kc"></a></span></p>
      <a class="hidden" href="home">Compassionate Kerala</a>
  </div>
</div>


  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/formbsb/js/pages/ui/modals.js"></script> -->
<!--   <script src="<?php echo base_url(); ?>assets/home/js/modernizr.custom.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/toucheffects.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/google-code-prettify/prettify.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/jquery.prettyPhoto.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/portfolio/jquery.quicksand.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/portfolio/setting.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/animate.js"></script> -->
    
  <script>
    $(document).ready(function(){
            $('.tnc-close').on('click', function() {
              console.log(22);
              $("#myModal").modal("hide"); 
            });
        });
      </script>

  <!-- Template Custom JavaScript File -->
  <!-- <script src="js/custom.js"></script> -->

</body>

</html>