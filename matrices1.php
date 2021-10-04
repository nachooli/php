<pre>
<?php
    $lista=array(
        array("a"),array("b"),array("c")
    );
    print_r($lista);

    $lista2=array(
        "cajon"=>array(
            "id"=>23,
            "nombre"=>"aaaa",
        ),
        array(
            "id"=>45,
            "nombre"=>"eoyu",
        ),
        array(
            "id"=>13,
            "nombre"=>"robe",
        )
    );
    print_r($lista2);
    print_r($lista2[0]["id"]);

?>
</pre>
