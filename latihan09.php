<?php
    //Fungsi dengan parameter dengan nilai default
    function HitungLuas($Panjang=6,$Lebar=4){
        return $Panjang*$Lebar;
    }

 //Menggunakan Fungsi dengan Parameter
 echo HitungLuas(7,3);

echo "<br>";
 //Tidak ada parameter maka akan
 //Menggunakan nilai default
 echo HitungLuas();