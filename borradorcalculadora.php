

<?php
 
    $ent1 = strtolower($_GET['entrada1']);//pone todas las entradas en minuscula
    $ent2 = $_GET['entrada2'];
    $ent3 = $_GET['entrada3'];
 
    /*   TU CÓDIGO   */
    //ej1
    if (empty($ent1)) {//Si esta vacio,...
        echo "Debes introducir algo";
    }
    //Si no está vacia entro aquí
    else {
        if (strtolower($ent1)=="true") {
            echo "Verdadero";
        }
        elseif (strtolower($ent1)=="false") {
            echo "Falso";
        }
        else{
            echo "Eso no vale"."<br>";
        }
    }

    //ej1-2.0
    Function str_to_bolean($ent){
        $bool=array(//return array(....)
            "true"=>true,
            "false"=>false
        );
        return $bool[$ent];//[$ent]
    }
    $b=str_to_bolean($ent1);//llamo a la funcion

 
    //ej2
      /* Ejercicio 2 */
 
      if (is_numeric($ent1)) {
 
        if ($ent1 > 100){
 
            echo "El valor es mayor de 100";
        }
        else if($ent1<=100 && $ent1>=50){  
            
            echo "El valor está entre 50 y 100";          
        }
        else if($ent1<=50 && $ent1>=25){  
            
            echo "El valor está entre 25 y 50";          
        }
        else{  
            
            echo "El valor es menor de 25";          
        }
 
    } else {
        echo "Heyyy esto es no es un número!!!!!!";
    }


    //ej3
    if(strtolower($ent1)=="gato"){
        echo "Se ha selccionado el gato";
    }
    else if(strtolower($ent1)=="perro"){
        echo "Se ha selccionado el perro";
    }
    else if(strtolower($ent1)=="loro"){
        echo "Se ha selccionado el loro";
    }
    else{
        echo "No se ha seleccionado ni gato, ni perro, ni loro";
    }

    echo "<br>";

    //ej3-2.0
    switch (strtolower($ent1)){
 
        case 'gato' : //o case "gato" || "perro" || "loro":
        case 'perro' : 
        case 'loro' : 
            echo 'Se ha seleccionado el '.$ent1; 
            break;
        default: echo 'No se ha seleccionado ni perro, ni gato, ni loro'; 
        break;
    
    }
    

    //ej4
    switch ($ent1) {
        case "gato":
            echo "Se ha selccionado el gato"."<br>";
            break;
        case "perro":
            echo "Se ha selccionado el perro"."<br>";
            break;
        case "loro":
            echo "Se ha selccionado el loro"."<br>";
            break;
        default:
            echo "No es ni perro, ni gato, ni loro"."<br>";
    }

    //ej5
    if(is_numeric($ent1)&&(is_numeric($ent3))){
        if($ent2=="v1"){
            echo $ent1+$ent3;
        }
        else if($ent2=="v2"){
            echo $ent1-$ent3;
        }
        else if($ent2=="v3"){
            echo $ent1*$ent3;
        }
        else if($ent2=="v4"){
            echo $ent1/$ent3;
        }
    }
    

    //ej6
    #AND
    if ((strtolower($ent1) == 'true' && strtolower($ent3) == 'true') || (strtolower($ent1) == 'false' && strtolower($ent3) == 'false')){
    
        echo 'True';
    
    }
    elseif((strtolower($ent1) == 'true' && strtolower($ent3) == 'false') || (strtolower($ent1) == 'false' && strtolower($ent3) == 'true')){
    
        echo 'False';
    }
    
    #OR
    if(strtolower($ent1) == 'true'){
    
        echo 'True';
    }
    elseif (strtolower($ent3) == 'true'){
    
        echo 'True';
    }
    elseif (strtolower($ent3) == 'false'){
    
        echo 'False';
    }
    
    
    
    #XOR
    if ((strtolower($ent1) == 'true' && strtolower($ent3) == 'true') || (strtolower($ent1) == 'false' && strtolower($ent3) == 'false')){
    
        echo 'False';
    
    }
    elseif((strtolower($ent1) == 'true' && strtolower($ent3) == 'false') || (strtolower($ent1) == 'false' && strtolower($ent3) == 'true')){
    
        echo 'True';
    }

    //ej6-2.0
    $b1=str_to_bolean($ent1);
    $b2=str_to_bolean($ent2);

    if($ent2=="and"){
        echo "El resultado es: ".($b1 && $b2);
    }
    //.....
?>
