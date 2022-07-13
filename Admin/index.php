<?php include 'tema/header.php';
@$sayfa=$_GET['sayfa'];

switch ($sayfa) {
	case 'anasayfa':
		include 'anasayfa.php';
		break;
		case 'anasayfaAyar':
		include 'AnasayfaAyar.php';
		break;
		case 'siteayar':
		include 'siteayar.php';
		break;
		case 'yetenekler':
		include 'yetenekler.php';
		break;
		case 'hakkimdaAlanlar':
		include 'hakkimdaAlanlar.php';
		break;
		case 'egitim':
		include 'egitim.php';
		break;
		case 'menu':
		include 'menuler.php';
		break;
		case 'hakkimda':
		include 'hakkimda.php';
		break;
		case 'admin':
		include 'admin.php';
		break;

	
	default:
		include 'anasayfa.php';
		break;
}

	    
include 'tema/footer.php'; ?>