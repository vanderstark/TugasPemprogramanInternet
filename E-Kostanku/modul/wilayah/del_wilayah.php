<?php
     include"../config/koneksi.php";
	      mysql_query("DELETE FROM `kosan`.`wilayah` WHERE `wilayah`.`kd_wil` = '$_GET[id]'");
		  header('location:index.php?menu=wilayah');
//DELETE FROM `kosan`.`wilayah` WHERE `wilayah`.`kd_wil` = \'wil001\
?>
