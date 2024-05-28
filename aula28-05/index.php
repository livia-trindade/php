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
         function soma() { 
            echo 5+6;
         } 

         soma(); 
    ?> 
    
    <?php 
         function somaparametro($p1, $p2) {
            $s1 =  $p1+ $p2;
            echo $s1;

         } 

         somaparametro(8,9); 

         echo "<br>";
         somaparametro(80,9); 

         echo "<br>";
         somaparametro(3,1); 

         /* for ($i=0; $i < 1000 ; $i++) { 
            somaparametro($i, 1); echo "<br>";
         }*/
    ?> </pre>

    <h2>soma</h2>

    <pre><?php 
         function somaR($p1, $p2) { 
            $s1 =  $p1+ $p2;
            return  $s1;
         } 

    ?> </pre>

    <h2>multiplicação</h2>

    <pre> <?php

    function multiplica ($x1, $x2, $x3){

        $m1 =  $x1*$x2*$x3;
        return  $m1;
    }

        echo "<br>";
        echo multiplica(2,3,2); 

    ?></pre>

    <h2>divisão</h2>

    <pre>
    <?php

    function divide ($y1, $y2, $y3, $y4){

        $d1 =  $y1/$y2/$y3/$y4;
        return  $d1;
    }

        echo "<br>";
        echo divide(40, 2, 2, 2); 

    ?> 
    </pre>

    <h2>operação com os 4 números</h2>

    <pre><?php

    function calcula ($p1, $s2, $x3, $y4, $d5){

        $d1 =  (($p1+$s2)-$x3)*$y4/$d5;
        return  $d1;
    }

        echo "<br>";
        echo calcula(10, 10, 2, 4, 2); 

    ?> </pre>

    <h2>quadrado de um número</h2>

    <pre><?php

    function quadrado ($p1){

        $d1 = $p1*$p1  ;
        return  $d1;
    }

        echo "<br>";
        echo quadrado(11); 

    ?> </pre>

    <h2>soma e eleva ao quadrado</h2>

    <pre><?php

     echo quadrado(somaR(5,3));
    ?> </pre>

    <h2>eleva ao quadrado e soma</h2>

    <pre><?php
    
     echo somaR(3, quadrado(2));
    ?> </pre>

    <pre><?php

    function  preencher ($qnt, $incio){
        for ($i=0; $i < $qnt ; $i++) { 
            echo $inicio;
            $count = $inicio ++; echo "<br>";
            
         }

         preencher (100,3);

    }
    ?> </pre>




    
</body>
</html>