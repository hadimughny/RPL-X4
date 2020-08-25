<?php
// buat class komputer
class komputer {
  
   public function lihat_spec() {
     return "Spec Komputer: Lenovo , 
     Processor Intel core i5, Ram 8GB";
   }
}
  
// turunkan class komputer ke laptop
class laptop extends komputer {
  
   public function lihat_spec() {
     return "Spec Laptop: Asus, 
     Processor Intel core i3, Ram 4GB";
   }
}
// buat objek dari class laptop (instansiasi)
$gadget_baru = new laptop();
  
//panggil method lihat_spec()
echo $gadget_baru->lihat_spec();
?>
