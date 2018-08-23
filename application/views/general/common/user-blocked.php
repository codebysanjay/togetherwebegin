<!DOCTYPE HTML>
<html lang="en">
		
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>PLACEMENT</title>
	<link rel="icon" href="http://localhost/vyuh/assets/images/vyuh-logo.jpg">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/user-blocked.css">
</head>

<body>
	<div class="cont_principal">
		<div class="cont_bgc_modal"></div>
		<div class="cont_modal">
			<div class="cont_circulo_prohibido">
				<div class="cont_raya_divisor"></div>
				<div class="cont_form_modal">
					<div class="cont_logo_restrigido">
						<div class="cont_circulo_logo">
							<div class="con_raya_logo"></div>
						</div>
					</div>
					<div class="po_relative">
						<h1>You are blocked :(</h1>
						<p>We've detected Unusual activity from Your account.</p>
						<p>If you think it's our fault, do let's know.</p>
					</div>
					
					<div style="padding-top: 100px;"class="cont_input_password">
						<button type="button" data="'.$job_item["id"].'" class="btn apply-btn btn-primary waves-effect">Talk to Admin</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<script>
	window.onload = function(){
		limit_acces();
	}

	function limit_acces(){  
		document.querySelector('.cont_bgc_modal').style.display = "block"; 
		document.querySelector('.cont_modal').style.display = "block"; 
		setTimeout( function(){
			document.querySelector('.cont_bgc_modal').className = "cont_bgc_modal  cont_bgc_modal_activo";  
			document.querySelector('.cont_modal').className = "cont_modal cont_modal_activo";
		},100);
	}
</script>

</html>