<?php
include "koneksi.php";

$nim = $_POST['nim'];
$name = $_POST['nm_lengkap'];
$tmptLahir = $_POST['tmp_lahir'];
$tgllahir = $_POST['tgl_lahir'];
$jeniskelamin = $_POST['jk'];

$insert = mysqli_query($koneksi,"INSERT INTO tbl_mahasiswa VALUES ('$nim','$name','$tmptLahir','$tgllahir','$jeniskelamin')");

if($insert) {
	echo "Data Berhasil Disimpan";
} else {
	echo "Data Gagal Disimpan";
}
?>