<?php
if($_POST['kirim']){
	$admin = 'yansyahandri364@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$name	= ($_POST['name']);
	$email	= ($_POST['email']);
	$pesan	= ($_POST['pesan']);
	
	$pengirim	= 'Dari: '.$name.' <'.$email.'>';
	
	if(mail($admin, $pesan, $pengirim)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.html">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.html">Kembali</a>';
	}
}else{
	header("Location: index.html");
}
?>