<!DOCTYPE html      PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
<head>   <title>Prefill Data Radio Button</title> </head>  
<body>  
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">     Jenis Kelamin     
  <input type="radio" name="sex" value="pria"/><?php    if ($_POST['sex'] == 'pria') {    echo 'checked="checked"';       }       ?>     
	Pria     
  <input type="radio" name="sex" value="wanita"/>  <?php    if ($_POST['sex'] == 'Wanita') {         echo 'checked="checked"';       }       ?>     
	Wanita <br />  
    <input type="submit" value="ok" />   </form>  
<?php if (isset($_POST['sex'])) {   echo $_POST['sex']; } ?>  
</body>  
</html> 