<?php 
include '../koneksi.php';
$nama = $_POST['nama_kul'];
$kategori = $_POST['kategori_kul'];
$deskripsi = $_POST['desk_kul'];
$lokasi = $_POST['lok_kul'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['img_kul']['name'];
$ukuran = $_FILES['img_kul']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	echo '<script>alert("Format harus PNG, JPG, atau GIF!!!");location="index.php";</script>';
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['img_kul']['tmp_name'], 'img/'.$xx);
		mysqli_query($mysqli, "INSERT INTO kuliner VALUES(NULL,'$nama','$kategori','$deskripsi', '$lokasi', '$xx')");
		echo '<script>alert("Data berhasil ditambahkan");location="index.php";</script>';
	}else{
		echo '<script>alert("Ukuran gambar maksimal 1 MB");location="index.php";</script>';
	}
}
?>