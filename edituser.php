<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-
scale=1.0">

    <title>Edit Data User</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data User</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM user where nmUser='$_GET[edit]'");
                ?>
                <?php
                while ($row = $panggil->fetch_assoc()) {
                    ?>
                    <form action="koneksi.php" method="POST">
                    <div class="form-group">
                            <label for="nmUser">Username</label>

                            <input type="text" class="form-control mb-3" name="nmUser" value="<?= $row['nmUser'] ?>">

                        </div>    
                    
                        <div class="form-group">
                            <label for="Pass">Password</label>

                            <input type="password" class="form-control mb-3" name="Pass" value="<?= $row['Pass'] ?>">

                        </div>

                        <div class="form-group">
                        <label for="Posisi">Posisi/Jabatan</label>

                        <input type="text" class="form-control mb-3" name="Posisi" value="<?= $row['Posisi'] ?>">

                         </div>

                            

                            <div class="form-group mt-3">

                                <input type="submit" name="edituser" value="Edit" class="form-control btn btn-primary">
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>