<?php
    $frase="Go big or go home";
    $palabras=explode(" ",$frase);
    for($i=0;$i<sizeof($palabras);$i++){
        echo $palabras[$i]."<br>";
    }
?>