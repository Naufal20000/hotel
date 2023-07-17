<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-
scale=1.0">

    <title>Tambah Data User</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data User</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="nmUser">Nama User</label>

                        <input type="text" class="form-control mb-3" name="nmUser" placeholder="Username">

                    </div>
                    <div class="form-group">
                        <label for="Pass">Password</label>

                        <input type="password" class="form-control mb-3" name="Pass" placeholder="Password">

                    </div>
                    <div class="form-group">
                        <label for="Posisi">Posisi/Jabatan</label>

                        <input type="text" class="form-control mb-3" name="Posisi" placeholder="Posisi">

                    </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpanuser" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>