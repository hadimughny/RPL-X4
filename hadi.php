<?php
class rotibakar{
  
    var $pemesan;
    var $jenis;
    var $size;
  
   function tampil_matang() {
     return "Roti Sudah Matang";
    }
   function tampil_mentah() {
     return "Roti Belum Matang";
   }
}
  
$rotibakar1 = new rotibakar();
  
$rotibakar1->pemesan="Hadi Mughny";
$rotibakar1->jenis="roti bakar selai";
$rotibakar1->size="sedang";
  
echo $rotibakar1->pemesan;
echo "<br />";
echo $rotibakar1->jenis;
echo "<br />";
echo $rotibakar1->size;
echo "<br />";
  
echo $rotibakar1->tampil_matang();
echo "<br />";
echo $rotibakar1->tampil_mentah();
?>
