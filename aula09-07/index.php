<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <pre>

    <?php 
        function nome_funcao ($par_1 = 0, $par_2 = "vazio") { 
           echo "Código da Função <br>"; 
           return "Dado de Retorno: ".$par_1."/".$par_2; 
        } 

        function multiplicacao ($x1, $x2){

            $mult =  $x1*$x2;
            return  $mult;
        }

        function  imprime ($numero){
            for ($i=0; $i < $numero ; $i++) { 
                echo " <script>alert ('digite x') </script>";
             }

    }

        $retorno = nome_funcao(78); 
        echo $retorno."<br><br>"; 
        $retorno = nome_funcao(96, "PSW1"); 
        echo $retorno."<br><br>"; 
        echo multiplicacao(98,2) ; 
        imprime (10);
    ?>


</pre>

</body>
</html>