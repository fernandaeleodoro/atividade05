 <?php 

function calcularMedia($n1,$n2,$n3){
    $media=($n1,n2,n3)/3;
   if ($media >=7){
    $situacao ="Aprovado";
   }elseif ($media >=5){
   $situacao ="Recuperacao";
   if($media <=5){
    $situacao ="Reprovado";

   }
   } 
    
   }