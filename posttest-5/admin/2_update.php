<?php
require "connect.php";

$id_stationery = $_GET['id_stationery'];
$query = "SELECT * FROM stationery WHERE id_stationery = $id_stationery";
$result = mysqli_query($conn, $query);

$stationery = [];

while ($row = mysqli_fetch_assoc($result)) {
    $stationery[] = $row;
}

$stationery = $stationery[0];



if (isset($_POST['tambah'])) {
    $name = $_POST['name'];
    $merk = $_POST['merk'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $query = "UPDATE stationery SET name = '$name', merk = '$merk', price = '$price', stock = '$stock' WHERE id_stationery = $id_stationery";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "
                <script>
                    alert('Berhasil mengubah data!');
                    document.location.href = 'products.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Gagal mengubah data!');
                    document.location.href = 'products.php';
                </script>
            ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Stationery</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="../style.css" />

</head>

<body>
    <div class="login-container">
        <h2>Update Stationery</h2>
        <form action="" method="post">
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name" value="<?php echo $stationery['name']; ?>" required><br><br>
    
            <label for="merk">Merk</label><br>
            <input type="text" id="merk" name="merk" value="<?php echo $stationery['merk']; ?>" required><br><br>
    
            <label for="price">Price</label><br>
            <input type="number" id="price" name="price" value="<?php echo $stationery['price']; ?>" required><br><br>
    
            <label for="stock">Stock</label><br>
            <input type="number" id="stock" name="stock" value="<?php echo $stationery['stock']; ?>" required><br><br>
    
            <button type="submit" class="button-crud" name="tambah">Update</button>
        </form>
    </div>
</body>

</html>