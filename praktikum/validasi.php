<?php

$nama = "rezanda";
$sandi = "rohman";
$pengguna = $_POST["pengguna"];
$kunci = $_POST["kunci"];
$polapengguna = "^[A-Za-z]+$";
$polakunci = "^[A-Za-z]+$";
// Fungsi untuk kembali ke form awal //

?><script language="JavaScript">
function awal(){
document.location='index.php';
}
</script><?php
// Login benar //

if(isset($_POST["pengguna"]) && isset($_POST["kunci"]) && ($_POST["pengguna"]=="$nama") && ($_POST['kunci']=="$sandi")){
?><script language="JavaScript">
document.location='masuk.php'</script><?php
}
//Login salah //
else if(empty($_POST['pengguna']) || empty($_POST['kunci'])){
?><script language="JavaScript">alert('Isi pengguna atau kunci');
awal()</script><?php
}
else if((!eregi($polapengguna, $pengguna)) || (!eregi($polakunci, $kunci))){
?><script language="JavaScript">alert('pengguna atau kunci harus berupa huruf');
awal()</script><?php
}else if (("$pengguna" != "$nama") || ("$kunci" != "$sandi")){
?><script language="JavaScript">alert('pengguna atau kunci salah');
awal()</script><?php
}
?>

