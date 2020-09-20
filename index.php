<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Julio Lacerda - RGM: 123.200</title>
</head>
<body>


<div>
     <!-- Inicio do formulario -->
      <form method="get" action=".">
        Peso: <input type="number" name="peso">        
        <br>
        Altura: <input type="number" step="0.01" name="altura">
        <br>       
        <input type="submit" value="Verificar"/>
        <br><br> 
    </form>
 
    <?php

        $peso = $_GET['peso'];
        $altura = $_GET['altura'];

        $conta1 = $altura*$altura;
        $conta2 = $peso/$conta1;

        $resultado = number_format($conta2);

        if(isset($resultado) && $resultado != '0'){;	
                echo "Seu IMC é: ".$resultado;               
        }else{
                echo '<h1>Por favor, utilize apenas numeros!</h1>';	
        }    
    ?>
	 
</div>
</body>
</html>
 