<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
   include"../config/koneksi.php";
   $sql1=mysql_query("select * from pemilik where id_pemilik='$_GET[id]'");
   $edt=mysql_fetch_array($sql1);
?>
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
     <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td colspan="3" align="left" valign="top"><div>&nbsp;</div></td>
    </tr>
  <tr>
    <td width="10%" align="left" valign="top">Nama</td>
    <td width="1%" align="left" valign="top">:</td>
    <td width="89%" align="left" valign="top"><input type="text" name="nama" value="<?php echo"$edt[nm_pemilik]"; ?>" size="40" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">No.KTP</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input type="text" value="<?php echo"$edt[no_ktp]"; ?>" name="ktp" size="35" /></td>
  </tr>
  <tr>
    <td height="20" align="left" valign="top">Jenis Kelamin </td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?php 
					if($edt['jk']==1){
						echo"(Laki-laki)";
					}elseif($edt['jk']==2){
						echo"(Perempuan)";
					} ?> <input type="radio" name="jk" value="1" />Laki-laki <input type="radio" name="jk" border="2" />Perempuan</td>
  </tr>
  <tr>
    <td align="left" valign="top">Alamat Pemilik </td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><textarea name="alamat_pemilik" cols="45" rows="7"><?php echo"$edt[alamat]"; ?></textarea></td>
  </tr>
  <tr>
    <td align="left" valign="top">Nomer Telp/Hp </td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input type="text" value="<?php echo"$edt[telp]"; ?>" name="telp" size="30" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">Username</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input type="text" value="<?php echo"$edt[usr_nm]"; ?>" name="namauser" size="30" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">Password</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input type="text" value="<?php echo"$edt[pwd]"; ?>" name="sandi" size="30" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">Status</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><select name="stts">
             <option value="1">Aktif</option>
             <option value="0">Nonaktif</option>
    </select> <?php if($edt['stts']==1){
					echo"Aktif";
					}elseif($edt['stts']==0){
					echo"Nonaktif";
					}
	 ?></td>
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
		  @$jk=$_POST['jk'];
		  $alamat=$_POST['alamat_pemilik'];
		  $telp=$_POST['telp'];
		  $usr=$_POST['namauser'];
		  $sandi=$_POST['sandi'];
		  $stts=$_POST['stts'];
			 
			      mysql_query("update pemilik set nm_pemilik='$nama',no_ktp='$ktp',jk='$jk',alamat='$alamat',telp='$telp',usr_nm='$usr',pwd='$sandi',stts='$stts' where id_pemilik='$_GET[id]'");
				   $pwd=md5($sandi);
				  mysql_query("update masuk pengguna='$nama',sandi='$pwd' where id_pengguna='$_GET[id]'");
	 }
	 include"view_pemilik.php";
?>
</body>
</html>