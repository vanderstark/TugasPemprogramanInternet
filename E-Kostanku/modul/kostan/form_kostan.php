<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <table width="100%" border="0">
  <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td width="11%">Id - Pemilik </td>
    <td width="1%">:</td>
    <td width="88%"><input type="text" name="pemilik" value="USR-001" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>Nama kostan </td>
    <td>:</td>
    <td><input type="text" name="nama_kostan" size="35" /></td>
  </tr>
  <tr>
    <td>Wilayah Kostan </td>
    <td>:</td>
    <td><select name="wilayah">
           <?php
		         include"../config/koneksi.php";
				     $sql=mysql_query("select * from wilayah");
			while($bc=mysql_fetch_row($sql))
			{
			if($bc[1]==1)
				{
				   $kaw="Kampus";
				}elseif($bc[1]==2)
				{
				   $kaw="Kawasan Industri";
				}elseif($bc[1]==3)
				{
				   $kaw="Perkantoran";
				}
				
			     echo"<option value='$bc[0]'>$kaw $bc[2]</option>";
			}
		   ?>
    </select></td>
  </tr>
  <tr>
    <td valign="top">Fasilitas</td>
    <td valign="top">:</td>
    <td><textarea name="fasilitas" cols="45" rows="7"></textarea></td>
  </tr>
  <tr>
    <td>Gambar</td>
    <td>:</td>
    <td><input type="file" name="gmbr1" /></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" value="SIMPAN" /></td>
  </tr>
</table>
</form>

<?php
     include"../config/koneksi.php";
	 if(isset($_POST['simpan']))
	 {
	 	$pemilik=$_POST['pemilik'];
		$nm_kost=$_POST['nama_kostan'];
		$wilayah=$_POST['wilayah'];
		$fasilitas=$_POST['fasilitas'];
		
	 @$tipe_file=$_FILES['gmbr1']['type'];
	 @$lokasifile=$_FILES['gmbr1']['tmp_name'];
	 @$namafile=trim($_FILES['gmbr1']['name']);
	 @$ukurangambar=$_FILES['gmbr1']['size'];

	 			$acak=rand(0000,9999);
	 $namaupload=$acak.$namafile;
	 $direktori="gambar/$namaupload";
	 
	     
	 	 @move_uploaded_file($lokasifile,"$direktori");		
		 mysql_query("insert into kosan(kd_kos,nm_kos,pemilik,wilayah,fasilitas,gambar,stts) values ('1','$nm_kost','$pemilik','$wilayah','$fasilitas','$direktori','1')");
	
	 }
	 include"view_kos.php";
?>
</body>
</html>