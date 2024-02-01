<?php
include 'header.php';
require 'config.php';

echo "<h1>HOME</h1>";

// Prepared statement untuk tabel_peserta
$sql_peserta = "SELECT * FROM tabel_peserta";
$stmt_peserta = $db->prepare($sql_peserta);

if ($stmt_peserta) {
    $stmt_peserta->execute();
    $result_peserta = $stmt_peserta->get_result();

    if ($result_peserta->num_rows > 0) {
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

        while ($query_peserta = $result_peserta->fetch_assoc()) {
            $id_peserta = $query_peserta['id'];
            echo "<tr>
                    <td>{$query_peserta['id']}</td>
                    <td>{$query_peserta['kd_skema']}</td>
                    <td>{$query_peserta['nama_peserta']}</td>
                    <td>{$query_peserta['jenis_kelamin']}</td>
                    <td>{$query_peserta['alamat']}</td>
                    <td>{$query_peserta['no_hp']}</td>
                    <td>
                        <a href='editpeserta.php?id=$id_peserta' class='btn btn-primary'>Edit</a>
                        <a href='hapuspeserta.php?id=$id_peserta' class='btn btn-success'>Hapus</a>
                    </td>
                  </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<p>Tidak ada data pada tabel_peserta.</p>";
    }
} else {
    echo "Error in prepared statement for tabel_peserta: " . $db->error;
}

// Prepared statement untuk tabel_skema
$sql_skema = "SELECT * FROM tabel_skema";
$stmt_skema = $db->prepare($sql_skema);

if ($stmt_skema) {
    $stmt_skema->execute();
    // Lakukan sesuatu dengan hasil dari tabel_skema jika diperlukan
} else {
    echo "Error in prepared statement for tabel_skema: " . $db->error;
}

echo "<button type='button' class='btn btn-info' onclick='location.href=\"tambah_peserta.php\"'>Tambah Data</button>";
?>