<!DOCTYPE html>
<html>

<head>
    <title>Поставки</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style/style_header.css" />
    <link rel="stylesheet" type="text/css" href="style/settings_style.css" />
    <link rel="stylesheet" href="style/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <?php
	include("includes/header.php"); 
    include("includes/connection.php");
	
	$username = $_SESSION['user'];
            $sql = "SELECT * from user where username = '$username'";
            if ($result = mysqli_query($conn, $sql)) {
                while ($row = $result -> fetch_row()) {

    $ime = $row[1];
    $prezime= $row[2];
	$broj=$row[6];
    $opstina = $row[7] ;
    $drzava = $row[8] ;
    $opis= $row[10];
    $slika= $row[9];
                }
            }
			?>
    <style>
    h1 {
        font-size: 20px;
        margin-top: 24px;
        margin-bottom: 24px;
    }
    </style>
</head>

<body>
    <?php 
	
	
        if(!isset($_SESSION['user']) ||empty($_SESSION['user']))
        {
header("Location:main.php");
        }
        else{
			
			?>
            


    <div class="container">
        <hr>
        <div class="row">
            <div class="col-8 offset-2">
                <form class="form-horizontal">
                    <div class="panel panel-default">
                        <div class="panel-body text-center">
                            <img src="<?php echo $slika ?>"
                                class="img-circle profile-avatar" alt="User avatar">
                        
						<a href="smenislika.php" <i class="fa fa-edit" aria-hidden="true"></i>Промени</a>
				</div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">User info</h4>
                        </div>
						<div class="form-group">
                                <label class="col-sm-2 control-label"><b> Име и презиме<b></label>
								<h1> <?php echo $ime . " " . $prezime ?> 
									
							<a href="smeniime.php" <i class="fa fa-edit" aria-hidden="true"></i>Промени</a>
						</h1>
						<?php echo "@" . $username ?> 
						<i class="fa fa-map-marker" aria-hidden="true"></i>
                    <?php echo  $opstina . ", " . $drzava ?>
						</div>
						<div class="form-group">
                                <label class="col-sm-2 control-label"><b> Телефонски број<b></label>
								<h1> <?php echo $broj?>  
									
							<a href="smenibroj.php" <i class="fa fa-edit" aria-hidden="true"></i>Промени</a>
						</h1>
								</div>
						<div class="form-group">
                                <label class="col-sm-2 control-label"><b> Опис<b></label>
								<h1> <?php echo $opis?>  
									
							<a href="smeniopis.php" <i class="fa fa-edit" aria-hidden="true"></i>Промени</a>
						</h1>
								</div>
						
					
                        
                               <?php
        }
        ?>


</body>

</html>
