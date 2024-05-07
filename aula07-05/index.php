<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>Array: definição explícita - exemplo 1</h2>
    <pre>
        <?php
            $var [0] = "Desenvolvimento";
            $var [1] = "Web";
            $var [2] = "II";

            for ($a=0; $a<count ($var); $a++){
               echo "$var[$a] "; 
           }

           $var1 = array("livia", "felipe", "pedro", "luna", "fabio", "antonio", "joao", "zeca");

            for ($a=0; $a<count ($var1); $a++){
               echo " <br> $var1[$a] "; 
           }

         ?>
    </pre>
    

    <h2>Array: definição explícita - exemplo 2</h2>
    <pre>
        <?php
           $var = array(1, 2, 3, 4);

            for ($a=0; $a<count ($var); $a++){
               echo " <br> $var[$a] "; 
           }

         ?>
    </pre>

    <pre>
        <?php
           $var = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

           echo count ($var);

           for ($i=0; $i<=8; $i++) {
            echo " <br> $var[$i] "; 
        }
         ?>
    </pre>


    <pre>
        <?php
             $aluno = array("livia", "felipe", "pedro", "luna", "fabio", "antonio", "joao", "zeca");

            for ($i=0; $i< (count ($aluno)); $i++){
               echo " no indice $i o aluno eh $aluno [$i]"; 
        }
         ?>
    </pre>

    <pre>
        <?php
             $var = array("livia" =>20 , "felipe" => 5 , "pedro" => 6);

            foreach ($var as $chave => $valor){
               echo "<br> $chave = "; 
               echo $valor; 
        }

         ?>
    </pre>
    
    

</body>
</html>