 <?php include '../islem.php'; 

if(!$_SESSION['kullaniciAdi']){

header("location:/web/Admin/login.php?durum=izinsizgiris");
}
else {
  ?>
  <?php

 $siteSor=$db->prepare("SELECT * FROM siteAyarlari");
$siteSor->execute();
$siteCek=$siteSor->fetch(PDO::FETCH_ASSOC);

?>

        <div id="page-wrapper">

<div>
	<center><h1>Site Ayar Paneli</h1></center>
	<hr>

</div>
<form action="../islem.php" method="post"  >        	
<table class="table" col-md-6>
  <thead>
    <tr>
      <th scope="col">Site Tittle</th>
      <th scope="col">Site Desc</th>
      <th scope="col">Site Footer Telif Hakkı</th>
      <th scope="col">Site Footer By Design</th>
       <th scope="col">Site Footer Tasarımcı link</th>
       <th scope="col">Site Footer Tasarımcı URL</th>
	<th scope="col">İşlem</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    		  <td>
        		<input type="text" name="siteBaslik" value="<?php echo $siteCek['Site_baslik'];  ?>"> </br>
        	</td>
      		<td> 
        		<input type="text" name="siteDesc" value="<?php echo $siteCek['Site_desc'];  ?>"></br>
      		</td>
     		 <td>
        		<input type="text" name="siteFooter" value="<?php echo $siteCek['Site_footer'];  ?>"> </br>
      		</td>
        	<td>
        		<input type="text" name="siteFooterYazi1" value="<?php echo $siteCek['Site_footer_tasarimYazi1'];  ?>"></br>
      		</td>
        	<td>
        		<input type="text" name="siteFooterYazi2"  value="<?php echo $siteCek['Site_footer_tasarimYazi2'];  ?>"> </br>
        	</td>
      		<td>
        		<input type="text" name="siteFooterURL" value="<?php echo $siteCek['Site_footer_URL'];  ?>"> </br>
		</td>
        	<td>
			<button type="submit" class="btn btn-primary" name="siteGuncelle">Güncelle</button>
		</td>
    </tr>

  </tbody>
</table>
        </form>





      
	      <!-- map -->
<link href="css/jqvmap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.vmap.js"></script>
<script src="js/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="js/jquery.vmap.world.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#vmap').vectorMap({
		    map: 'world_en',
		    backgroundColor: '#333333',
		    color: '#ffffff',
		    hoverOpacity: 0.7,
		    selectedColor: '#666666',
		    enableZoom: true,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ['#C8EEFF', '#006491'],
		    normalizeFunction: 'polynomial'
		});
	});
</script>
<!-- //map -->
       </div>
       <?php } ?>