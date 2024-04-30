<?php

 $var = array(2,5,7,9,11);
 $var1 = array("antonio", "joao", "zeca");
 $var2 = array("windows", 10, 2024, "v1.2021");
 $var3 = array("italo" => 30, "hubert" =>20 , "luna" =>17 );
 $num = array(2=>7, 3=>8, 9=>5);
 $num [1] = 4;
 $num [8] = 40;
 $num [3] = 9;
 
   
 
 echo "exemplo 1:"; 
 for ($a=0; $a<count ($var); $a++){
    echo "<br>$var[$a] "; 
}

echo "<br><br>exemplo 2:"; 
for ($a=0; $a<count ($var1); $a++){
    echo "<br>$var1[$a] "; 
}

echo "<br><br>exemplo 3:"; 
for ($a=0; $a<count ($var2); $a++){
    echo " $var2[$a] "; 
}

echo "<br><br>exemplo 4:"; 
echo "<br> o nome é italo e a  idade é $var3[italo]";
echo "<br> o nome é hubert e a idade é $var3[hubert]";
echo "<br> o nome é  luna  e a idade é $var3[luna]";

echo "<br><br>exemplo 5:"; 
echo "<br>  $num[1]";
echo "<br>  $num[2]";
echo "<br>  $num[3]";
echo "<br>  $num[8]";
echo "<br>  $num[9]";


echo "<br><br>exemplo 6:  Função count";
   $num = array("X", 3,1,4,5,6,7, "hubert");
   $qnt= count($num);
   echo "<br>A quantidade é $qnt";

?>