<?php
    $lista=array("a","b","c","d","e");

    $salida=array_slice($lista,2);
    print_r ($salida);
    echo "<br>";
    
    $salida=array_slice($lista,-2,1);
    print_r ($salida);
    echo "<br>";

    $salida=array_slice($lista,0,3);
    print_r ($salida);
    echo "<br>";
?>
