<?php 
	
	$peso = 70; //$_POST['peso'];
	$altura = 1.80; //$_POST['altura'];
    $resultado = "";

    calculoImc($peso,$altura,$resultado);
    echo 'A classificação é: ' . $resultado ."<br>";
    
    function calculoImc($peso, $altura, $resultado) {
        $pesosImc = array(18.5,24.9,29.9,39.9,90000);
        $classificacoesImc = array("Magreza","Normal","Sobrepeso","Obesidade","Obesidade Grave");

        $imc = $peso / ($altura * $altura); //fórmula fica assim: IMC = Peso / Altura².
        echo "O IMC é: " . $imc ."<br>";

        $i = 0;
        while ($imc > $pesosImc[$i]) {
            $i++;
        
        }

        $resultado = $classificacoesImc[$i];
        echo 'A classificação é: ' . $resultado . "<br>";
        return($resultado);

        
	
        //return;
    }

?>
