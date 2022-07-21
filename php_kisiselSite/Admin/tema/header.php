 <?php 

ob_start();
session_start();

if(!$_SESSION['kullaniciAdi']){

header("location:/web/Admin/login.php?durum=izinsizgiris");
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Modern</a>
            </div>
            <!-- /.navbar-header -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      
                       
                        <li>
                            <a href="?sayfa=anasayfaAyar"><i class="fa fa-envelope nav_icon"></i>Anasayfa Ayar</a>
                          
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="?sayfa=siteayar"><i class="fa fa-indent nav_icon"></i>Site Ayarları</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="?sayfa=admin"><i class="fa fa-table nav_icon"></i>Admin</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="?sayfa=menu"><i class="fa fa-flask nav_icon"></i>Menüler</a>
                        </li>
                        <li>
                            <a href="?sayfa=yetenekler"><i class="fa fa-flask nav_icon"></i>Yetenekler</a>
                        </li>
                         <li>
                            <a href="?sayfa=egitim"><i class="fa fa-flask nav_icon"></i>Eğitim</a>
                        </li>
                         <li>
                            <a href="?sayfa=hakkimdaAlanlar"><i class="fa fa-flask nav_icon"></i>Hakkım Alanlar</a>
                        </li>
                       
                       
                         <li>
                            <a href="?sayfa=hakkimda"><i class="fa fa-check-square-o nav_icon"></i>Hakkımızda</a>
                          
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="logout.php"><i class="fa fa-sitemap fa-fw nav_icon"></i>Çıkış</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>

            <!-- /.navbar-static-side -->
        </nav>
        </div>