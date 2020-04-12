<!DOCTYPE html>
<html>
<head>
	<title> Form Pendaftaran Peserta Didik Baru </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
	crossorigin="anonymous">
<style>
	.warning {color: red;}
	.body{margin-top: 1cm; margin-right: 2cm;
		margin-bottom: 1cm; margin-left: 2cm;
		font-family: times new roman; font-size: 20px;}
	.main {font-weight: bold;  font-style: normal; font-family: times new roman;}
	.main1 {font-weight: bold; font-family: times new roman;}
	.main2 {font-family: times new roman;}
	.main3 {color: black; font-weight: bold; font-family: times new roman; 
		font-size: 20px; text-align: center;}
</style>
</head>
<body>
<?php
$error_tanggal = "";
$error_namalengkap = "";
$error_jeniskelamin = "";
$error_nisn = "";
$error_nik = "";
$error_tempatlahir = "";
$error_tanggallahir = "";
$error_akta = "";
$error_agama = "";
$error_kewarganegaraan = "";
$error_berkebutuhankhusus = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_kelurahan = "";
$error_kecamatan = "";
$error_kodepos = "";
$error_lintang = "";
$error_bujur = "";
$error_tempattinggal = "";
$error_transportasi = "";
$error_nokks = "";
$error_anak = "";
$error_penerima = "";
$error_nokps = "";

$tanggal = "";
$namalengkap = "";
$jeniskelamin = "";
$nisn = "";
$nik = "";
$tempatlahir = "";
$tanggallahir = "";
$akta = "";
$agama = "";
$kewarganegaraan = "";
$berkebutuhankhusus = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$kelurahan = "";
$kecamatan = "";
$kodepos = "";
$lintang = "";
$bujur = "";
$tempattinggal = "";
$transportasi = "";
$nokks = "";
$anak = "";
$penerima = "";
$nokps = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["tanggal"]))
	{
		$error_tanggal = "wajib di isi";
	}
	else
	{
		$tanggal = cek_input($_POST["tanggal"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$tanggal)) 
		{
			$tanggalErr = "input hanya huruf, angka dan spasi";
		}
	}

	if (empty($_POST["namalengkap"]))
	{
		$error_namalengkap = "wajib di isi";
	}
	else
	{
		$namalengkap = cek_input($_POST["namalengkap"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$namalengkap)) 
		{
			$namalengkapErr = "input hanya huruf dan spasi";
		}
	}

	if (empty($_POST["jeniskelamin"])) 
	{
		$error_jeniskelamin = "wajib di isi";
	}
	else
	{
		$jeniskelamin = cek_input($_POST["jeniskelamin"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$jeniskelamin)) 
		{
			$jeniskelaminErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["nisn"]))
	{
		$error_nisn = "wajib di isi";
	}
	else
	{
		$nisn = cek_input($_POST["nisn"]);

		if (!is_numeric($nisn)) 
		{
			$error_nisn = "input hanya boleh angka";
		}
	}

	if (empty($_POST["nik"]))
	{
		$error_nik = "wajib di isi";
	}
	else
	{
		$nik = cek_input($_POST["nik"]);

		if (!is_numeric($nik)) 
		{
			$error_nik = "input hanya boleh angka";
		}
	}

	if (empty($_POST["tempatlahir"]))
	{
		$error_tempatlahir = "wajib di isi";
	}
	else
	{
		$tempatlahir = cek_input($_POST["tempatlahir"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$tempatlahir)) 
		{
			$tempatlahirErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["tanggallahir"]))
	{
		$error_tanggallahir = "wajib di isi";
	}
	else
	{
		$tanggallahir = cek_input($_POST["tanggallahir"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$tanggallahir)) 
		{
			$tanggallahirErr = "input hanya huruf, angka dan spasi";
		}
	}

	if (empty($_POST["akta"]))
	{
		$error_akta = "wajib di isi";
	}
	else
	{
		$akta = cek_input($_POST["akta"]);

		if (!is_numeric($akta)) 
		{
			$error_akta = "input hanya boleh angka";
		}
	}

	if (empty($_POST["agama"]))
	{
		$error_agama = "wajib di isi";
	}
	else
	{
		$agama = cek_input($_POST["agama"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$agama)) 
		{
			$agamaErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["kewarganegaraan"]))
	{
		$error_kewarganegaraan = "wajib di isi";
	}
	else
	{
		$kewarganegaraan = cek_input($_POST["kewarganegaraan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kewarganegaraan)) 
		{
			$kewarganegaraanErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["berkebutuhankhusus"]))
	{
		$error_berkebutuhankhusus = "input 'tidak' apabila tidak berkebutuhan khusus";
	}
	else
	{
		$berkebutuhankhusus = cek_input($_POST["berkebutuhankhusus"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$berkebutuhankhusus)) 
		{
			$berkebutuhankhususErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["alamat"]))
	{
		$error_alamat = "wajib di isi";
	}
	else
	{
		$alamat = cek_input($_POST["alamat"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$alamat)) 
		{
			$alamatErr = "input hanya huruf, angka dan spasi";
		}
	}

	if (empty($_POST["rt"]))
	{
		$error_rt = "wajib di isi";
	}
	else
	{
		$rt = cek_input($_POST["rt"]);

		if (!is_numeric($rt)) 
		{
			$error_rt = "input hanya boleh angka";
		}
	}

	if (empty($_POST["rw"]))
	{
		$error_rw = "wajib di isi";
	}
	else
	{
		$rw = cek_input($_POST["rw"]);

		if (!is_numeric($rw)) 
		{
			$error_rw = "input hanya boleh angka";
		}
	}

	if (empty($_POST["dusun"]))
	{
		$error_dusun = "wajib di isi";
	}
	else
	{
		$dusun = cek_input($_POST["dusun"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$dusun)) 
		{
			$dusunErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["kelurahan"]))
	{
		$error_kelurahan = "wajib di isi";
	}
	else
	{
		$kelurahan = cek_input($_POST["kelurahan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kelurahan)) 
		{
			$kelurahanErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["kecamatan"]))
	{
		$error_kecamatan = "wajib di isi";
	}
	else
	{
		$kecamatan = cek_input($_POST["kecamatan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kecamatan)) 
		{
			$kecamatanErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["kodepos"]))
	{
		$error_kodepos = "wajib di isi";
	}
	else
	{
		$kodepos = cek_input($_POST["kodepos"]);

		if (!is_numeric($kodepos)) 
		{
			$error_kodepos = "input hanya boleh angka";
		}
	}

	if (empty($_POST["lintang"]))
	{
		$error_lintang = "wajib di isi";
	}
	else
	{
		$lintang = cek_input($_POST["lintang"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$lintang)) 
		{
			$lintangErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["bujur"]))
	{
		$error_bujur = "wajib di isi";
	}
	else
	{
		$bujur = cek_input($_POST["bujur"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$bujur)) 
		{
			$bujurErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["tempattinggal"]))
	{
		$error_tempattinggal = "wajib di isi";
	}
	else
	{
		$tempattinggal = cek_input($_POST["tempattinggal"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$tempattinggal)) 
		{
			$tempattinggalErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["transportasi"]))
	{
		$error_transportasi = "wajib di isi";
	}
	else
	{
		$transportasi = cek_input($_POST["transportasi"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$transportasi)) 
		{
			$transportasiErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["nokks"]))
	{
		$error_nokks = "wajib di isi";
	}
	else
	{
		$nokks = cek_input($_POST["nokks"]);

		if (!is_numeric($nokks)) 
		{
			$error_nokks = "input hanya boleh angka";
		}
	}

	if (empty($_POST["anak"]))
	{
		$error_anak = "wajib di isi";
	}
	else
	{
		$anak = cek_input($_POST["anak"]);

		if (!is_numeric($anak)) 
		{
			$error_anak = "input hanya boleh angka";
		}
	}

	if (empty($_POST["penerima"])) 
	{
		$error_penerima = "input Ya / Tidak";
	}
	else
	{
		$penerima = cek_input($_POST["penerima"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$penerima)) 
		{
			$penerimaErr = "input hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["nokps"]))
	{
		$error_nokps = "wajib di isi ";
	}
	else
	{
		$nokps = cek_input($_POST["nokps"]);

		if (!is_numeric($nokps)) 
		{
			$error_nokps = "input hanya boleh angka";
		}
	}
}

function cek_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header bg-warning text-white">
				<h2 class="main" align="center"> FORMULIR PESERTA DIDIK </h2>
			</div>

			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="card-body">
				<div align="right">
					<table class="main3" align="right" width="120" border="4" cellspacing="20" cellpadding="2"><tr> <td class="main3" align="center"> F-PD </td> </tr></table>
				</div><br>
			
			<div class="form-group row">
				<label for="tanggal" class="col-sm-2 col-form-label main2"> Tanggal </label>
				<label> : </label>
				<div class="col-sm-2">
					<input type="text" name="tanggal" class="form-control <?php echo($error_tanggal !="" ? "is-invalid" : "");?> main2" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>">
					<span class="warning"><?php echo $error_tanggal; ?></span>
				</div>
			</div>

			<div class="card-header col-md-12 bg-primary text-white ">
				<h4 class="main1" align="left"> DATA PRIBADI </h4>
			</div>
			<div class="card-body">
				<div class="form-group row">
					<label for="namalengkap" class="col-sm-2 col-form-label main2"> 1. Nama Lengkap </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="namalengkap" class="form-control <?php echo($error_namalengkap !="" ? "is-invalid" : "");?> main2" id="namalengkap" placeholder="Nama lengkap" value="<?php echo $namalengkap; ?>">
						<span class="warning"><?php echo $error_namalengkap; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="jeniskelamin" class="col-sm-2 col-form-label main2"> 2. Jenis Kelamin </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="jeniskelamin" class="form-control <?php echo($error_jeniskelamin !="" ? "is-invalid" : "");?> main2" id="jeniskelamin" placeholder="Laki-laki / Perempuan" value="<?php echo $jeniskelamin; ?>">
						<span class="warning"><?php echo $error_jeniskelamin; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nisn" class="col-sm-2 col-form-label main2"> 3. NISN </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?> main2" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>">
						<span class="warning"><?php echo $error_nisn; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nik" class="col-sm-2 col-form-label main2"> 4. NIK </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?> main2" id="nik" placeholder="NIK" value="<?php echo $nik; ?>">
						<span class="warning"><?php echo $error_nik; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="tempatlahir" class="col-sm-2 col-form-label main2"> 5. Tempat Lahir </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="tempatlahir" class="form-control <?php echo($error_tempatlahir !="" ? "is-invalid" : "");?> main2" id="tempatlahir" placeholder="Tempat lahir" value="<?php echo $tempatlahir; ?>">
						<span class="warning"><?php echo $error_tempatlahir; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="tanggallahir" class="col-sm-2 col-form-label main2"> 6. Tanggal Lahir </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="tanggallahir" class="form-control <?php echo($error_tanggallahir !="" ? "is-invalid" : "");?> main2" id="tanggallahir" placeholder="Tanggal lahir" value="<?php echo $tanggallahir; ?>">
						<span class="warning"><?php echo $error_tanggallahir; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="akta" class="col-sm-2 col-form-label main2"> 7. No.Registrasi Akta Lahir </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="akta" class="form-control <?php echo($error_akta !="" ? "is-invalid" : "");?> main2" id="akta" placeholder="No akta lahir" value="<?php echo $akta; ?>">
						<span class="warning"><?php echo $error_akta; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="agama" class="col-sm-2 col-form-label main2"> 8. Agama & Kepercayaan </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="agama" class="form-control <?php echo($error_agama !="" ? "is-invalid" : "");?> main2" id="agama" placeholder="Islam / Kristen / Katolik / Hindu / Budha / Konghucu" value="<?php echo $agama; ?>">
						<span class="warning"><?php echo $error_agama; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kewarganegaraan" class="col-sm-2 col-form-label main2"> 9. Kewarganegaraan </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="kewarganegaraan" class="form-control <?php echo($error_kewarganegaraan !="" ? "is-invalid" : "");?> main2" id="kewarganegaraan" placeholder="WNI / WNA" value="<?php echo $kewarganegaraan; ?>">
						<span class="warning"><?php echo $error_kewarganegaraan; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="berkebutuhankhusus" class="col-sm-2 col-form-label main2"> 10. Berkebutuhan Khusus </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="berkebutuhankhusus" class="form-control <?php echo($error_berkebutuhankhusus !="" ? "is-invalid" : "");?> main2" id="berkebutuhankhusus" placeholder="Kebutuhan khusus" value="<?php echo $berkebutuhankhusus; ?>">
						<span class="warning"><?php echo $error_berkebutuhankhusus; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="alamat" class="col-sm-2 col-form-label main2"> 11. Alamat Jalan </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="alamat" class="form-control <?php echo($error_alamat !="" ? "is-invalid" : "");?> main2" id="alamat" placeholder="Alamat tempat tinggal saat ini" value="<?php echo $alamat; ?>">
						<span class="warning"><?php echo $error_alamat; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="rt" class="col-sm-2 col-form-label main2"> 12. RT </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="rt" class="form-control <?php echo($error_rt !="" ? "is-invalid" : "");?> main2" id="rt" placeholder="RT" value="<?php echo $rt; ?>">
						<span class="warning"><?php echo $error_rt; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="rw" class="col-sm-2 col-form-label main2"> 13. RW </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="rw" class="form-control <?php echo($error_rw !="" ? "is-invalid" : "");?> main2" id="rw" placeholder="RW" value="<?php echo $rw; ?>">
						<span class="warning"><?php echo $error_rw; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="dusun" class="col-sm-2 col-form-label main2"> 14. Nama Dusun </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="dusun" class="form-control <?php echo($error_dusun !="" ? "is-invalid" : "");?> main2" id="rw" placeholder="Dusun" value="<?php echo $dusun; ?>">
						<span class="warning"><?php echo $error_dusun; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kelurahan" class="col-sm-2 col-form-label main2"> 15. Nama Kelurahan/Desa </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="kelurahan" class="form-control <?php echo($error_kelurahan !="" ? "is-invalid" : "");?> main2" id="kelurahan" placeholder="Kelurahan" value="<?php echo $kelurahan; ?>">
						<span class="warning"><?php echo $error_kelurahan; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kecamatan" class="col-sm-2 col-form-label main2"> 16. Kecamatan </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan !="" ? "is-invalid" : "");?> main2" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>">
						<span class="warning"><?php echo $error_kecamatan; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kodepos" class="col-sm-2 col-form-label main2"> 17. Kode Pos </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="kodepos" class="form-control <?php echo($error_kodepos !="" ? "is-invalid" : "");?> main2" id="kodepos" placeholder="Kode Pos" value="<?php echo $kodepos; ?>">
						<span class="warning"><?php echo $error_kodepos; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="lintang" class="col-sm-2 col-form-label main2"> 18. Lintang </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="lintang" class="form-control <?php echo($error_lintang !="" ? "is-invalid" : "");?> main2" id="lintang" placeholder="Lintang" value="<?php echo $lintang; ?>">
						<span class="warning"><?php echo $error_lintang; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="bujur" class="col-sm-2 col-form-label main2"> 19. Bujur </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="bujur" class="form-control <?php echo($error_bujur !="" ? "is-invalid" : "");?> main2" id="bujur" placeholder="Bujur" value="<?php echo $bujur; ?>">
						<span class="warning"><?php echo $error_bujur; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="tempattinggal" class="col-sm-2 col-form-label main2"> 20. Tempat tinggal </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="tempattinggal" class="form-control <?php echo($error_tempattinggal !="" ? "is-invalid" : "");?> main2" id="tempattinggal" placeholder="Tinggal dengan Orang Tua atau Wali" value="<?php echo $tempattinggal; ?>">
						<span class="warning"><?php echo $error_tempattinggal; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="transportasi" class="col-sm-2 col-form-label main2"> 21. Moda Transportasi </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="transportasi" class="form-control <?php echo($error_transportasi !="" ? "is-invalid" : "");?> main2" id="rw" placeholder="Transportasi" value="<?php echo $transportasi; ?>">
						<span class="warning"><?php echo $error_transportasi; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nokks" class="col-sm-2 col-form-label main2"> 22. Nomor KKS <br> (Kartu Keluarga Sejahtera) </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="nokks" class="form-control <?php echo($error_nokks !="" ? "is-invalid" : "");?> main2" id="nokks" placeholder="No KKS" value="<?php echo $nokks; ?>">
						<span class="warning"><?php echo $error_nokks; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="anak" class="col-sm-2 col-form-label main2"> 23. Anak ke berapa <br> (Berdasarkan KK) </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="anak" class="form-control <?php echo($error_anak !="" ? "is-invalid" : "");?> main2" id="anak" placeholder="Anak ke ..." value="<?php echo $anak; ?>">
						<span class="warning"><?php echo $error_anak; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="penerima" class="col-sm-2 col-form-label main2"> 24. Penerima KPS/PKH </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="penerima" class="form-control <?php echo($error_penerima !="" ? "is-invalid" : "");?> main2" id="penerima" placeholder="Ya / Tidak" value="<?php echo $penerima; ?>">
						<span class="warning"><?php echo $error_penerima; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nokps" class="col-sm-2 col-form-label main2"> 25. No. KPS/KPH <br> (apabila menerima) </label>
					<label> : </label>
					<div class="col-sm-5">
						<input type="text" name="nokps" class="form-control <?php echo($error_nokps !="" ? "is-invalid" : "");?> main2" id="nokps" placeholder="No KPS/KPH" value="<?php echo $nokps; ?>">
						<span class="warning"><?php echo $error_nokps; ?></span>
					</div>
				</div>

				<div class="form-group row" align="right">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary"> Kirim </button>
					</div>
				</div>
			</form>
		</div>
		</div>
	</div>
</div>
<?php
echo "<form class=body>";

include "proses.php";

echo "<h2> Output Data Pendaftaran Peserta Didik Baru : </h2>";
echo "<br>";
echo "<tr> Tanggal = </tr>".$tanggal;
echo "<br><br>";
echo "1. Nama Lengkap =  ". $namalengkap;
echo "<br>";
echo "2. Jenis Kelamin = ".$jeniskelamin;
echo "<br>";
echo "3. NISN = ".$nisn;
echo "<br>";
echo "4. NIK / No. KITAS = ".$nik;
echo "<br>";
echo "5. Tempat Lahir = ".$tempatlahir;
echo "<br>";
echo "6. Tanggal Lahir = ".$tanggallahir;
echo "<br>";
echo "7. No. Registrasi Akta Lahir = ".$akta;
echo "<br>";
echo "8. Agama & Kepercayaan = ".$agama;
echo "<br>";
echo "9. Kewarganegaraan = ".$kewarganegaraan;
echo "<br>";
echo "10. Berkebutuhan Khusus = ".$berkebutuhankhusus;
echo "<br>";
echo "11. Alamat Jalan = ".$alamat;
echo "<br>";
echo "12. RT = ".$rt;
echo "<br>";
echo "13. RW = ".$rw;
echo "<br>";
echo "14. Nama Dusun = ".$dusun;
echo "<br>";
echo "15. Nama Kelurahan / Desa = ".$kelurahan;
echo "<br>";
echo "16. Kecamatan = ".$kecamatan;
echo "<br>";
echo "17. Kode Pos = ".$kodepos;
echo "<br>";
echo "18. Lintang = ".$lintang;
echo "<br>";
echo "19. Bujur = ".$bujur;
echo "<br>";
echo "20. Tempat Tinggal = ".$tempattinggal;
echo "<br>";
echo "21. Transportasi = ".$transportasi;
echo "<br>";
echo "22. Nomor KKS = ".$nokks;
echo "<br>";
echo "23. Anak ke berapa = ".$anak;
echo "<br>";
echo "24. Penerima KPS/PKH = ".$penerima;
echo "<br>";
echo "25. No. KPS/PKH= ".$nokps;
echo "</form>";
?>
</body>
</html>