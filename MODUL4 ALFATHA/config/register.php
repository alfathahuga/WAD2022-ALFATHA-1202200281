<?php
$database = mysqli_connect("localhost", "root", "", "Wad_modul4_alfatha", 3306);
function register($data){
    global $database;

	$email = $data["email"];
	$nama = $data["nama"];
	$no_hp =  $data["nomor_handphone"];
	$password = $data["password"];
	$verifikasi = $data["password2"];

	if($password !== $verifikasi){
		echo "
		<script>
			alert('kata sandi berbeda');
		</script>
		";
		header("Location: ../page/register-alfatha.php");
		exit;
	}

	$query="INSERT INTO user_alfatha VALUES('', '$nama', '$email', '$password', '$no_hp')";
  mysqli_query($database, $query);
	return mysqli_affected_rows($database);


}
?>