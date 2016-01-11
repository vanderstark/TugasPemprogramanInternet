<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" align="left" valign="top">&nbsp;</td>
    </tr>
  <tr>
    <td width="10%" align="left" valign="top">Jenis Wilayah </td>
    <td width="1%" align="left" valign="top">:</td>
    <td width="89%" align="left" valign="top">
			<select name="j_wilayah">
			      <option value="1">Kampus</option>
				  <option value="2">Kawasan Industri</option>
				  <option value="3">Perkantoran</option>
			</select>
	</td>
  </tr>
  <tr>
    <td align="left" valign="top">Wilayah</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input type="text" size="35" name="wilayah" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top"><input type="submit" name="simpan" value="SIMPAN" /></td>
  </tr>
</table>
</form>

<?php
     if(isset($_POST['simpan']))
	 {
	    include"../config/koneksi.php";
		$jns=$_POST['j_wilayah'];
		$nama=$_POST['wilayah'];
		    $acak=rand(000,999);
			$wil="wil";
			$kd=$wil.$acak;
		
		   mysql_query("INSERT INTO wilayah(kd_wil, j_wil, nm_wil) VALUES ('$kd', '$jns', '$nama')");
	 }
	 include"view_wilayah.php";
?>
</body>
</html>