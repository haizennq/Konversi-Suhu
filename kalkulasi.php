<?php
function cek_data($data){
    if(isset($_GET[$data]) == true){
        if($_GET[$data] == NULL){
            return 0;
        }else{
            return $_GET[$data];
        }
    }else{
        return 0;
    }
}

function hitung(){
    $hasil = [
        "celcius" => 0,
        "farenheit" => 0,
        "kelvin" => 0,
        "reamur" => 0
    ];

    if(!isset($_GET['dor'])){
        return $hasil;
    }

    if($_GET['dor'] == "Hitung_C"){
        $c = cek_data("celcius");
        $hasil["celcius"] = $c;
        $hasil["farenheit"] = ($c * 9/5) + 32;
        $hasil["kelvin"] = $c + 273;
        $hasil["reamur"] = $c * 4/5;
    }

    if($_GET['dor'] == "Hitung_F"){
        $f = cek_data("farenheit");
        $hasil["celcius"] = ($f - 32) * 5/9;
        $hasil["farenheit"] = $f;
        $hasil["kelvin"] = ($f - 32) * 5/9 + 273;
        $hasil["reamur"] = ($f - 32) * 4/9;
    }
    if($_GET['dor'] == "Hitung_R"){
        $r = cek_data("reamur");
        $hasil["celcius"] = $r * 5/4;
        $hasil["farenheit"] = ($r * 9/4) + 32;
        $hasil["kelvin"] = ($r * 5/4) + 273;
        $hasil["reamur"] = $r;
    }
    if($_GET['dor'] == "Hitung_K"){
        $k = cek_data("kelvin");
        $hasil["celcius"] = $k - 273;
        $hasil["farenheit"] = ($k - 273) * 9/5 + 32;
        $hasil["kelvin"] = $k;
        $hasil["reamur"] = ($k - 273) * 4/5;
    }

    return $hasil;
}

$data = hitung();

$_GET["celcius"]   = $data["celcius"];
$_GET["farenheit"] = $data["farenheit"];
$_GET["kelvin"]    = $data["kelvin"];
$_GET["reamur"]    = $data["reamur"];

?>