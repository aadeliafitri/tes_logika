<?php
$dataJson = file_get_contents('mardy.json');
$data = json_decode($dataJson, true);

function CekData($data){
    global $string;
    global $number;
    global $boolean;

    if (is_string($data)) {
        $string += 1;
            // return "string";
    }elseif (is_bool($data)) {
        $boolean += 1;
            // return "boolean";
    }elseif (is_numeric($data)) {
            $number += 1;
            // return "number";
    }else{
        foreach($data as $value){
            CekData($value);
        }
    }
}

    CekData($data);

    echo "String:". $string. "<br>";
    echo "Boolean:". $boolean. "<br>";
    echo "Number:", $number. "<br>";
    
?>