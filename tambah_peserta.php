<?php
include 'header.php';
require 'config.php';
?>
<h1>FORM PENDAFTARAN SERTIFIKASI</h1>
<form class="row g-3" method="post" action="prosestambahpeserta.php">
    <div class="col-md-6">
        <label for="kd_skema" class="form-label">Kode Skema</label>
        <select id="kd_skema" name="kd_skema" class="form-select">
            <option value="" disabled selected>Pilih</option>
            <?php
            $all = mysqli_query($db, "SELECT * FROM tabel_skema");
            while ($fetch = mysqli_fetch_assoc($all)) {
                $kd_skema_option = $fetch['kd_skema'];
            ?>
            <option value="<?= $kd_skema_option; ?>"> <?= $kd_skema_option; ?> </option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="col-md-6">
        <label for="nama_peserta_" class="form-label">Nama Peserta</label>
        <input type="text" name="nama_peserta" class="form-control" id="nama_peserta">
    </div>
    <div class="col-md-4">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select id="jenis_kelamin" name="jenis_kelamin" class="form-select">
            <option disabled selected>pilih Jenis Kelamin</option>
            <option>Laki-Laki</option>
            <option>Perempuan</option>
            <option>Khusus</option>
        </select>
    </div>
    <div class="col-6">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control" id="alamat"></textarea>
    </div>
    <div class="col-md-4">
        <label for="no_hp" class="form-label">No HP</label>
        <input type="text" name="no_hp" class="form-control" id="no_hp">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Daftar</button>
    </div>
</form>