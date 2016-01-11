<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
   <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="5" align="center">&nbsp;</td>
    </tr>
  <tr>
    <td width="6%" align="center" bgcolor="#FF6600">No</td>
    <td width="23%" align="center" bgcolor="#FF6600">Kode Wilayah</td>
    <td width="29%" align="center" bgcolor="#FF6600">Jenis Wilayah</td>
    <td width="30%" align="center" bgcolor="#FF6600">Nama Wilayah</td>
    <td width="12%" align="center" bgcolor="#FF6600">Aksi</td>
  </tr>
  <tr>
    <td style="border-bottom:medium; border-bottom-color:#666666; border-bottom-width:2px;" colspan="5" align="center">
         <?php
		 $no=1;
		     include"../config/koneksi.php";
			 $sql=mysql_query("select * from wilayah");
			      while($bc=mysql_fetch_row($sql))
				  {
				  
				  if($bc[1]==1)
				{
				   $tmpl="Kampus";
				}elseif($bc[1]==2)
				{
				   $tmpl="Kawasan Industri";
				}elseif($bc[1]==3)
				{
				   $tmpl="Perkantoran";
				}
				       echo"<tr>
    <td width=6% align=center>$no</td>
    <td width=23% align=center>$bc[0]</td>
    <td width=29% align=center>$tmpl</td>
    <td width=30% align=center>$bc[2]</td>
    <td width=12% align=center><a href='?menu=edt_wil&id=$bc[0]'><img src=../images/gambar/edit.png></a>|<a href='?menu=del_wil&id=$bc[0]'><img src=../images/gambar/gambar/22x22/actions/edit-delete.png></a></td>
  </tr>
  <tr>";
  
  $no++;
				  }
		 ?>
    
    </td>
    </tr>
</table>

</body>
</html>