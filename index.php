<?php
    echo "Intro PHP <br>";

    $nim = "1942101732";
    $nama = "Miguel";
    $umur = 20;
    $nilai = 90.8;
    $status = true;

    echo "Nim : $nim <br>";
    echo "Nama : $nama <br>";
    print "Umur : $umur <br>";
    printf ("Nilai : %.3f <br>", $nilai);
    if ($status)
        echo "Status : Mahasiswa Aktif <br>";
    else
        echo "Status : Mahasiswa Tidak Aktif <br>";

    $gaji = 5000000;
    $pajak = 0.5;
    $p_penghasilan = $gaji - ($gaji*$pajak);


    print("================================== <br>");
    echo "Gaji saya sebelum kena pajak = Rp. $gaji <br>";
    echo "Gaji saya sesudah kena pajak = Rp. $p_penghasilan <br>";

?>