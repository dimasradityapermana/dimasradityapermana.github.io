<?php
require "connect.php";
$id_stationery = $_GET['id_stationery'];

$query = "DELETE FROM stationery WHERE id_stationery = $id_stationery";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "
        <script>
            alert('Berhasil menghapus data!');
            document.location.href = 'products.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('Gagal menghapus data!');
            document.location.href = 'products.php';
        </script>
        ";
}
