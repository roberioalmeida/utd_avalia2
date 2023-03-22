
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
            Informe Valor e Numero de Parcelas
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <label>Valor </label><br>
              <input type="number" class="label" name="num1" required placeholder="Digite"><br>
              </div>

              <div class="col-md-6">
                <label> No. Parcelas </label><br>
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

  $mesatual = date("N");
  echo $mesatual ."<br>";
  // Next Month: 04-08-2015

    $meses = array("Janeiro","Fevereiro","Março","Abril","Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro" );

     $valor = $_POST['num1'];
     $parcelas = $_POST['num2'];
     $valorparc = $valor / $parcelas;

    for ($mes=$mesatual; $mes < $parcelas+$mesatual; $mes++) { 
    # Gerando Parcelas
        $nomeses[$mes] = $meses[$mes]; // . "  Valor:" . ($valor / $parcelas);
           
    }
//    echo "<pre>";
//    print_r($nomeses);


?>
  <div class="container-fluid"> 

    <div class="row">     
      <div class="col-10 offset-1">
        <table class="table table-bordered border-primary" id="myTable">
          <thead class="text-center bg-dark text-white">
            <th> Mes </th>
            <th> Parcela </th>
            <th> Valor </th>
          </thead>
          <tbody>
            <?=$i=1;?>
            <?php foreach($nomeses as $chave=>$nomemes): ?>                            
              <tr>
                  <td><?=$nomemes;?></td>    
                  <td><?=$i;?></td>    
                  <td><?=$valorparc;?></td>    
              </tr>
              <?=$i++;?>
            <?php endforeach; ?>

            
          </tbody>
          <tfoot class="text-center">
            <th> Mes </th>
            <th> Parcela </th>
            <th> Valor </th>
          </tfoot>
        </table>
      </div>      
    </div>
  </div>


</body>
</html>

