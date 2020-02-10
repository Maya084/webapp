<html>

<head>

    <meta charset="utf-8">
</head>

</html>

<?php
session_start();

include("includes/connection.php");


if(isset($_POST["slika"]) && isset($_FILES['image']))  
{
    $user = $_SESSION["user"];
	$target_dir = "images/korisnici/";
	$pomosno_ime = "";
	for($i = 0; $i<9; $i++)
	{
		$pom_br = rand(0,9);
		$pomosno_ime = $pomosno_ime . $pom_br;
	}
	$target_file = $target_dir . $pomosno_ime . basename($_FILES['image']['name']) ;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file))
    {
    $sql = "UPDATE user set profile_pic='$target_file' where username = '$user'";
    if(mysqli_query($conn, $sql))
    {
?>
<script charset="utf-8">
alert('Успешна промена на профилна слика. ');
history.back();
</script>
<?php
    }
    else
    {
?>
<script charset="utf-8">
alert('Неуспешна промена на профилна слика.  \nВе молиме обидете се повторно.');
history.back();
</script>
<?php
    }}
    else
    {
?>
<script charset="utf-8">
alert('Неуспешна промена на профилна слика.  \nВе молиме обидете се повторно.');
history.back();
</script>
<?php
    }

	
}
else
{
    ?>
<script charset="utf-8">
alert('Неуспешна промена на профилна слика.  \nВе молиме обидете се повторно.');
history.back();
</script>
<?php
}
?>