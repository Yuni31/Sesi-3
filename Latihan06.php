<?php
//MODEL MULTIDIMENSIONAL ARRAYS
//Dimensi array lebih dari satu dimensi bisa dua di mensi,Tiga dimensi atau lebih
     $Mahasiswa = array(
        array("Yuda", "2234567845", "Denpasar"),
        array("Kevin", "2254309532", "Malang"),
        array("Reza", "2234569667", "Jakarta"),
        array("Fitra", "2279865308", "Surabaya"),
        array("Faddel", "22312309878", "Karangasem"),
     ); 
     header("Content-Type: application/json");
     echo json_encode($Mahasiswa);
