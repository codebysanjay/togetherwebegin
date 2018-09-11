<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Rebuild Kerala" />
    <meta name="author" content="Sreenath B S" />
    <title>Offer a Service | Together We Begin!</title>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/home/ico/favicon.png" />


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/css/style.css?<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/home/css/navbar.css?<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/home/css/footer.css" rel="stylesheet">
    <style>.dropdown-menu.inner {max-height: 35vh !important;}</style>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <!-- <link href="<?php echo base_url(); ?>assets/formbsb/css/themes/all-themes.css" rel="stylesheet" /> -->
<style>
  @media (min-width: 768px) {
    .navbar .nav > .active > a, .navbar .nav > .active > a:hover {
        margin-top: 5px !important;
    }
    .nav.navbar-nav.navbar-right {
      padding-top: 10px !important;
    }
  }
  @media (max-width: 480px) {
    .footer-content div p{
      margin-top: 20px !important;
    }
    .footer-content{
      margin-top: 75px !important;
    }
  }
</style>

</head>

<body>
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->

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
          <img src="<?php echo base_url(); ?>assets/ck_logo.png" class="hidden-sm hidden-md hidden-lg kc-logo" style="margin-left: 12%;margin-top: 2%;width: 40%;">
          <a href="<?php echo base_url(); ?>home">
            <div class="logo">
              <img src="<?php echo base_url(); ?>assets/home/img/together.png" class="logo-top">
              <span class="hidden-xs logo-text">together we begin</span>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index">Home</a></li>
            <li class="active"><a href="services">Services</a></li>
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


    




    <section class="content" style="margin: 50px 50px -25px 50px;">

            
            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-sm-offset-1 col-sm-10 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Offer a Service | Spread Smile :)</h2>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST">
                                <h3><span class="hidden-xs">വ്യക്തിപരമായ വിവരങ്ങൾ</span><span class="hidden-xs"> </span></h3>
                                <fieldset class="organization" style="padding-top: 30px;">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <input type="text" class="form-control" name="fname" required>
                                                    <label class="form-label">First Name / പേര്*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <input type="text" class="form-control" name="lname" required>
                                                    <label class="form-label">Father's Name / അച്ഛന്റെ പേര്*</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <input type="text" class="form-control" name="company" required>
                                                    <label class="form-label">Organization Name / സ്ഥാപനത്തിന്റെ പേര്*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <input type="text" class="form-control" name="mobnum" required>
                                                    <label class="form-label">Contact Number / ബന്ധപ്പെടേണ്ട നമ്പർ*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <select name="owndistrict" class="form-control show-tick" required="true">
                                                        <option selected disabled>District / ജില്ല</option>
                                                        <option>Thiruvananthapuram</option>
                                                        <option>Kollam</option>
                                                        <option>Pathanamthitta</option>
                                                        <option>Alappuzha</option>
                                                        <option>Kottayam</option>
                                                        <option>Idukki</option>
                                                        <option>Ernakulam</option>
                                                        <option>Thrissur</option>
                                                        <option>Palakkad</option>
                                                        <option>Malappuram</option>
                                                        <option>Kozhikode</option>
                                                        <option>Wayanad</option>
                                                        <option>Kannur</option>
                                                        <option>Kasaragod</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <textarea name="permaddr" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                                    <label class="form-label">Address / വിലാസം*</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </fieldset>

                                <h3><span class="hidden-xs">സേവന വിവരങ്ങൾ</span><span class="hidden-xs"></span></h3>
                                <fieldset class="service" style="padding-top: 30px;">
                                    
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <select class="district form-control show-tick" multiple data-live-search="false" data-selected-text-format="count" data-actions-box="true" name="district[]">
                                                        <option class="tohidedist" selected disabled>Districts / ജില്ലകൾ</option>
                                                        <option>Thiruvananthapuram</option>
                                                        <option>Kollam</option>
                                                        <option>Pathanamthitta</option>
                                                        <option>Alappuzha</option>
                                                        <option>Kottayam</option>
                                                        <option>Idukki</option>
                                                        <option>Ernakulam</option>
                                                        <option>Thrissur</option>
                                                        <option>Palakkad</option>
                                                        <option>Malappuram</option>
                                                        <option>Kozhikode</option>
                                                        <option>Wayanad</option>
                                                        <option>Kannur</option>
                                                        <option>Kasaragod</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <select class="taluk form-control show-tick" multiple data-live-search="false" data-selected-text-format="count" data-actions-box="true" name="taluk[]">
                                                        <option class="tohidetaluk" selected disabled>Taluks / താലൂക്കുകൾ</option>
                                                        <optgroup class="thiruvananthapuram" label="Thiruvananthapuram">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Thiruvananthapuram</option>
                                                            <option>Neyyattinkara</option>
                                                            <option>Kattakkada</option>
                                                            <option>Nedumangadu</option>
                                                            <option>Thiruvananthapuram</option>
                                                            <option>Chirayinkeezhu</option>
                                                            <option>Varkala</option>
                                                        </optgroup>
                                                        <optgroup class="kollam"label="Kollam">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Kollam</option>
                                                            <option>Kollam</option>
                                                            <option>Kunnathoor</option>
                                                            <option>Karunagappally</option>
                                                            <option>Kottarakkara</option>
                                                            <option>Punalur</option>
                                                            <option>Pathanapuram</option>
                                                        </optgroup>
                                                        <optgroup class="pathanamthitta" label="Pathanamthitta">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Pathanamthitta</option>
                                                            <option>Adoor</option>
                                                            <option>Konni</option>
                                                            <option>Kozhencherry</option>
                                                            <option>Ranni</option>
                                                            <option>Mallappally</option>
                                                            <option>Thiruvalla</option>
                                                        </optgroup>
                                                        <optgroup class="alappuzha" label="Alappuzha">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Alappuzha</option>
                                                            <option>Chengannur</option>
                                                            <option>Mavelikkara</option>
                                                            <option>Karthikappally</option>
                                                            <option>Kuttanadu</option>
                                                            <option>Ambalappuzha</option>
                                                            <option>Cherthala</option>
                                                        </optgroup>
                                                        <optgroup class="kottayam" label="Kottayam">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Kottayam</option>
                                                            <option>Changanasserry</option>
                                                            <option>Kottayam</option>
                                                            <option>Vaikkom</option>
                                                            <option>Meenachil</option>
                                                            <option>Kanjirappally</option>
                                                        </optgroup>
                                                        <optgroup class="idukki" label="Idukki">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Idukki</option>
                                                            <option>Peerumedu</option>
                                                            <option>Udumbanchola</option>
                                                            <option>Idukki</option>
                                                            <option>Thodupuzha</option>
                                                            <option>Devikulam</option>
                                                        </optgroup>
                                                        <optgroup class="ernakulam" label="Ernakulam">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Ernakulam</option>
                                                            <option>Kothamangalam</option>
                                                            <option>Kunnathunad</option>
                                                            <option>Kanayannur</option>
                                                            <option>Kochi</option>
                                                            <option>North Paravoor</option>
                                                            <option>Aluva</option>
                                                        </optgroup>
                                                        <optgroup class="thrissur" label="Thrissur">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Thrissur</option>
                                                            <option>Chalakudy</option>
                                                            <option>Mukundapuram</option>
                                                            <option>Kodungallur</option>
                                                            <option>Thrissur</option>
                                                            <option>Chavakkad</option>
                                                            <option>Kunnamkulam</option>
                                                            <option>Thalapilly</option>
                                                        </optgroup>
                                                        <optgroup class="palakkad" label="Palakkad">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Palakkad</option>
                                                            <option>Alathoor</option>
                                                            <option>Chittur</option>
                                                            <option>Palakkad</option>
                                                            <option>Pattambi</option>
                                                            <option>Ottappalam</option>
                                                            <option>Mannarkkadu</option>
                                                        </optgroup>
                                                        <optgroup class="malappuram" label="Malappuram">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Malappuram</option>
                                                            <option>Perinthalmanna</option>
                                                            <option>Nilambur</option>
                                                            <option>Eranad</option>
                                                            <option>Kondotty</option>
                                                            <option>Ponnani</option>
                                                            <option>Tirur</option>
                                                            <option>Thiroorangadi</option>
                                                        </optgroup>
                                                        <optgroup class="kozhikkode" label="Kozhikkode">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Kozhikkode</option>
                                                            <option>Kozhikode</option>
                                                            <option>Thamarassery</option>
                                                            <option>Koyilandy</option>
                                                            <option>Vatakara</option>
                                                        </optgroup>
                                                        <optgroup class="wayanad" label="Wayanad">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Wayanad</option>
                                                            <option>Vythiri</option>
                                                            <option>Sulthan Bathery</option>
                                                            <option>Mananthavady</option>
                                                        </optgroup>
                                                        <optgroup class="kannur" label="Kannur">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Kannur</option>
                                                            <option>Thalassery</option>
                                                            <option>Iritty</option>
                                                            <option>Kannur</option>
                                                            <option>Payyannur</option>
                                                            <option>Taliparamba</option>
                                                        </optgroup>
                                                        <optgroup class="kasargod" label="Kasargod">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Kasargod</option>
                                                            <option>Hosdurg</option>
                                                            <option>Vellarikundu</option>
                                                            <option>Kasaragod</option>
                                                            <option>Manjeswaram</option>
                                                        </optgroup>
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <select class="form-control show-tick" data-live-search="true" name="category">
                                                        <option selected disabled>Services / സേവനങ്ങൾ</option>
                                                        <option value="Carpentry">Carpentry / മരപ്പണി</option>
                                                        <option value="Civil">Civil / സിവിൽ</option>
                                                        <option value="Cleaning">Cleaning / വൃത്തിയാക്കൽ</option>
                                                        <option value="Electrical">Electrical / ഇലക്ട്രിക്കൽ</option>
                                                        <option value="Electronics">Electronics / ഇലക്ട്രോണിക്സ്</option>
                                                        <option value="Mechanical">Mechanical / മെക്കാനിക്കൽ</option>
                                                        <option value="Others">Others / മറ്റുള്ളവ</option>
                                                        <option value="Painting">Painting / പെയിന്റിംഗ്</option>
                                                        <option value="Plumbing">Plumbing / പ്ലംബിംഗ്</option>
                                                        <option value="Roofing">Roofing / റൂഫിംഗ്</option>
                                                        <option value="Transportation">Transportation / ഗതാഗതം</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <select class="form-control show-tick" multiple data-live-search="true" data-selected-text-format="count" data-actions-box="true" name="subcategory[]">
                                                        <option selected disabled>Select Sub-category/ies</option>
                                                        <optgroup label="Thiruvananthapuram">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Thiruvananthapuram</option>
                                                            <option>Neyyattinkara</option>
                                                            <option>Kattakkada</option>
                                                            <option>Nedumangadu</option>
                                                            <option>Thiruvananthapuram</option>
                                                            <option>Chirayinkeezhu</option>
                                                            <option>Varkala</option>
                                                        </optgroup>
                                                        <optgroup label="Kollam">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Kollam</option>
                                                            <option>Kollam</option>
                                                            <option>Kunnathoor</option>
                                                            <option>Karunagappally</option>
                                                            <option>Kottarakkara</option>
                                                            <option>Punalur</option>
                                                            <option>Pathanapuram</option>
                                                        </optgroup>
                                                        <optgroup label="Pathanamthitta">
                                                            <option disabled style="background: #5cb85c; color: #fff;">Pathanamthitta</option>
                                                            <option>Adoor</option>
                                                            <option>Konni</option>
                                                            <option>Kozhencherry</option>
                                                            <option>Ranni</option>
                                                            <option>Mallappally</option>
                                                            <option>Thiruvalla</option>
                                                        </optgroup>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <textarea name="remarks" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                                    <label class="form-label">Remarks / കൂടുതൽ വിവരങ്ങൾ*</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </fieldset>
                                

                                <h3><span class="hidden-xs">പൂർത്തിയാക്കുക</span></h3>
                                <fieldset style="padding-top: 30px;">
                                    <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                    <label for="acceptTerms-2">ഞാൻ നിബന്ധനകളും വ്യവസ്ഥകളും അംഗീകരിക്കുന്നു.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
    </section>

<!--<div class="container-fluid footer-content">-->
<!--  <div style="display: inline-block;">-->
<!--      <p class="hidden-xs" style="margin-top: -20px !important;"><span>Affiliated with</span><i class="fa fa-heart"></i></p>-->
<!--      <p class="visible-xs"><span>Affiliated with</span><i class="fa fa-heart"></i></p>-->
<!--      <p><span><a href="http://compassionatekeralam.org/" style="outline: none;"><img src="<?php echo base_url(); ?>assets/ck_logo.png" class="logo-kc"></a></span></p>-->
<!--      <a class="hidden" href="home">Compassionate Kerala</a>-->
<!--  </div>-->
<!--</div>-->

<div class="container-fluid footer-content">
  <div>
      <p style="margin-top: 0px !important;position: relative;left: -44%;" class="hidden-xs"><span>Affiliated with</span></p>
      <p class="visible-xs" style="margin-top: 0px !important;"><span>Affiliated with</span><!-- <i class="fa fa-heart"></i> --></p>
      <p><span><a href="http://compassionatekeralam.org/" style="outline: none;"><img src="<?php echo base_url(); ?>assets/ck_logo.png" class="logo-kc"></a></span></p>
      <a class="hidden" href="home">Compassionate Kerala</a>
  </div>
</div>

        
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/formbsb/js/pages/forms/form-wizard.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/js/demo.js"></script>


    <script>
    
        

        // js to be applied after document.ready
        $(document).ready(function(){
            $('.district').on('click', function() {
                $('.district').find('.tohidedist').removeAttr('selected');
                $('.district').selectpicker('refresh');
            });
            $('.taluk').on('click', function() {
                $('.taluk').find('.tohidetaluk').removeAttr('selected');
                $('.taluk').selectpicker('refresh');
            });
            // Border bottom for bootstrap-select
            $('.bootstrap-select').parent().addClass('grey-border');

            $('.bootstrap-select').on('change', function() {
                $(this).parent().removeClass('grey-border');
                $(this).parent().addClass('blue-border');
            });

            // Ajax on clicking next | added on form-wizard.js
            // function add_sp() {
            //     $.ajax({
            //         type: "POST",
            //         url: "<?php //echo base_url(); ?>add_sp",
            //         data: $('.organization').serialize(),
            //         success: function(response)
            //         {
            //             alert("success in");
            //         },
            //         error: function(){
            //             alert("failed in");
            //         },
            //     });
            // }
            // function add_service() {
            //     add_sp(),
            //     $.ajax({
            //         type: "POST",
            //         url: "<?php //echo base_url(); ?>add_service",
            //         data: $('.service').serialize(),
            //         success: function(response)
            //         {
            //             alert("success in");
            //         },
            //         error: function(){
            //             alert("failed in");
            //         },
            //     });
            // }
            // $(document).find('[href="#finish"]').on('click', add_service());
        });

        
        

        // Toggle popovers
        // $('.info-icon').on('click', function() {
        //     if ($(this).hasClass("pop-over")) {
        //         $(this).popover('hide');
        //     } else {
        //         $(this).addClass("pop-over")
        //         $(this).popover('show');
        //     }
        // });
        
         $('.confirm').on('click', function() {
             window.location="<?php echo base_url(); ?>home";
         });

        var kerala = [];
        kerala["Thiruvananthapuram"] = ["Neyyattinkara", "Kattakkada", "Nedumangadu", "Thiruvananthapuram", "Chirayinkeezhu", "Varkala"];
        kerala["Kollam"] = ["Kollam", "Kunnathoor", "Karunagappally", "Kottarakkara", "Punalur", "Pathanapuram"];
        kerala["Pathanamthitta"] = ["Adoor", "Konni", "Kozhencherry", "Ranni", "Mallappally", "Thiruvalla"];
        kerala["Alappuzha"] = ["Chenganoor", "Mavelikkara", "Karthikappally", "Kuttanad", "Ambalappuzha", "Cherthala"];
        kerala["Kottayam"] = ["Changanasserry", "Kottayam", "Vaikom", "Meenachil", "Kanjirappally"];
        kerala["Idukki"] = ["Peermade", "Udumbanchola", "Idukki", "Thodupuzha", "Devikulam"];
        kerala["Ernakulam"] = ["Kothamangalam", "Muvattupuzha", "Kunnathunad", "Kanayannur", "Kochi", "North Paravur", "Aluva"];
        kerala["Thrissur"] = ["Chalakudy", "Mukundapuram", "Kodungallur", "Thrissur", "Chavakkad", "Kunnamkulam", "Thalapilly"];
        kerala["Palakkad"] = ["Alathoor", "Chittur", "Palakkad", "Pattambi", "Ottappalam", "Mannarkkad"];
        kerala["Malappuram"] = ["Perinthalmanna", "Nilambur", "Eranad", "Kondotty", "Ponnani", "Tirur", "Thiroorangadi"];
        kerala["Kozhikode"] = ["Kozhikode", "Thamarassery", "Koyilandy", "Vatakara"];
        kerala["Wayanad"] = ["Vythiri", "Sulthan Bathery", "Mananthavady"];
        kerala["Kannur"] = ["Thalassery", "Iritty", "Kannur", "Taliparamba", "Payyannur"];
        kerala["Kasaragod"] = ["Hosdurg", "Vellarikundu", "Kasaragod", "Manjeswaram"];

        // $('.district').on('change', function() {
        //     var selectedValues = [];    
        //     $(".district :selected").each(function(){
        //         selectedValues.push($(this).val()); 
        //     });
        //     // console.log(selectedValues);

        //     for (var i=1; selectedValues[i]; i++) {
        //         for (var j=0; kerala[selectedValues[i]][j]; j++) {
        //             console.log(kerala[selectedValues[i]][j]);

        //             var newitemnum = i;
        //             var newitemdes = kerala[selectedValues[i]][j];
        //             $(".taluk").append('<option value="'+newitemnum+'">'+newitemdes+'</option>');
        //         }
        //         $(".taluk").selectpicker("refresh");
        //     }
        // });

    </script>



    <!-- tooltips and popovers -->
    <script src="<?php echo base_url(); ?>assets/formbsb/js/pages/ui/tooltips-popovers.js"></script>

    <!-- Profile Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/js/profile.js"></script>

    <!-- icon inside input field -->
    <style>
        .input-field {
            display: flex !important;
        }
        .info-help {
            margin-left: -5%;
        }
/*        .info-help-select {
            position: absolute;
            margin-top: 1.4%;
            margin-left: -90%;
            margin-top: 2%;
        }*/
    </style>

    <!-- bootstrap-select styling -->
    <style>
        .bootstrap-select {
            border-bottom: none !important;
        }
        .grey-border::after {
            border-bottom:  1px solid #ddd !important;
        }
        .blue-border {
            border-bottom: 2px solid #1f91f3 !important;
        }
    </style>



</body>
</html>