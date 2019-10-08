<?php

define('NAMA', 'Yogaswara');
echo NAMA;

echo"<br>";

const UMUR = 19;
echo UMUR;

// class Coba {
//     const NAMA = 'yogaswara';
// }

// echo Coba::NAMA;

// function coba(){
//     return __FUNCTION__;
// }
// echo coba();
echo"<br>";
class Coba{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj -> kelas;