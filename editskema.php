<?php
include 'header.php';
require 'config.php';

$id = $_GET['id'];
$query = "SELECT * FROM tabel_skema WHERE id=$id";
$eksekusi = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($eksekusi);

$kd_skema = $data['kd_skema'];
$nama_skema = $data['nama_skema'];
$jenis = $data['jenis']; // Sesuaikan variabel jenis
$jumlah_unit = $data['jumlah_unit'];
?>
<h1>EDIT SERTIFIKASI</h1>
<form class="row g-3 p-5" method="post" action="proseseditskema.php">
    <div class="col-md-6">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />

        <label for="kd_skema" class="form-label">Kode Skema</label>
        <input type="text" name="kd_skema" class="form-control" id="kd_skema" value="<?php echo $kd_skema; ?>" />
    </div>
    <div class="col-md-6">
        <label for="nama_skema" class="form-label">Nama Skema</label>
        <input type="text" name="nama_skema" class="form-control" id="nama_skema" value="<?php echo $nama_skema; ?>" />
    </div>
    <div class="col-md-4">
        <label for="jenis" class="form-label">Jenis Skema</label>
        <select name="jenis" class="form-control">
            <option value="" disabled>Pilih</option>
            <?php
            $all = mysqli_query($db, "SELECT * FROM tabel_skema");
            while ($fetch = mysqli_fetch_assoc($all)) {
                $id_option = $fetch['id'];
                $jenis_option = $fetch['jenis'];
                $selected = ($jenis_option == $jenis) ? 'selected' : ''; // Sesuaikan kondisi
            ?>
            <option value="<?= $jenis_option; ?>" <?= $selected; ?>> <?= $jenis_option; ?> </option>
            <option value="Klaster">Klaster</option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="col-6 md-5">
        <label for="jumlah_unit" class="form-label">Jumlah Unit</label>
        <input type="number" name="jumlah_unit" class="form-control" id="jumlah_unit"
            value="<?php echo $jumlah_unit; ?>" />
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-info">Update Data</button>
    </div>
</form>