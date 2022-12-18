<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>CRUD</title>

</head>

<body>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr style="background-color: green;">
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        $sqlGet = "SELECT * FROM mahasiswa";
        $query = mysqli_query($conn, $sqlGet);
        while (
            $data = mysqli_fetch_array($query)
        ) {
            echo "
                    <tbody>
                    <tr>
                        <td>$data[NPM]</td>
                        <td>$data[Nama_Mahasiswa]</td>
                        <td>$data[Jurusan]</td>
                        <td>$data[Alamat]</td>
                        <td>$data[Telepon]</td>
                        <td>
                            <div class='row'>
                                <div class='col d-felx justify-content-center'>
                                    <a href='update.php?NPM=$data[NPM]' class='btn btn-sm btn-success'>Update</a>
                                </div>
                                <div class='col d-felx justify-content-center'>
                                    <a href='delete.php?NPM=$data[NPM]' class='btn btn-sm btn-danger'>Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                    ";
        }

        ?>

    </table>

    <center>
        <div class="container mt-3">
            <a href="add.php" class="btn btn-md btn-primary mb-3">Tambah Data</a>
    </center>
</body>

</html>