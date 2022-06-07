<?php
    $id_penduduk = $_POST['id_penduduk'];
    $nama_lengkap = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['gender_option'];
    $pendidikan = $_POST['edu_option'];
    $status = $_POST['status_option'];

    include 'connection.php';
    $query1 = "INSERT INTO data_penduduk VALUES ('$id_penduduk','$nama_lengkap','$tgl_lahir','$jenis_kelamin','$pendidikan','$status')";
    mysqli_query ($conn, $query1);
?>