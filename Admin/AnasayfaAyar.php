 <?php include '../islem.php';  ?>
  <?php

 $anasayfaSor=$db->prepare("SELECT * FROM anasayfa");
$anasayfaSor->execute();
$anasafyaCek=$anasayfaSor->fetch(PDO::FETCH_ASSOC);

?>

        <div id="page-wrapper">

<div>
  <center><h1>Anasayfa Ayar Paneli</h1></center>
  <hr>

</div>
<form action="../islem.php" method="post"  >        	
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sayfa Başlık</th>
      <th scope="col">Sayfa Yazı 1</th>
      <th scope="col">Sayfa Yazı 2</th>
      <th scope="col">Anasayfa Resim</th>
      <th scope="col">Anasayfa Buton Yazı</th>
       <th scope="col">İslem</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        		<input type="text" name="anasayfaBaslik" value="<?php echo $anasafyaCek['Anasayfa_baslik'];  ?>" > </br>
        		</td>
      <td>
        		<input type="text" name="anasayfaYazi1" value="<?php echo $anasafyaCek['Anasayfa_yazi1'];  ?>"> </br>
        		</td>
      <td> 
        		<input type="text" name="anasayfaYazi2" value="<?php echo $anasafyaCek['Anasayfa_yazi2'];  ?>"></br>
        		</td>
      <td>
        		<input type="text" name="anasayfaResim" value="<?php echo $anasafyaCek['Anasayfa_resim'];  ?>"> </br>
        		</td>
        		<td>
        		<input type="text" name="anasayfaBtnYazi" value="<?php echo $anasafyaCek['Anasayfa_cv'];?>"></br>
        		</td>
        		<td><button type="submit" class="btn btn-primary" name="AnasayfaGuncelle">Güncelle</button>
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