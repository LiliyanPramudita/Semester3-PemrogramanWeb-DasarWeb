<?php
function perkenalan ($nama, $salam = "Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Pramudita", "Hallo");
echo "<hr>";
$saya = "Liliyan";
$ucapanSalam = "Selamat pagi";

perkenalan($saya, $ucapanSalam);
?>