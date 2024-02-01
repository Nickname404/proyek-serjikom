<?php
include 'config.php';


$id = isset($_POST['id']) ? $_POST['id'] : '';
$kd_skema = isset($_POST['kd_skema']) ? $_POST['kd_skema'] : '';
$nama_peserta = isset($_POST['nama_peserta']) ? $_POST['nama_peserta'] : '';
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$no_hp = isset($_POST['no_hp']) ? $_POST['no_hp'] : '';




$query = "INSERT into tabel_peserta (id, kd_skema, nama_peserta, jenis_kelamin, alamat, no_hp) VALUES 
            ('$id', '$kd_skema','$nama_peserta', '$jenis_kelamin', '$alamat','$no_hp')";
$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='peserta.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='tambah_peserta.php';

</script>";
}



?>