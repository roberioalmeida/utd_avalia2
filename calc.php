
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
				    Informe 02 Numeros
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				<div class="col-md-6">
		  					<label>No.01 </label><br>
							<input type="number" class="label" name="num1" required placeholder="Digite"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> No.02 </label><br>
							<input type="number" class="label" name="num2" required placeholder="Digite"><br>
		  				</div>

		  				<br><br>
		  				<br><br>
				    	<div class="col-md-12">
				    		<button type="submit" class="btn btn-success"> Mostrar Resultado </button>
				    	</div>
		  			</div>	
				  </div>
				</div>
			</form>
	  	</div>
	  </div>
	</div>
	<?php 
		
		
     $num1 = $_POST['num1'];
     $num2 = $_POST['num2'];
     echo "Soma         : ","$num1+$num2 = ",$num1+$num2, "<br />";
     echo "Subtração        : ","$num1-$num2 = ",$num1-$num2, "<br />";
     echo "Multiplicação    : ","$num1*$num2 = ",$num1*$num2, "<br />";
     echo "Divisão         : ","$num1/$num2 = ",$num1/$num2, "<br />";
     echo "Resto da divisão : ","$num1%$num2 = ",$num1%$num2, "<br />";
     echo "Raiz Quadrada : ","$num1 = ",sqrt($num1), "<br />";
     echo "Raiz Quadrada : ","$num2 = ",sqrt($num2), "<br />";
	
	?>

</body>
</html>

