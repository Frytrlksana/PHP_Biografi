<?php 
// tampilan about
    // Tanggal lahir
    $tanggal_lahir = "2002-05-10";

    // Menghitung umur
    $tgl_lahir = new DateTime($tanggal_lahir);
    $tgl_sekarang = new DateTime();
    $umur = $tgl_sekarang->diff($tgl_lahir)->format('%y tahun, %m bulan, %d hari, %h jam, %i menit, %s detik');

?>