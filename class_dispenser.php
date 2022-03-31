<?php
//Buat kelas induk
class Dispenser{
    //Buat properti
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;


    //fungsi construct
     function __construct() {
        $this->volume = 4000;
        $this->hargaSegelas = 15000;
        $this->volumeGelas = 250;
        
    }

 protected function volume() {
    $this->volume = 4000;
}
function get_volume(){
    return $this->volume;
}
function get_namaMinuman($namaMinuman){
    return $this->namaMinuman = $namaMinuman;
}
public function jual($Vit){
    return "jual Sebanyak {$Vit} Gelas <br> Sisa volume".($this->volume-($this->volumeGelas* $Vit));

}
}

$Vit1 = new Dispenser;

echo"namaMinuman".$Vit1->get_namaMinuman("Vit");
echo"<br>volume Vit".$Vit1->get_volume();
echo"<br>".$Vit1->jual(4);
?>