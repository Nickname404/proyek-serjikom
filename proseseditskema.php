<?php
include 'config.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$kd_skema = isset($_POST['kd_skema']) ? $_POST['kd_skema'] : '';
$nama_skema = isset($_POST['nama_skema']) ? $_POST['nama_skema'] : '';
$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
$jumlah_unit = isset($_POST['jumlah_unit']) ? $_POST['jumlah_unit'] : '';

if (!empty($id)) {
    // Lakukan operasi update atau perubahan data di sini
    $query = "UPDATE tabel_skema SET kd_skema='$kd_skema', nama_skema='$nama_skema', jenis='$jenis', jumlah_unit='$jumlah_unit' WHERE id=$id";
    $eksekusi = mysqli_query($db, $query);

    if ($eksekusi) {
        echo "<script>
                alert('Data Berhasil diubah!');
                window.location='skema.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal diubah!');
                window.location='editskema.php';
              </script>";
    }
} else {
    echo "<script>
            alert('ID tidak tersedia!');
            window.location='editskema.php';
          </script>";
}
?>