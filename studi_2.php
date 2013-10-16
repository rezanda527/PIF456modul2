<!DOCTYPE html      PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
<head>   
<title>Data Select Box dengan Preselected</title> </head> 
<body>  
<div style="width:550px; margin:0px auto 0px; background-color:#ff8400; border:5px solid #cd6a00">
<h2>Select BOX</h2>
<form action="list.php" method="post">
    Kota :<br/>
    <select name="kota" size="1">
		<option value selected="Silahkan Pilih Kotamu">~PILIH KOTA~</option>
        <option value="Malang">Malang</option>
        <option value="Bojonegoro">Bojonegoro</option>
        <option value="Kediri">Kediri</option>
        <option value="Tulungagung">Tulungagung</option>
        <option value="Blitar">Blitar</option>
        <option value="Banyuwangi">Banyuwangi</option>
        <option value="Pasuruan">Pasuruan</option>
    </select>
    <p><input type="submit" value="Kirim" /></p>
</form>
</body> 
</form>