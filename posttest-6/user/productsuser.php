<?php
require '../admin/connect.php';

$query = "SELECT * FROM stationery";
$result = mysqli_query($conn, $query);

$stationery = [];
while ($row = mysqli_fetch_assoc($result)) {
    $stationery[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../style.css">
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
</head>

<body>
    <header>
        <div class="left-header">
            <img src="../assets/logo.png" alt="logo">
            <h2>Dim's Stationery</h2>
        </div>
        <nav class="right-header">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about-us.html">About Me</a></li>
                <li><a href="productsuser.php">Products</a></li>
                <li><a href="../admin/login.php">Login</a></li>
                <button id="switch-theme">🌓</button>
            </ul>
        </nav>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <main>
        <table class="table-stationery">
            <thead>
                <tr class="table-stationery-row">
                    <th class="table-stationery-header">No</th>
                    <th class="table-stationery-header">Nama</th>
                    <th class="table-stationery-header">Merk</th>
                    <th class="table-stationery-header">Harga</th>
                    <th class="table-stationery-header">Stok</th>
                    <th class="table-stationery-header">Foto</th>
                </tr>
            </thead>

            <tbody>
                <?php $i = 1;
                foreach ($stationery as $stry) : ?>
                    <tr class="table-stationery-row">
                        <!--  -->
                        <td class="table-stationery-data"><?php echo $i; ?></td>
                        <td class="table-stationery-data"><?php echo $stry['name'] ?></td>
                        <td class="table-stationery-data"><?php echo $stry['merk'] ?></td>
                        <td class="table-stationery-data"><?php echo $stry['price'] ?></td>
                        <td class="table-stationery-data"><?php echo $stry['stock'] ?></td>
                        <td class="table-stationery-data">
                            <img src="../images/<?php echo $stry['photo'] ?>" alt="<?php echo $stry['name'] ?>" width="80px" class="imagination" height="100px" style="display:block; margin 0 auto;">
                        </td>
                    </tr>
                <?php $i++;
                endforeach; ?>
            </tbody>
        </table>
    </main>

    <footer id="footer">
        <p>&copy; 2024 Dim's Stationery. All Rights Reserved.</p>
    </footer>

    <script src="../script.js"></script>
</body>

</html>