<?php

$koneksi = mysqli_connect("localhost", "root", "", "badibot_db") or die ("Database Error");

//ambil pesan dari ajax
$pesan = mysqli_real_escape_string($koneksi, $_POST['isi_pesan']);

//cek pertanyaan dalam tabel
$cek = mysqli_query($koneksi, "SELECT jawaban FROM chat WHERE pertanyaan LIKE '%$pesan%' ");

//jika pertanyaan ditemukan,tampilkan jawaban
if(mysqli_num_rows($cek) > 0){
    //hasil ditampung ke var
    $data = mysqli_fetch_assoc($cek);

    //tampung jawaban ke var dan kirim kembali ke ajax
    $balas = $data['jawaban'];
    echo $balas;
}else{
    echo" Maaf, Saya belum menemukan jawaban yang kamu maksud.";
}



?>