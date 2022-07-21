 <?php include '../islem.php'; 



if(!$_SESSION['kullaniciAdi']){

header("location:/web/Admin/login.php?durum=izinsizgiris");
}
else {
  ?>
  <?php

 $menuSor=$db->prepare("SELECT * FROM menuler");
$menuSor->execute();
$menuCek=$menuSor->fetchAll(PDO::FETCH_ASSOC);

?>

        <div id="page-wrapper">
<center><h1>Menüler Ayar Paneli</h1></center>
  <hr>


<center><form action="/web/islem.php" method="post">
 <input type="text" name="menuAd" placeholder="Yeni Menü Adı giriniz"></br>
 <input type="text" name="menuURL" placeholder="Yeni Menü URL giriniz"></br>
  <button style="margin-top: 10px;"type="submit" class="btn btn-primary" name="menuEkle">Ekle</button>
</form></center>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Menu Ad</th>
      <th scope="col">Menu Link</th>
      <th scope="col">İslem</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($menuCek as $menuRow) { ?>
    <tr>
      <td> <?php echo $menuRow['id']; ?></td>
      <td><?php echo $menuRow['menu']; ?></td>
      <td> <?php echo $menuRow['menu_yonlendirme']; ?></td>
      <td></td>
    </tr>

<?php } ?>
  </tbody>
</table>
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