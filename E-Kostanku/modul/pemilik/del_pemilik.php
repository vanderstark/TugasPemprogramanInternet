<?php
     include"../config/koneksi.php";
	      mysql_query("DELETE FROM `kosan`.`pemilik` WHERE `pemilik`.`id_pemilik` = '$_GET[id]'");
		  header('location:index.php?menu=pemilik');
?>