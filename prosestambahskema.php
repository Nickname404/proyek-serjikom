<?php
include 'config.php';


$id = isset($_POST['id']) ? $_POST['id'] : '';
$kd_skema = isset($_POST['kd_skema']) ? $_POST['kd_skema'] : '';
$nama_skema = isset($_POST['nama_skema']) ? $_POST['nama_skema'] : '';
$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
$jumlah_unit = isset($_POST['jumlah_unit']) ? $_POST['jumlah_unit'] : '';




$query = "INSERT into tabel_skema (id, kd_skema, nama_skema, jenis, jumlah_unit) VALUES 
            ('$id', '$kd_skema','$nama_skema', '$jenis', '$jumlah_unit')";
$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='skema.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='tambah_skema.php';

</script>";
}



?>