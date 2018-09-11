<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Rebuild Kerala" />
    <meta name="author" content="Sreenath B S" />
    <title>Services | Together We Begin!</title>

    <!-- Favicon-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/home/ico/favicon.png" />


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">



  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/css/style.css?<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/home/css/navbar.css?<?php echo time(); ?>" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/home/css/footer.css?<?php echo time(); ?>" rel="stylesheet">
    <style>.dropdown-menu.inner {max-height: 35vh !important;}</style>
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
    <!--Filter Css-->
    <link href="<?php echo base_url(); ?>assets/formbsb/external/filter/filter.css?<?php echo time(); ?>" rel="stylesheet" />


</head>

<body style="overflow-x: hidden;">
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
    <!-- start header -->
    <header>
<!-- 
      <div class="container">
        <div class="row nomargin"> -->

          <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a href="<?php echo base_url(); ?>home">
                        <div class="logo">
                          <img src="<?php echo base_url(); ?>assets/home/img/together.png" class="logo-top">
                          <span class="logo-text">together we begin</span>
                        </div>
                      </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index">Home</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="contact">Contact Us</a></li>
                        <li class="hidden"><a href="statistics">Statistics</a></li>
                        <li><?php 
                      if (is_null($this->session->userdata('user_id'))) { 
                        echo '<a href="'.base_url().'login">Login</a>';
                      } else {
                        echo '<a href="'.base_url().'logout">Logout</a>';
                      }
                      ?></li>
                      </ul>
                    </div>
                  </div>
                </nav>

          
<!--         </div>
      </div> -->
    </header>
    <!-- end header -->
</div>


    

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">

                <div class="col-xs-10 col-sm-3">
                    <div class='filter'>
                        <form method="POST" action="">
                  <p class='title filt'>Filters</p>
                  <div class="filter-btns hidden">
                  <p class='title_items filter-btn'>District</p>
                  <ul style="text-align: initial;">
                    <li>
                      <input id='all' name='district' value='Thiruvananthapuram' type='radio'>
                      <label for='all'>Thiruvananthapuram</label>
                    </li>
                    <li>
                      <input id='website' name='district' value='Kollam' type='radio'>
                      <label for='website'>Kollam</label>
                    </li>
                    <li>
                      <input id='icon' name='district' value='Pathanamthitta' type='radio'>
                      <label for='icon'>Pathanamthitta</label>
                    </li>
                    <li>
                      <input id='mobile' name='district' value='Alappuzha' type='radio'>
                      <label for='mobile'>Alappuzha</label>
                    </li>
                    <li>
                      <input id='logo' name='district' value='Kottayam' type='radio'>
                      <label for='logo'>Kottayam</label>
                    </li>
                    <li>
                      <input id='ui' name='district' value='Idukki' type='radio'>
                      <label for='ui'>Idukki</label>
                    </li>
                    <li>
                      <input id='illustration' name='district' value='Ernakulam' type='radio'>
                      <label for='illustration'>Ernakulam</label>
                    </li>
                    <li>
                      <input id='thrissur' name='district' value='Thrissur' type='radio'>
                      <label for='thrissur'>Thrissur</label>
                    </li>
                    <li>
                      <input id='palakkad' name='district' value='Palakkad' type='radio'>
                      <label for='palakkad'>Palakkad</label>
                    </li>
                    <li>
                      <input id='malappuram' name='district' value='Malappuram' type='radio'>
                      <label for='malappuram'>Malappuram</label>
                    </li>
                    <li>
                      <input id='mobil' name='district' value='Kozhikode' type='radio'>
                      <label for='mobil'>Kozhikode</label>
                    </li>
                    <li>
                      <input id='log' name='district' value='Wayanad' type='radio'>
                      <label for='log'>Wayanad</label>
                    </li>
                    <li>
                      <input id='uio' name='district' value='Kannur' type='radio'>
                      <label for='uio'>Kannur</label>
                    </li>
                    <li>
                      <input id='illus' name='district' value='Kasargod' type='radio'>
                      <label for='illus'>Kasargod</label>
                    </li>
                  </ul>
                  <p class='title_items filter-btn'>Taluk</p>
                  <ul style="text-align: initial;">
                    <li><input id='Neyyattinkara' name='taluk' value='Neyyattinkara' type='radio'><label for='Neyyattinkara'>Neyyattinkara</label></li>
                    <li><input id='Kattakkada' name='taluk' value='Kattakkada' type='radio'><label for='Kattakkada'>Kattakkada</label></li>
                    <li><input id='Nedumangadu' name='taluk' value='Nedumangadu' type='radio'><label for='Nedumangadu'>Nedumangadu</label></li>
                    <li><input id='Thiruvananthapuram' name='taluk' value='Thiruvananthapuram' type='radio'><label for='Thiruvananthapuram'>Thiruvananthapuram</label></li>
                    <li><input id='Chirayinkeezhu' name='taluk' value='Chirayinkeezhu' type='radio'><label for='Chirayinkeezhu'>Chirayinkeezhu</label></li>
                    <li><input id='Varkala' name='taluk' value='Varkala' type='radio'><label for='Varkala'>Varkala</label></li>
                    <li><input id='Kollam' name='taluk' value='Kollam' type='radio'><label for='Kollam'>Kollam</label></li>
                    <li><input id='Kunnathoor' name='taluk' value='Kunnathoor' type='radio'><label for='Kunnathoor'>Kunnathoor</label></li>
                    <li><input id='Karunagappally' name='taluk' value='Karunagappally' type='radio'><label for='Karunagappally'>Karunagappally</label></li>
                    <li><input id='Kottarakkara' name='taluk' value='Kottarakkara' type='radio'><label for='Kottarakkara'>Kottarakkara</label></li>
                    <li><input id='Punalur' name='taluk' value='Punalur' type='radio'><label for='Punalur'>Punalur</label></li>
                    <li><input id='Pathanapuram' name='taluk' value='Pathanapuram' type='radio'><label for='Pathanapuram'>Pathanapuram</label></li>
                    <li><input id='Adoor' name='taluk' value='Adoor' type='radio'><label for='Adoor'>Adoor</label></li>
                    <li><input id='Konni' name='taluk' value='Konni' type='radio'><label for='Konni'>Konni</label></li>
                    <li><input id='Kozhencherry' name='taluk' value='Kozhencherry' type='radio'><label for='Kozhencherry'>Kozhencherry</label></li>
                    <li><input id='Ranni' name='taluk' value='Ranni' type='radio'><label for='Ranni'>Ranni</label></li>
                    <li><input id='Mallappally' name='taluk' value='Mallappally' type='radio'><label for='Mallappally'>Mallappally</label></li>
                    <li><input id='Thiruvalla' name='taluk' value='Thiruvalla' type='radio'><label for='Thiruvalla'>Thiruvalla</label></li>
                    <li><input id='Chengannur' name='taluk' value='Chengannur' type='radio'><label for='Chengannur'>Chengannur</label></li>
                    <li><input id='Mavelikkara' name='taluk' value='Mavelikkara' type='radio'><label for='Mavelikkara'>Mavelikkara</label></li>
                    <li><input id='Karthikappally' name='taluk' value='Karthikappally' type='radio'><label for='Karthikappally'>Karthikappally</label></li>
                    <li><input id='Kuttanadu' name='taluk' value='Kuttanadu' type='radio'><label for='Kuttanadu'>Kuttanadu</label></li>
                    <li><input id='Ambalappuzha' name='taluk' value='Ambalappuzha' type='radio'><label for='Ambalappuzha'>Ambalappuzha</label></li>
                    <li><input id='Cherthala' name='taluk' value='Cherthala' type='radio'><label for='Cherthala'>Cherthala</label></li>
                    <li><input id='Changanasserry' name='taluk' value='Changanasserry' type='radio'><label for='Changanasserry'>Changanasserry</label></li>
                    <li><input id='Kottayam' name='taluk' value='Kottayam' type='radio'><label for='Kottayam'>Kottayam</label></li>
                    <li><input id='Vaikkom' name='taluk' value='Vaikkom' type='radio'><label for='Vaikkom'>Vaikkom</label></li>
                    <li><input id='Meenachil' name='taluk' value='Meenachil' type='radio'><label for='Meenachil'>Meenachil</label></li>
                    <li><input id='Kanjirappally' name='taluk' value='Kanjirappally' type='radio'><label for='Kanjirappally'>Kanjirappally</label></li>
                    <li><input id='Peerumedu' name='taluk' value='Peerumedu' type='radio'><label for='Peerumedu'>Peerumedu</label></li>
                    <li><input id='Udumbanchola' name='taluk' value='Udumbanchola' type='radio'><label for='Udumbanchola'>Udumbanchola</label></li>
                    <li><input id='Idukki' name='taluk' value='Idukki' type='radio'><label for='Idukki'>Idukki</label></li>
                    <li><input id='Thodupuzha' name='taluk' value='Thodupuzha' type='radio'><label for='Thodupuzha'>Thodupuzha</label></li>
                    <li><input id='Devikulam' name='taluk' value='Devikulam' type='radio'><label for='Devikulam'>Devikulam</label></li>
                    <li><input id='Kothamangalam' name='taluk' value='Kothamangalam' type='radio'><label for='Kothamangalam'>Kothamangalam</label></li>
                    <li><input id='Kunnathunad' name='taluk' value='Kunnathunad' type='radio'><label for='Kunnathunad'>Kunnathunad</label></li>
                    <li><input id='Kanayannur' name='taluk' value='Kanayannur' type='radio'><label for='Kanayannur'>Kanayannur</label></li>
                    <li><input id='Kochi' name='taluk' value='Kochi' type='radio'><label for='Kochi'>Kochi</label></li>
                    <li><input id='North Paravoor' name='taluk' value='North Paravoor' type='radio'><label for='North Paravoor'>North Paravoor</label></li>
                    <li><input id='Aluva' name='taluk' value='Aluva' type='radio'><label for='Aluva'>Aluva</label></li>
                    <li><input id='Chalakudy' name='taluk' value='Chalakudy' type='radio'><label for='Chalakudy'>Chalakudy</label></li>
                    <li><input id='Mukundapuram' name='taluk' value='Mukundapuram' type='radio'><label for='Mukundapuram'>Mukundapuram</label></li>
                    <li><input id='Kodungallur' name='taluk' value='Kodungallur' type='radio'><label for='Kodungallur'>Kodungallur</label></li>
                    <li><input id='Thrissur' name='taluk' value='Thrissur' type='radio'><label for='Thrissur'>Thrissur</label></li>
                    <li><input id='Chavakkad' name='taluk' value='Chavakkad' type='radio'><label for='Chavakkad'>Chavakkad</label></li>
                    <li><input id='Kunnamkulam' name='taluk' value='Kunnamkulam' type='radio'><label for='Kunnamkulam'>Kunnamkulam</label></li>
                    <li><input id='Thalapilly' name='taluk' value='Thalapilly' type='radio'><label for='Thalapilly'>Thalapilly</label></li>
                    <li><input id='Alathoor' name='taluk' value='Alathoor' type='radio'><label for='Alathoor'>Alathoor</label></li>
                    <li><input id='Chittur' name='taluk' value='Chittur' type='radio'><label for='Chittur'>Chittur</label></li>
                    <li><input id='Palakkad' name='taluk' value='Palakkad' type='radio'><label for='Palakkad'>Palakkad</label></li>
                    <li><input id='Pattambi' name='taluk' value='Pattambi' type='radio'><label for='Pattambi'>Pattambi</label></li>
                    <li><input id='Ottappalam' name='taluk' value='Ottappalam' type='radio'><label for='Ottappalam'>Ottappalam</label></li>
                    <li><input id='Mannarkkadu' name='taluk' value='Mannarkkadu' type='radio'><label for='Mannarkkadu'>Mannarkkadu</label></li>
                    <li><input id='Perinthalmanna' name='taluk' value='Perinthalmanna' type='radio'><label for='Perinthalmanna'>Perinthalmanna</label></li>
                    <li><input id='Nilambur' name='taluk' value='Nilambur' type='radio'><label for='Nilambur'>Nilambur</label></li>
                    <li><input id='Eranad' name='taluk' value='Eranad' type='radio'><label for='Eranad'>Eranad</label></li>
                    <li><input id='Kondotty' name='taluk' value='Kondotty' type='radio'><label for='Kondotty'>Kondotty</label></li>
                    <li><input id='Ponnani' name='taluk' value='Ponnani' type='radio'><label for='Ponnani'>Ponnani</label></li>
                    <li><input id='Tirur' name='taluk' value='Tirur' type='radio'><label for='Tirur'>Tirur</label></li>
                    <li><input id='Thiroorangadi' name='taluk' value='Thiroorangadi' type='radio'><label for='Thiroorangadi'>Thiroorangadi</label></li>
                    <li><input id='Kozhikode' name='taluk' value='Kozhikode' type='radio'><label for='Kozhikode'>Kozhikode</label></li>
                    <li><input id='Thamarassery' name='taluk' value='Thamarassery' type='radio'><label for='Thamarassery'>Thamarassery</label></li>
                    <li><input id='Koyilandy' name='taluk' value='Koyilandy' type='radio'><label for='Koyilandy'>Koyilandy</label></li>
                    <li><input id='Vatakara' name='taluk' value='Vatakara' type='radio'><label for='Vatakara'>Vatakara</label></li>
                    <li><input id='Vythiri' name='taluk' value='Vythiri' type='radio'><label for='Vythiri'>Vythiri</label></li>
                    <li><input id='Sulthan Bathery' name='taluk' value='Sulthan Bathery' type='radio'><label for='Sulthan Bathery'>Sulthan Bathery</label></li>
                    <li><input id='Mananthavady' name='taluk' value='Mananthavady' type='radio'><label for='Mananthavady'>Mananthavady</label></li>
                    <li><input id='Thalassery' name='taluk' value='Thalassery' type='radio'><label for='Thalassery'>Thalassery</label></li>
                    <li><input id='Iritty' name='taluk' value='Iritty' type='radio'><label for='Iritty'>Iritty</label></li>
                    <li><input id='Kannur' name='taluk' value='Kannur' type='radio'><label for='Kannur'>Kannur</label></li>
                    <li><input id='Payyannur' name='taluk' value='Payyannur' type='radio'><label for='Payyannur'>Payyannur</label></li>
                    <li><input id='Taliparamba' name='taluk' value='Taliparamba' type='radio'><label for='Taliparamba'>Taliparamba</label></li>
                    <li><input id='Hosdurg' name='taluk' value='Hosdurg' type='radio'><label for='Hosdurg'>Hosdurg</label></li>
                    <li><input id='Vellarikundu' name='taluk' value='Vellarikundu' type='radio'><label for='Vellarikundu'>Vellarikundu</label></li>
                    <li><input id='Kasaragod' name='taluk' value='Kasaragod' type='radio'><label for='Kasaragod'>Kasaragod</label></li>
                    <li><input id='Manjeswaram' name='taluk' value='Manjeswaram' type='radio'><label for='Manjeswaram'>Manjeswaram</label></li>
                  </ul>
                  <p class='title_items filter-btn'>Category</p>
                  <ul style="text-align: initial;">
                    <li><input id='Carpentry' name='category' value='Carpentry' type='radio'><label for='Carpentry'>Carpentry</label></li>
                    <li><input id='Civil' name='category' value='Civil' type='radio'><label for='Civil'>Civil</label></li>
                    <li><input id='Cleaning' name='category' value='Cleaning' type='radio'><label for='Cleaning'>Cleaning</label></li>
                    <li><input id='Electrical' name='category' value='Electrical' type='radio'><label for='Electrical'>Electrical</label></li>
                    <li><input id='Electronics' name='category' value='Electronics' type='radio'><label for='Electronics'>Electronics</label></li>
                    <li><input id='Mechanical' name='category' value='Mechanical' type='radio'><label for='Mechanical'>Mechanical</label></li>
                    <li><input id='Others' name='category' value='Others' type='radio'><label for='Others'>Others</label></li>
                    <li><input id='Painting' name='category' value='Painting' type='radio'><label for='Painting'>Painting</label></li>
                    <li><input id='Transportation' name='category' value='Transportation' type='radio'><label for='Transportation'>Transportation</label></li>
                  </ul>
                  
                  <input type="submit" class='title search-btn' value="submit">
              </div>
                </div>
            </div>

                <div class="service-list col-xs-12 col-sm-offset-1 col-sm-6">
                
                <?php
                $x = 0;
                foreach($service as $service_item) {
                    $x += 1;
                echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="service-details card">
                            <div class="header bg-cyan">
                                <h2>
                                    '.$service_item['category'].' | '.$service_item['name'].'<small>'.$service_item['company'].'</small>
                                </h2>
                            </div>

                            <div class="body" style="color: black;">
                                <div style="color: rgb(51, 122, 183);" class="row">
                                    <div class="col-xs-6 col-sm-3" id="location">
                                        <div class="demo-google-material-icon" style="display: ruby;">
                                            <i class="material-icons">location_on</i>
                                            <span class="icon-name">'.$service_item['taluk'].'</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3" id="location">
                                        <div class="demo-google-material-icon">
                                            <i class="material-icons">monetization_on</i>
                                            <span class="icon-name">Volunteering</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3" id="location">
                                        <div class="demo-google-material-icon">
                                            <i class="material-icons">group</i>
                                            <span class="icon-name">'.$service_item['service_count'].'</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3" id="location">
                                        <div class="demo-google-material-icon">
                                            <i class="material-icons">access_time</i>
                                            <span class="icon-name">'.$service_item['created_on'].'</span>
                                        </div>
                                    </div>
                                </div>
                                <blockquote>
                                    <footer class="blockquote">#Remark<br><br> : '.$service_item['remark'].'</footer>
                                </blockquote>
                                <div class="row">
                                    <div class="col-xs-3 col-sm-4 col-md-4 col-lg-4"></div>
                                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                    <button type="button" onclick="service_used('.$service_item["id"].')" class="btn bg-blue apply-btn btn-block btn-lg waves-effect m-r-20" data="1">'.$service_item['phone'].'</button>
                                    <!-- <button type="button"  class="btn bg-blue btn-lg waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Apply Now</button> -->
                                </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>';}
                    // echo $x;
                    if ($x == 0) {
                        echo '<div style="margin-bottom:33.2vh;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                0 Results found :-(
                            </h2>
                        </div>
                        <div class="body">
                        Try again with different filters or come back later.
                        </div>
                    </div>
                </div>';
                    }?>
                </div>
                
            </div>
        </div>
    </section>

<div class="container-fluid footer-content">
  <div>
      <p><span>Powered by</span><!-- <i class="fa fa-heart"></i> --></p>
      <p><span><img src="<?php echo base_url(); ?>assets/ck_logo.png" class="logo-kc"></span></p>
      <a class="hidden" href="home">Compassionate Kerala</a>
  </div>
</div>

    <!-- Jquery Core Js -->
    <!-- <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery/jquery.min.js"></script> -->

    <!-- Bootstrap Core Js -->
    <!-- <script src="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap/js/bootstrap.js"></script> -->

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/js/demo.js"></script>

    <!-- Filter Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/external/filter/filter.js"></script>
    
    <script>
    // js to be applied after document.ready
        // Ajax on verify
         function service_used(idnum) {
            console.log(idnum);
             $.ajax({
                 type: "POST",
                 url: "<?php echo base_url(); ?>service_used",
                 data: {"id": idnum},
                 success: function(response)
                 {
                     console.log("success in");
                 },
                 error: function(){
                     console.log("failed in");
                 },
             });
         }
        </script>
        
</body>

</html>