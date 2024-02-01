<?php
include 'header.php';
require 'config.php';

$id = $_GET['id'];
$query = "SELECT * FROM tabel_peserta WHERE id=$id";
$eksekusi = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($eksekusi);

$kd_skema = $data['kd_skema'];
$nama_peserta = $data['nama_peserta'];
$jenis_kelamin = $data['jenis_kelamin'];
$alamat = $data['alamat'];
$no_hp = $data['no_hp'];
?>
<h1>EDIT PESERTA</h1>
<form class="row g-3 p-5" method="post" action="proseseditpeserta.php">
    <div class="col-md-6">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <label for="kd_skema" class="form-label">Kode Skema</label>
        <select id="kd_skema" name="kd_skema" class="form-select">
            <option value="" disabled selected>Pilih</option>
            <?php
            $all = mysqli_query($db, "SELECT * FROM tabel_skema");
            while ($fetch = mysqli_fetch_assoc($all)) {
                $kd_skema_option = $fetch['kd_skema'];
                $selected = ($kd_skema == $kd_skema_option) ? 'selected' : '';
            ?>
            <option value="<?= $kd_skema_option; ?>" <?= $selected; ?>> <?= $kd_skema_option; ?> </option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="col-md-6">
        <label for="nama_peserta" class="form-label">Nama Peserta</label>
        <input type="text" name="nama_peserta" class="form-control" id="nama_peserta"
            value="<?php echo $nama_peserta; ?>" />
    </div>
    <div class="col-md-4">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
            <option value="" disabled>Pilih</option>
            <?php
            $jenis_kelamin_options = array("Laki-Laki", "Perempuan", "Khusus");
            foreach ($jenis_kelamin_options as $option) {
                $selected = ($jenis_kelamin == $option) ? 'selected' : '';
            ?>
            <option value="<?= $option; ?>" <?= $selected; ?>> <?= $option; ?> </option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="col-6">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control" id="alamat"><?php echo $alamat; ?></textarea>
    </div>
    <div class="col-md-4">
        <label for="no_hp" class="form-label">No HP</label>
        <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?php echo $no_hp; ?>">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-info">Update Data</button>
    </div>
</form>