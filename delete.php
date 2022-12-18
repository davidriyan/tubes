<?php
include 'connect.php'; //konek ke database
$NPM = $_GET['NPM'];
$sqlDelete = "DELETE FROM mahasiswa WHERE NPM = '$NPM'";
mysqli_query($conn, $sqlDelete);
header("location: index.php");