
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
				    Informe 10 Numeros
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				<div class="col-md-1">
		  					<label>No.01 </label><br>
							<input type="number" class="label" name="num1" required placeholder="Digite"><br>
		  				</div>

		  				<div class="col-md-1">
		  					<label> No.02 </label><br>
							<input type="number" class="label" name="num2" required placeholder="Digite"><br>
		  				</div>

		  				<div class="col-md-1">
		  					<label>No.03 </label><br>
							<input type="number" class="label" name="num3" required placeholder="Digite"><br>
		  				</div>

		  				<div class="col-md-1">
		  					<label> No.04 </label><br>
							<input type="number" class="label" name="num4" required placeholder="Digite"><br>
		  				</div>
		  				<div class="col-md-1">
		  					<label>No.05 </label><br>
							<input type="number" class="label" name="num5" required placeholder="Digite"><br>
		  				</div>

		  				<div class="col-md-1">
		  					<label> No.06 </label><br>
							<input type="number" class="label" name="num6" required placeholder="Digite"><br>
		  				</div>

		  				<div class="col-md-1">
		  					<label>No.07 </label><br>
							<input type="number" class="label" name="num7" required placeholder="Digite"><br>
		  				</div>

		  				<div class="col-md-1">
		  					<label> No.08 </label><br>
							<input type="number" class="label" name="num8" required placeholder="Digite"><br>
		  				</div>

		  				<div class="col-md-1">
		  					<label>No.09 </label><br>
							<input type="number" class="label" name="num9" required placeholder="Digite"><br>
		  				</div>

		  				<div class="col-md-1">
		  					<label> No.10 </label><br>
							<input type="number" class="label" name="num10" required placeholder="Digite"><br>
		  				</div>

		  				<br><br>
		  				<br><br>
				    	<div class="col-md-12">
				    		<button type="submit" class="btn btn-success"> Mostrar Ordem </button>
				    	</div>
		  			</div>	
				  </div>
				</div>
			</form>
	  	</div>
	  </div>
	</div>
	<?php 
		
		
		if(isset($_POST['num1'])){

			$numordem = array($_POST['num1'],
		                      $_POST['num2'],
		                      $_POST['num3'],
		                      $_POST['num4'],
		                      $_POST['num5'],
		                      $_POST['num6'],
		                      $_POST['num7'],
		                      $_POST['num8'],
		                      $_POST['num9'],
		                      $_POST['num10']);


			sort($numordem);
							
			for ($i = 0; $i < 10; $i++) {
			    echo "Numero [" . $numordem[$i] . "]" ."<br>";
			}
		}

	?>

</body>
</html>

