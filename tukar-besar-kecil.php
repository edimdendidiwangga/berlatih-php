<?php
function tukar_besar_kecil($string){
    $array = str_split($string);
    $result = "";
    foreach ($array as $char) {
        if (ctype_upper($char) == true) {
            $result .= strtolower($char);
        } else {
            $result .= strtoupper($char);
        }
    }
    echo "<br>";
    return $result;
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>