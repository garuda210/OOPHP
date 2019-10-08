<?php
abstract class Buah {
    private $warna;
    
  abstract public function makanan();
        // kunyah
        // nyam..nyam..nyam

    public functions setWarna($warna){
        $this ->warna = $warna;
    }
}

class Apel extends Buah{
    public function makan(){
        // kunyah
        // sampai bagian tengah
    }
}

class Jeruk extends Buah{
    public function makan(){
        // kunyah
        // kunyah
    }
}