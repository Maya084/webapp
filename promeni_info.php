<html>

<head>

    <meta charset="utf-8">
</head>

</html>

<?php
session_start();

include("includes/connection.php");


if(isset($_POST["info"]))  
{
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $tel = $_POST["phone"];
    $opis = $_POST["opis"];
    $user = $_SESSION["user"];
    $sql = "UPDATE user set ime='$ime', prezime='$prezime', telbr='$tel', opis='$opis' where username = '$user'";
    if(!mysqli_query($conn,$sql))
    {
 echo"<script charset=\"utf-8\"> alert('Неуспешна промена на информации.\n Ве молиме обидете се повторно.'); history.back();</script>";
                   
                    }
                    else
                    {
                        
                        echo"<script charset=\"utf-8\"> alert('Успешна промена на информации!'); history.back();</script>";
}
}
?>