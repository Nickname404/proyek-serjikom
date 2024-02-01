<?php
include 'header.php';
require 'config.php';

?>

<h1>DATA SERTIFIKASI</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Kode Skema</th>
            <th scope="col">Nama Skema</th>
            <th scope="col">Jenis Skema</th>
            <th scope="col">Jumlah Unit</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tabel_skema";
        $stmt = $db->prepare($sql);

        if ($stmt) {
            $stmt->execute();
            $eksekusi = $stmt->get_result();

            if ($eksekusi->num_rows > 0) {
                while ($query = $eksekusi->fetch_assoc()) {
                    $id = $query['id'];
                    echo "<tr>";
                    echo "<td>" . $query['kd_skema'] . "</td>";
                    echo "<td>" . $query['nama_skema'] . "</td>";
                    echo "<td>" . $query['jenis'] . "</td>";
                    echo "<td>" . $query['jumlah_unit'] . "</td>";
                    echo "<td>
                            <a href='editskema.php?id=$id' class='btn btn-primary'>Edit</a>
                            <a href='hapusskema.php?id=$id' class='btn btn-success'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr>
                        <td colspan='5'>Tidak ada data</td>
                      </tr>";
            }
        } else {
            echo "Error in prepared statement: " . $db->error;
        }

        ?>
    </tbody>
</table>
<button type="button" class="btn btn-info" onclick="location.href='tambah_skema.php'">Tambah Data</button>