<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
if (!$conn) {
	die("Connection failed : " .mysqli_connect_error());
}

$sql = "CREATE TABLE registrasi ( 
		id INT(11) AUTO_INCREMENT PRIMARY KEY, 
		tanggal VARCHAR(30) NOT NULL,
		namalengkap VARCHAR(50) NOT NULL, 
		jeniskelamin VARCHAR(40) NOT NULL, 
		nisn INT(15) NOT NULL,
		nik INT(15) NOT NULL,
		tempatlahir VARCHAR(40) NOT NULL,
		tanggallahir VARCHAR(40) NOT NULL,
		akta INT(15) NOT NULL,
		agama VARCHAR(30) NOT NULL,
		kewarganegaraan VARCHAR(30) NOT NULL,
		berkebutuhankhusus VARCHAR(60) NOT NULL,
		alamat VARCHAR(50) NOT NULL,
		rt INT(11) NOT NULL,
		rw INT(11) NOT NULL,
		dusun VARCHAR(40) NOT NULL,
		kelurahan VARCHAR(40) NOT NULL,
		kecamatan VARCHAR(40) NOT NULL,
		kodepos INT(11) NOT NULL,
		lintang VARCHAR(40) NOT NULL,
		bujur VARCHAR(40) NOT NULL,
		tempattinggal VARCHAR(50) NOT NULL,
		transportasi VARCHAR(40) NOT NULL,
		nokks INT(15) NOT NULL,
		anak INT(11) NOT NULL,
		penerima VARCHAR(30) NOT NULL,
		nokps INT(15) NOT NULL)";
	
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>