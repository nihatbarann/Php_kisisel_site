 <?php include '../islem.php'; 


if(!$_SESSION['kullaniciAdi']){

header("location:/web/Admin/login.php?durum=izinsizgiris");
}
else {

  ?>
  <?php

 $hakkimdaSor=$db->prepare("SELECT * FROM hakkimda");
$hakkimdaSor->execute();
$hakkimdaCek=$hakkimdaSor->fetchAll(PDO::FETCH_ASSOC);

?>

        <div id="page-wrapper">

<div>
  <center><h1>Hakkımda Ayar Paneli</h1></center>
  <hr>

</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Hakkımda Alanlar</th>
      <th scope="col">Hakkımda Değer</th>
      <th scope="col"></th>
      <th scope="col">İslem</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($hakkimdaCek as $hakkimdaRow) { ?>
    <tr>
      <td> <?php echo $hakkimdaRow['id']; ?></td>
      <td><?php echo $hakkimdaRow['hakkimda_alan']; ?></td>
      <td> <?php echo $hakkimdaRow['hakkimda_deger']; ?></td>
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