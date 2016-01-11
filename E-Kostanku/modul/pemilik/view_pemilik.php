<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="9">&nbsp;</td>
  </tr>
  <tr>
    <td width="5%" bgcolor="#FF6600" align="center">No</td>
    <td width="13%" bgcolor="#FF6600" align="center">Nama</td>
    <td width="13%" bgcolor="#FF6600" align="center">KTP</td>
    <td width="10%" bgcolor="#FF6600" align="center">Jenis Kelamin</td>
    <td width="15%" bgcolor="#FF6600" align="center">Alamat</td>
    <td width="11%" bgcolor="#FF6600" align="center">Telp</td>
    <td width="12%" bgcolor="#FF6600" align="center">Username</td>
    <td width="12%" bgcolor="#FF6600" align="center">Status</td>
    <td width="9%" bgcolor="#FF6600" align="center">Aksi</td>
  </tr>
  <tr>
    <td style="border-bottom:medium; border-bottom-color:#666666; border-bottom-width:2px;" colspan="9">
    <?php
	
	$no=1;
	    include"../config/koneksi.php";
		     $sql=mysql_query("select * from pemilik");
			     while(@$bc=mysql_fetch_array($sql)){
			       	 if($bc['jk']==1){
						    $jk="Laki-laki";
					}elseif($bc['jk']==2){
						$jk="Perempuan";
					}
		echo"<tr>
    <td width=5% align=center>$no</td>
    <td width=13% align=center>$bc[nm_pemilik]</td>
    <td width=13% align=center>$bc[no_ktp]</td>
    <td width=10% align=center>$jk</td>
    <td width=15% align=center>$bc[alamat]</td>
    <td width=11% align=center>$bc[telp]</td>
    <td width=12% align=center>$bc[usr_nm]</td>
    <td width=12% align=center>$bc[stts]</td>
    <td width=9% align=center><a href='?menu=edt_pem&id=$bc[id_pemilik]'><img src=../images/gambar/edit.png></a>|<a href='?menu=del_pem&id=$bc[id_pemilik]'><img src=../images/gambar/gambar/22x22/actions/edit-delete.png></a></td>
  </tr>";
         $no++;
  }
	?>
    
    </td>
  </tr>
</table>

</body>
</html>
