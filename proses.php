<?php
$input = $_POST["input"];
//membagi string menjadi array
$inputan = str_split($input, 1);
$mardy = 0;
$total = 0;

foreach ($inputan as $key => $value) {
    //hasil kembali 0 ketika di looping
    $hasil = 0;

    if ($value == ">"){
        $mardy++;
    }elseif($value == "<"){
        //menyimpan total grup mardy
        $mardy = $mardy;
        //jumlah hello yang diucapkan ketika bertemu 1 group lain
        $hasil = $mardy * 2; 
    }else{
        continue;
    }
    //jumlah hello keseluruhan
    $total += $hasil;
}

    echo "Jumlah hello yang diucapkan adalah ".$total."x <br>";
    // print_r($inputan);
?>