<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Contact V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--===============================================================================================-->
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
<!-- =============================================================================================== -->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form">
				<span class="contact100-form-title">
					Calculadora!
				</span>

				<div class="wrap-input100 validate-input"">
					<span class="label-input100">Valor Presente</span>
					<div id='resultado-capital'>
						<input class="input100" type="text" name="capital" id="capital" placeholder="Valor Presente">
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input"">
					<span class="label-input100">Valor Futuro</span>
					<div id='resultado-futuro'>
						<input class="input100" type="text" name="futuro" id="futuro" placeholder="Valor Futuro">
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input"">
					<span class="label-input100">Taxa de Juros</span>
					<div id='resultado-juros'>
						<input class="input100" type="text" name="juros" id="juros" placeholder="Juros Mensal">
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input"">
					<span class="label-input100">Número de Meses</span>
					<div id='resultado-meses'>
						<input class="input100" type="text" name="meses" id="meses" placeholder="Número de Meses">
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="button" onclick="resposta();" >
							<span>
								Enviar
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="js/jquery-2.2.3.min.js"></script>  
	<script src="js/bootstrap.js"></script>  
	<script type="text/javascript">
		function resposta(){
			// alert("entrou");
			$.ajax({
				type: "GET",
				url: "ajax.php",
				data: "tipo=0&juros="+document.getElementById('juros').value+"&meses="+document.getElementById('meses').value+"&capital="+document.getElementById('capital').value+"&futuro="+document.getElementById('futuro').value,
				success: function(data){
					// alert("entrou aqui 4");
					if (document.getElementById('juros').value == '') {
						$("#resultado-juros").html('');
						$("#resultado-juros").append(''.concat('<input class="input100" type="text" name="juros" id="juros" ', data ,' placeholder="Juros Mensal">'));
					} else if ( document.getElementById('meses').value == '' ) {
						$("#resultado-meses").html('');
						$("#resultado-meses").append(''.concat('<input class="input100" type="text" name="meses" id="meses" ', data ,' placeholder="Número de Meses">'));
					} else if ( document.getElementById('capital').value == '' ) {
						$("#resultado-capital").html('');
						$("#resultado-capital").append(''.concat('<input class="input100" type="text" name="capital" id="capital" ', data ,' placeholder="Valor Presente">'));
					} else if ( document.getElementById('futuro').value == '' ) {
						$("#resultado-futuro").html('');
						$("#resultado-futuro").append(''.concat('<input class="input100" type="text" name="futuro" id="futuro" ', data ,' placeholder="Valor Futuro">'));

					}
				}
			});
		}
		
	</script>
	<!-- <script src="vendor/daterangepicker/moment.min.js"></script> -->
	<!-- <script src="vendor/daterangepicker/daterangepicker.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->
