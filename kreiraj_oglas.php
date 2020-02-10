<html>

<head>

    <meta charset="utf-8">
</head>

</html>
<?php
include("includes/connection.php");
session_start();
 if(!isset($_SESSION['user']) || empty($_SESSION['user']))
    {
		 header("Location:main.php");
	}
	else
	{
          
  	if (isset($_POST["oglas"])) {
	  $zivotno = $_POST["zivotno"];

	  $pol = $_POST["pol"];
	  $vozrast = $_POST["vozrast"];

	  if (isset($_POST["vakcinirano"]))
	  $vakcinirano="da";
	  else
	  $vakcinirano="ne";

	  if (isset($_POST["chipirano"]))
	  $chipirano="da";
	  else
	  $chipirano="ne";

	  $opis = $_POST["opis"];
	  $drzava = $_POST["country"];
	  $opstina = $_POST["state"];
	  $user = $_SESSION["user"];
	  
	$target_dir = "images/zivotni/";
	$pomosno_ime = "";
	for($i = 0; $i<9; $i++)
	{
		$pom_br = rand(0,9);
		$pomosno_ime = $pomosno_ime . $pom_br;
	}
	$target_file = $target_dir . $pomosno_ime . basename($_FILES["image"]["name"]) ;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check == false) {
		?>
<script charset="utf-8">
alert('Датотеката која ја прикачивте не е слика. \nВе молиме прикачете слика.');
history.back();
</script>
<?php
	}
	move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
	
	if($zivotno=="mace")
	{
		$sql = "INSERT INTO mace(data_oglas, pol, opstina, drzava, vakcinirano, chipirano, vozrast, user_username, slika, opis) VALUES(CURDATE(), '$pol', '$opstina', '$drzava', '$vakcinirano', '$chipirano', '$vozrast', '$user', '$target_file', '$opis') ";
	}
	else
	{
		$rast = $_POST["rast"];
		$sql = "INSERT INTO kuce(rast, data_oglas, pol, opstina, drzava, vakcinirano, chipirano, vozrast, user_username, slika, opis) VALUES('$rast',CURDATE(), '$pol', '$opstina', '$drzava', '$vakcinirano', '$chipirano', '$vozrast', '$user', '$target_file', '$opis')";

	}
	  if (!mysqli_query($conn, $sql)) 
    {
		
	?>
<script charset="utf-8">
alert('Настана грешка при креирањето на оглас. \nВе молиме обидете се повторно. ');
</script>
<?php

}


else
{
	?>
<script charset="utf-8">
alert('Успешно креирање на оглас ');
</script>
<?php
	
header("Location:main.php");
       
    }
	  
	  

  }
}
	
  


?>