<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="8">&nbsp;</td>
  </tr>
  <tr>
    <td width="3%" align="center" valign="top" bgcolor="#FF6600">No.</td>
    <td width="16%" align="center" valign="top" bgcolor="#FF6600">Nama Kos</td>
    <td width="19%" align="center" valign="top" bgcolor="#FF6600">Pemilik</td>
    <td width="13%" align="center" valign="top" bgcolor="#FF6600">wilayah</td>
    <td width="19%" align="center" valign="top" bgcolor="#FF6600">fasilitas</td>
    <td width="14%" align="center" valign="top" bgcolor="#FF6600">gambar</td>
    <td width="8%" align="center" valign="top" bgcolor="#FF6600">status</td>
    <td width="8%" align="center" valign="top" bgcolor="#FF6600">Aksi</td>
  </tr>
  <tr>
    <td colspan="8">
    <?php
	$no=1;
	    include"../config/koneksi.php";
		      $sql=mysql_query("select * from kosan");
	while($bc=mysql_fetch_array($sql)){
                      if($bc['stts']==1)
					  {
					       $sts="kosong";
					  }elseif($bc['stts']==2)
					  {
					       $sts="isi";
					  }

		    echo"<tr>
    <td align=center width=3%>$no</td>
    <td align=center width=16%>$bc[nm_kos]</td>
    <td align=center width=19%>$bc[pemilik]</td>
    <td align=center width=13%>$bc[wilayah]</td>
    <td align=center width=19%>$bc[fasilitas]</td>
    <td align=center width=14%><img src='$bc[gambar]' width=150 height=100></td>
    <td align=center width=8%>$sts</td>
    <td align=center width=8%><a href='?menu=edt_kos&id=$bc[kd_kos]'><img src=../images/gambar/edit.png></a>|<a href='?menu=del_kos&id=$bc[kd_kos]'><img src=../images/gambar/gambar/22x22/actions/edit-delete.png></a></td>
  </tr>";
        		$no++;
  }
	?>
    </td>
  </tr>
</table>

</body>
</html>