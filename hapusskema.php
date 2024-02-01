<?php
include "config.php";

$id=$_GET['id'];


$query = "DELETE FROM tabel_skema WHERE id = $id";
$eksekusi = mysqli_query($db, $query);

if ($eksekusi  ){
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='skema.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal dihapus');
    window.location='skema.php';

</script>";
}


?>