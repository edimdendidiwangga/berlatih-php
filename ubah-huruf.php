<?php
function ubah_huruf($string){
    $array = str_split($string);
    $result = "";
    foreach ($array as $char) {
        $result .= ++$char;
    }
	echo "<br>";
    return $result;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>