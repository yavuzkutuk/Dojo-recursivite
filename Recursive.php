<?php
function toRoman($nombreArabe, $nombreRomain = ""){
    if ($nombreArabe<=0) return $nombreRomain;

    $tab = [1=>"I",
        4=>"IV",
        5=>"V",
        9=>"IX",
        10=>"X",
        50=>"L",
        100=>"C",
        500=>"D",
        900=>"CM",
        1000=>"M"
    ];

    $keys = array_keys($tab);
    $i = count($keys) - 1;


    while($keys[$i] > $nombreArabe){
        $i--;
    }

    return toRoman($nombreArabe - $keys[$i], $nombreRomain . $tab[$keys[$i]]);
}

echo toRoman(1234);