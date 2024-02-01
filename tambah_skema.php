<?php
include 'header.php';
require 'config.php';
?>
<h1>PENAMBAHAN DATA SERTIFIKASI</h1>
<form class="row g-3 p-5" method="post" action="prosestambahskema.php">
    <div class="col-md-6">
        <label for="kd_skema" class="form-label">Kode Skema</label>
        <input type="text" name="kd_skema" class="form-control" id="kd_skema" />
    </div>
    <div class="col-md-6">
        <label for="nama_skema" class="form-label">Nama Skema</label>
        <input type="text" name="nama_skema" class="form-control" id="nama_skema" />
    </div>
    <div class="col-md-4">
        <label for="jenis" class="form-label">Jenis Skema</label>
        <select id="jenis" class="form-select" name="jenis">
            <option disabled selected>Pilih</option>
            <option value="KKNI">KKNI</option>
            <option value="Klaster">Klaster</option>
        </select>
    </div>
    <div class="col-6 md-5">
        <label for="jumlah_unit" class="form-label">Jumlah Unit</label>
        <input type="number" name="jumlah_unit" class="form-control" id="jumlah_unit" />
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-info">Tambahkan Data</button>
    </div>
</form>