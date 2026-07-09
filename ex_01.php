<?php 

function verifiqueNumero($numero){

if ($numero > 0){
    $sinal="Positivo";
}elseif ($numero <0){
    $sinal="Negativo";
}else{
    $sinal= "zero";
    
}

if ($numero !=0){
    if ($numero % 2 ==0) {
    $paridade ="Par";
    }else{
          $paridade = "Ímpar";
        }

        echo "O número $numero é $paridade e $sinal.";
    } else {
        echo "O número é Zero.";
    }
}









