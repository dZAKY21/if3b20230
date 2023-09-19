<?php
// pertemuan ke-3
// Materi function dan if condition
$npm = 2226250083;
$nama = "Dzaky";
// Built-in function
$tahun_masuk = substr(
    $npm,
    0,
    2,

);

echo $tahun_masuk;
$tahun_lulus = substr(
    $npm,
    2,
    2
);
echo "<br>" . $tahun_lulus;

$kode_prodi = substr(
    $npm,
    4,
    2
);
echo "<br>" . $kode_prodi;

$nomor_urut = substr(
    $npm,
    6,
    4
);
echo "<br>" . $nomor_urut;
echo "<hr>" . strtoupper($nama);
echo "<br>" . ucfirst($nama);

// IF condition 
// Kode Prodi : 25, Maka informatika 
// Kode Prodi : 24, Maka Sistem Infomasi
echo "<br>";

if ($kode_prodi == 25) {
    echo "Informatika";

} else if ($kode_prodi == 24) {
    echo " Sistem Informasi";
}


?>