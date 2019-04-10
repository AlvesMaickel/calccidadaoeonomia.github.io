<?php
	
	if($_GET["tipo"] == 0){

		$meses = (int)$_GET["meses"];
		$taxa = (int)$_GET["juros"];
		$capital = (float)$_GET["capital"];
		$valor = (float)$_GET["futuro"];
		
		if ($_GET["meses"] == '') {

			$resultado = (int)$valor / $capital;
			$base = 1 + ($taxa / 100);
			$resultado = log($resultado, $base);
			$resultado = round($resultado);

		}else if ($_GET["juros"] == '') {
			
			$resultado = (int)$valor / $capital;
			$n = 1 / (int)$meses;
			$resultado = pow($resultado, $n);
			$resultado = $resultado - 1;
			$resultado = $resultado * 100;
			if ($resultado < 0 ){
				$resultado = $resultado * -1;
			}
			$resultado = round($resultado);

		}else if ($_GET["capital"] == '') {

			$resultado = ($taxa / 100);
			$resultado = $resultado + 1;
			$resultado = pow($resultado, $meses);
			$resultado = (float)$valor / $resultado;
			$resultado = round($resultado);
			$resultado = money_format('%.2n', $resultado);
			// $resultado = number_format($resultado, 2);

		}else if ($_GET["futuro"] == '') {

			$resultado = ($taxa / 100);
			$resultado = $resultado + 1;
			$resultado = pow($resultado, $meses);
			$resultado = $resultado * $capital;
			$resultado = money_format('%.2n', $resultado);
			// $resultado = number_format($resultado, 2);

		}
		$resultado = 'value="'.$resultado.'"';

		echo $resultado;

	}

 ?>