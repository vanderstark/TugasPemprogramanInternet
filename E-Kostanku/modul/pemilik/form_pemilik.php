<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
     <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td colspan="3" align="left" valign="top"><div>&nbsp;</div></td>
    </tr>
  <tr>
    <td width="10%" align="left" valign="top">Nama</td>
    <td width="1%" align="left" valign="top">:</td>
    <td width="89%" align="left" valign="top"><input type="text" name="nama" size="40" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">No.KTP</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input type="text" name="ktp" size="35" /></td>
  </tr>
  <tr>
    <td height="20" align="left" valign="top">Jenis Kelamin </td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input type="radio" name="jk" value="1" />Laki-laki <input type="radio" name="jk" border="2" />Perempuan</td>
  </tr>
  <tr>
    <td align="left" valign="top">Alamat Pemilik </td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><textarea name="alamat_pemilik" cols="45" rows="7"></textarea></td>
  </tr>
  <tr>
    <td align="left" valign="top">Nomer Telp/Hp </td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input type="text" name="telp" size="30" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">Username</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input type="text" name="namauser" size="30" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">Password</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input type="text" name="sandi" size="30" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top"><input type="submit" name="daftar" value="REGISTER" /></td>
  </tr>
</table>
</form>

<?php
     include"../config/koneksi.php";
	 if(isset($_POST['daftar']))
	 {
	      $nama=$_POST['nama'];
		  $ktp=$_POST['ktp'];
		  $jk=$_POST['jk'];
		  $alamat=$_POST['alamat_pemilik'];
		  $telp=$_POST['telp'];
		  $usr=$_POST['namauser'];
		  $sandi=$_POST['sandi'];
		$kode1="pem";
		$kode2=rand(0000,9999);      
			  $id=$kode1.$kode2;
			 
			      mysql_query("insert into pemilik(id_pemilik,nm_pemilik,no_ktp,jk,alamat,telp,usr_nm,pwd,stts) values ('$id','$nama','$ktp','$jk','$alamat','$telp','$usr','$sandi','1')");
				   $pwd=md5($sandi);
				  mysql_query("insert into masuk(id_pengguna,pengguna,sandi,level) values ('$id','$usr','$pwd','2')");
	 }
	 include"view_pemilik.php";
?>
</body>
</html>