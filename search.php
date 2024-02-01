<?php
include 'config.php';
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["search"];

    $sql_nama = "SELECT * FROM tabel_peserta WHERE nama_peserta LIKE '%$search%' OR alamat LIKE '%$search%'";
    $result_nama = $db->query($sql_nama);

    if ($result_nama->num_rows > 0) {
        echo "<table class='table'>
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Kode Skema</th>
                    <th scope='col'>Nama peserta</th>
                    <th scope='col'>Jenis Kelamin</th>
                    <th scope='col'>Alamat</th>
                    <th scope='col'>No HP</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>";

        while ($data_nama = $result_nama->fetch_assoc()) {
            $id_peserta = $data_nama['id'];
            echo "<tr>
                <td>{$data_nama['id']}</td>
                <td>{$data_nama['kd_skema']}</td>
                <td>{$data_nama['nama_peserta']}</td>
                <td>{$data_nama['jenis_kelamin']}</td>
                <td>{$data_nama['alamat']}</td>
                <td>{$data_nama['no_hp']}</td>
                <td>
                    <a href='editpeserta.php?id=$id_peserta' class='btn btn-primary'>Edit</a>
                    <a href='hapuspeserta.php?id=$id_peserta' class='btn btn-success'>Hapus</a>
                </td>
              </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "Data tidak ditemukan.";
    }
}
?>