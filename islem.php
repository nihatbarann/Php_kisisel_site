<?php include 'baglan.php'?>

<?php
$site=$db->prepare("SELECT * FROM  	siteayarlari");
$site->execute();
$siteCek=$site->fetch(PDO::FETCH_ASSOC);

$anasayfa=$db->prepare("SELECT * FROM anasayfa");
$anasayfa->execute();
$anasafyaCek=$anasayfa->fetch(PDO::FETCH_ASSOC);

$menu=$db->prepare("SELECT * FROM menuler");
$menu->execute();
$menuCek=$menu->fetchAll(PDO::FETCH_ASSOC);


$hakkimda=$db->prepare("SELECT * FROM hakkimda");
$hakkimda->execute();
$hakkimdaCek=$hakkimda->fetchAll(PDO::FETCH_ASSOC);

$hakkimdaAlan=$db->prepare("SELECT * FROM hakkimda_alanlar");
$hakkimdaAlan->execute();
$hakkimdaAlanCek=$hakkimdaAlan->fetchAll(PDO::FETCH_ASSOC);

$yetenek=$db->prepare("SELECT * FROM yetenekler");
$yetenek->execute();
$yetenekCek=$yetenek->fetchAll(PDO::FETCH_ASSOC);

$egitim=$db->prepare("SELECT * FROM egitim");
$egitim->execute();
$egitimCek=$egitim->fetchAll(PDO::FETCH_ASSOC);


if(isset($_POST['AdminGiris'])){

	$kad=htmlspecialchars($_POST['kadi']);
	$pswd=$_POST['psswd'];
	ob_start();
	session_start();
	$adminSorgu=$db->prepare("SELECT * FROM kullanici WHERE kadi=? and psswd=?");
	$adminSorgu->execute([$kad,$pswd]);

	if($adminSorgu->rowCount()){



        $_SESSION['kullaniciAdi']=$kad;
		header("location:../web/Admin/index.php");
		exit();
	}
	else{

		header("location:../web/Admin/logout.php");
		exit();
	
	}
}

if(isset($_POST['siteGuncelle'])){

	$siteBaslik=$_POST['siteBaslik'];
	$siteDesc=$_POST['siteDesc'];
	$siteFooter=$_POST['siteFooter'];
	$siteFooterYazi1=$_POST['siteFooterYazi1'];
	$siteFooterYazi2=$_POST['siteFooterYazi2'];
	$siteFooterURL=$_POST['siteFooterURL'];

	$siteGuncelle=$db->prepare("UPDATE siteayarlari SET Site_baslik=?,Site_desc=?, Site_footer=?, Site_footer_tasarimYazi1=?, Site_footer_tasarimYazi2=?,Site_footer_URL=? WHERE id=1");

	$siteGuncelle->execute([$siteBaslik,$siteDesc,$siteFooter,$siteFooterYazi1,$siteFooterYazi2,$siteFooterURL]);

	if($siteGuncelle){

		header("location:/web/Admin/index.php?durum=başarılı");
	}
}

if(isset($_POST['adminGuncelle'])){

	$kullaniciAd=$_POST['kullaniciAd'];
	$pswd=$_POST['parola'];

	$adminGuncelle=$db->prepare("UPDATE kullanici SET kadi=?, psswd=? WHERE id=1");
	$adminGuncelle->execute([$kullaniciAd, $pswd]);

	if($adminGuncelle){

	header("location:/web/Admin/index.php?durum=başarılı");

	}
}


if(isset($_POST['AnasayfaGuncelle'])){
	$AnasayfaBaslik=$_POST['anasayfaBaslik'];
	$Anasayfayazi1=$_POST['anasayfaYazi1'];
	$Anasayfayazi2=$_POST['anasayfaYazi2'];
	$Anasayfaresim=$_POST['anasayfaResim'];
	$AnasayfaCv=$_POST['anasayfaBtnYazi'];

	$anasayfaGuncelle=$db->prepare("UPDATE anasayfa SET Anasayfa_baslik=?,	Anasayfa_yazi1=?,
											 Anasayfa_yazi2=?, Anasayfa_resim=?, Anasayfa_cv=? WHERE id=1");
	$anasayfaGuncelle->execute([$AnasayfaBaslik, $Anasayfayazi1, $Anasayfayazi2, $Anasayfaresim, $AnasayfaCv]);

	if($anasayfaGuncelle){

	header("location:/web/Admin/index.php?durum=başarılı");

	}
}
?>