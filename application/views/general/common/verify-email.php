<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/verify.css" rel="stylesheet">
    
</head>

<body>
    <div class="content">
    <div class="svg-wrap">
      <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64">
  <g fill="none" stroke-width="2" stroke-miterlimit="10" class="nc-icon-wrapper">
    <path stroke="#0d8bff" d="M12 22L2 27.8V62h60V27.8L52 22" data-cap="butt"/>
    <path stroke="#0d8bff" d="M12 33.4V2h40v31.2M2 27.8L62 62m0-34.2L31.2 44.4" data-cap="butt"/>
    <path stroke="#f58020" d="M22 14h20M22 24h20" data-color="color-2" stroke-linecap="square"/>
  </g>
</svg>
    </div>
    <h2>Verify Email</h2> 
    <p>Thanks for creating an account with us. Please verify your email address to continue. We have sent an email verification link to <strong><?php echo $email; ?></strong>.</p>
    <p>click <strong>here</strong> to resend the email or <strong>here</strong> to check status.</p>
    
  </div>
</body>
</html>