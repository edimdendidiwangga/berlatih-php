<?php
function tentukan_nilai($number)
{
    switch ($number) {
        case $number >=85 && $number <=100:
            return "Sangat baik";
            break;
        case $number >=70 && $number < 85:
            return "Baik";
            break;
        case $number >=60 && $number < 70:
            return "Cukup";
            break;    
        default:
            return "Kurang";
            break;
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>