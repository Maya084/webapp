<html>

<head>

    <meta charset="utf-8">
</head>

</html>

<?php
session_start();

include("includes/connection.php");


if(isset($_POST["pass"]))  
{
    
    $password = $_POST["nov"]  ;
    $star = $_POST["segasen"];
    $username = $_SESSION['user'];
   
    

    if(strlen($password) < 8)
    {
        echo"<script charset=\"utf-8\"> alert('Лозинката мора да биде долга најмалку 8 знаци'); history.back();</script>";
        exit();
    }

   

    $salt1 = "ap3gmh*!";
    $salt2 = "o_7p@&";

    $token_star = hash('ripemd128',"$salt1$star$salt2",FALSE);
    $sql_test = "SELECT password from user where username='$username'";
    if($rez = mysqli_query($conn, $sql_test))
    {
        $row = mysqli_fetch_row($rez);
        $pas = $row[0];
        if ($pas == $token_star)
        {
            $token_nov = hash('ripemd128',"$salt1$password$salt2",FALSE);
            $insert = "UPDATE user set password = '$token_nov' where username='$username' ";
            if (!mysqli_query($conn, $insert)) 
                    {
                    
                echo"<script charset=\"utf-8\"> alert('Неуспешна промена на лозинка.\n Ве молиме обидете се повторно.'); history.back();</script>";
                        
                        
                    }
                    else
                    {
                        
                        echo"<script charset=\"utf-8\"> alert('Успешна промена на лозинка!'); history.back();</script>";
                        
                        
                        
                    }
                        }
    }
    


    

}
?>