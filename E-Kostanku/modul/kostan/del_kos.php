<?php
   include"../config/koneksi.php";
	      mysql_query("DELETE FROM `kosan`.`kosan` WHERE `kosan`.`kd_kos` = '$_GET[id]'");
		  header('location:index.php?menu=kost');
?>