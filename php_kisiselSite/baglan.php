<?php 

$vt_sunucu="localhost";
$vt_name="blogsitesi";
$vt_kadi="root";
$vt_passw="";


try{

	@$db= new PDO("mysql:host=$vt_sunucu;dbname=$vt_name;charset=utf8",$vt_kadi,$vt_passwd);

}
catch(PDOException $e){

echo $e->getMessage();

}

?>
