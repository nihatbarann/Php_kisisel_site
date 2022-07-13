 <?php include '../islem.php';  ?>
  <?php

 $kullaniciSor=$db->prepare("SELECT * FROM kullanici");
$kullaniciSor->execute();
$kullaniciCek=$kullaniciSor->fetch(PDO::FETCH_ASSOC);

?>

        <div id="page-wrapper">

<div>
	<center><h1>Admin Kontrol Paneli</h1></center>
	<hr>

</div>
<form action="../islem.php" method="post"  >        	
<table class="table">
  <thead>
    <tr>
      <th scope="col">Kullanıcı Adı</th>
      <th scope="col">Şifre</th>
      <th scope="col">İşlem</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        		<input type="text" name="kullaniciAd" value="<?php echo $kullaniciCek['kadi']; ?>"> </br>
        		</td>
      <td>
        		<input type="text" name="parola" value="<?php echo $kullaniciCek['psswd'];  ?>"> </br>
        		</td>
        		<td>
			<button type="submit" class="btn btn-primary" name="adminGuncelle">Güncelle</button>
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