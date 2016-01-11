<title>::login::</title><?php
   if(isset($_POST['log'])){
   include"koneksi.php";
   //mendata variabel
    $jeneng=trim(htmlentities($_POST['user']));
	$sandi=trim(htmlentities($_POST['sandi']));
	
	//membuat variabel sadi dengan md5	
	$md=md5($sandi);
	
	//melihat data dari database dengan sql
	$ic=mysql_query("select * from masuk where pengguna='$jeneng' and sandi='$md'");
	$bc=mysql_fetch_row($ic);
	
	if($bc > 1){
	//nama user di temukan
	session_start();
	session_register("user");
	session_register("sandi");
	$_SESSION['user']==$bc['1'];
	$_SESSION['sandi']==$bc['2'];
	if($bc['3']=='1'){
	header("location:../admin/");
    }elseif($bc['3']=='2'){
	header("location:../pemilik/");
    }else{
	//jika gagal maka akan kembali ke halaman index pailng depan
	header('location:../index.php');
	 }
   }
  }
?>