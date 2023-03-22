
<!DOCTYPE html>
<html>
<head>
	<title> Avaliação 02 </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-6 offset-2">   
	  		<form action="#" method="POST">
				<div class="card">
				  <div class="card-header">
				     Fique milhonario com esse numeros
				  </div>
				  <div class="card-body">
				    	<br><br>
				    	<div class="col-md-12">
				    		<button type="submit" class="btn btn-success"> Arrocha </button>
				    	</div>
		  			</div>	
				  </div>
				</div>
			</form>
	  	</div>
	  </div>
	</div>
	<?php 
		
		
	$dezenas = array();
	
	for ($n=1; $n < 7;$n++) { 
		# Gerando um numero randomico 
		$numero = rand(1,60);

		if($n == 1){
			$dezenas[$numero] = $numero;
		}else{

			while(isset($dezenas[$numero])){
				$numero = rand(1,60);
			}

			$dezenas[$numero] = $numero;
		}

	}
			foreach ($dezenas as $sorte) {
			echo $sorte . "<br>";
			}
	
	?>

</body>
</html>

