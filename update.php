<?php
include 'connect.php';
$NPM = $_GET['NPM'];
$sqlGet = "SELECT * FROM mahasiswa WHERE NPM ='$NPM'";
$queryGet = mysqli_query($conn, $sqlGet);
$data = mysqli_fetch_array($queryGet);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>

<body>
    <div class="tabel-form mx-auto border p-3">
        <form action="update.php" method="POST">
            <label for="exampleDataList" class="form-label">NPM</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" value="<?php echo "$data[NPM]"; ?>"
                name="NPM" placeholder="Masukkan NPM anda..." required>

            <label for="exampleDataList" class="form-label">Nama</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList"
                value="<?php echo "$data[Nama_Mahasiswa]"; ?>" name="Nama_Mahasiswa" placeholder="Masukkan Nama anda..."
                required>

            <label for="exampleDataList" class="form-label">Jurusan</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList"
                value="<?php echo "$data[Jurusan]"; ?>" name="Jurusan" placeholder="Masukkan Jurusan anda..." required>

            <label for="exampleDataList" class="form-label">Alamat</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList"
                value="<?php echo "$data[Alamat]"; ?>" name="Alamat" placeholder="Masukkan Alamat anda..." required>

            <label for="exampleDataList" class="form-label">Telepon</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList"
                value="<?php echo "$data[Telepon]"; ?>" name="Telepon" placeholder="Masukkan Telepon anda..." required>
            <br>
            <div class="d-grid gap-2 d-md-block">
                <input type="submit" class="btn btn-success mt-3" name="tambah" value="Update">
                <a href="index.php" class="btn btn-md btn-danger mt-3">Kembali</a>
            </div>

        </form>
    </div>

    <?php
    if (isset($_POST['tambah'])) {
        $NPM = $_POST['NPM'];
        $Nama_Mahasiswa = $_POST['Nama_Mahasiswa'];
        $Jurusan = $_POST['Jurusan'];
        $Alamat = $_POST['Alamat'];
        $Telepon = $_POST['Telepon'];

        $sqlUpdate = "UPDATE mahasiswa SET Nama_Mahasiswa='$Nama_Mahasiswa', Jurusan='$Jurusan', Alamat='$Alamat', Telepon='$Telepon'
        WHERE NPM='$NPM'";
        $queryUpdate = mysqli_query($conn, $sqlUpdate);
        header('location:index.php');
    }
    ?>
</body>

</html>