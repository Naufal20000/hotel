<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HOTEL MAHAL</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Hotel</a>

                <button class="navbar-toggler" type="button" data-bs- toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria- t l " b S t dC t t" i d d "fl " i
                    controls="navbarSupportedContent" aria-expanded="false" aria- label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">

                            <a class="nav-link" aria- current="page" href="#">Home</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link active" href="#">Customer</a>

                        </li>
                        <li class="nav-item">

                            <a class="nav-link active" href="loginuser.php">User</a>


                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Hotel Mahal</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <a href="tambahpasien.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col">

                <table class="table table-striped table-hover table-sm">

                    <tr>
                        <th>No</th>
                        <th>ID Customer</th>
                        <th>Nama Customer</th>
                        <th>No Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM hotel");
                    ?>

                    <?php
                    while ($row = $hasil->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $row['id_cust']; ?>
                            </td>
                            <td>
                                <?= $row['nm_cust']; ?>
                            </td>
                            <td>
                                <?= $row['no_Telp']; ?>
                            </td>
                            <td>
                                <?= $row['jk']; ?>
                            </td>
                            <td>
                                <?= $row['alamat']; ?>
                            </td>
                            <td><a href="editpasien.php?edit=<?= $row['id_cust']; ?>" class="btn btn-warning btn-sm">Edit</a> <a href="koneksi.php?id_cust=<?= $row['id_cust']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Ciee mau di Hapus?')">Hapus</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>