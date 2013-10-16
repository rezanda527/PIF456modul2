<!DOCTYPE html      PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
<head>   <title>Data Checkbox dengan Preselected</title> </head> 
<body>  
<div style="width:550px; margin:0px auto 0px; background-color:#ff8400; border:5px solid #cd6a00">
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">     Jenis Kendaraan yang anda miliki :
<input type="checkbox" name=kendaraan1 value="Sedan" checked>Sedan
<input type="checkbox" name=kendaraan2 value="Bus" >Bus
<input type="checkbox" name=kendaraan3 value="Truck" checked>Truck
<input type="checkbox" name=kendaraan4 value="Motor" checked>Motor
<input type="submit" value="Simpan"/>   </form> 
<?php
if (isset($_POST['kendaraan1'])) echo $_POST['kendaraan1']."<br />";
if (isset($_POST['kendaraan2'])) echo $_POST['kendaraan2']."<br />";
if (isset($_POST['kendaraan3'])) echo $_POST['kendaraan3']."<br />";
if (isset($_POST['kendaraan4'])) echo $_POST['kendaraan4']."<br />";
?>
</body>  
</form>