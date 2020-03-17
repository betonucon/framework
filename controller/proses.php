<?php
require __DIR__.'/../config/koneksi.php';
$username=$_POST['username'];
$password=base64_encode($_POST['password']);
$result=mysqli_query($conn,"SELECT * FROM users WHERE username='".$username."' and password='".md5($password)."'");
$row=mysqli_fetch_array($result);
$cek = mysqli_num_rows($result);
if($cek>0){
	//check password
	if(md5($password)!=$row['password']){
		echo"<script language='JavaScript'>alert('Password Anda Salah, Silahkan Ulang Kembali ".md5($password)."'); document.location='login?page=login'</script>";
	}else{
	//password valid
		session_start();
		$_SESSION['user_forum']=$username;
		$_SESSION['agent_forum']=md5($_SERVER['HTTP_USER_AGENT']);
		$_SESSION['_username']=$row['username'];
		$_SESSION['_full_name']=$row['name'];
		$_SESSION['_akses']=$row['akses'];
		
		header("location: index?page=home");
		
	}
}else{
	echo"<script language='JavaScript'>alert('Maaf Username Atau Password Anda Ada Yang Salah ".$_POST['username']."'); document.location='login?page=login'</script>";
	// include "index.php";
}
?>