<?php
include 'config.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$kd_skema = isset($_POST['kd_skema']) ? $_POST['kd_skema'] : '';
$nama_peserta = isset($_POST['nama_peserta']) ? $_POST['nama_peserta'] : '';
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$no_hp = isset($_POST['no_hp']) ? $_POST['no_hp'] : '';

if (!empty($id)) {
    $query = "UPDATE tabel_peserta SET kd_skema='$kd_skema', nama_peserta='$nama_peserta', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp' WHERE id=$id";
    $eksekusi = mysqli_query($db, $query);

    if ($eksekusi) {
        echo "<script>
                alert('Data Berhasil diubah!');
                window.location='peserta.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal diubah!');
                window.location='editpeserta.php?id=$id';
              </script>";
    }
} else {
    echo "<script>
            alert('ID tidak tersedia!');
            window.location='editpeserta.php';
          </script>";
}
?>