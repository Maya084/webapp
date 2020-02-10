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
        include("includes/header.php"); 
        include("includes/connection.php");
        if(!isset($_SESSION['user']) || empty($_SESSION['user']))
        {
header("Location:main.php");
        }
        else
        {
            $username = $_SESSION['user'];
            $sql = "SELECT * from user where username = '$username'";
            if ($result = mysqli_query($conn, $sql)) {
                while ($row = mysqli_fetch_row($result)) {

    $ime = $row[1];
    $prezime= $row[2];
	$broj=$row[6];
    $opstina = $row[7] ;
    $drzava = $row[8] ;
    $opis= $row[10];
    $slika= $row[9];
            ?>


    <div class="container">
        <hr>
        <div class="row">

            <div class="col-2 offset-5">
                <img style="max-width:100%" src="<?php echo $slika ?>">
                <br>
            </div>
            <div class="col-5">
            </div>
        </div>
        <br>
        <div class="row">

            <div class="col-8 offset-2">
                <h5> Информации </h5>
                <br>
            </div>
            <div class="col-2">
            </div>
        </div>
        <form action="promeni_info.php" method="post">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Име и презиме</span>
                        </div>
                        <input name="ime" type="text" value="<?php echo $ime;?>" class="form-control">
                        <input name="prezime" type="text" value="<?php echo $prezime;?>" class="form-control">
                    </div>
                </div>

                <div class="col-2">
                </div>


            </div>


            <br>

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group">

                        <input type="tel" id="phone" class="form-control" name="phone"
                            pattern="(07)\d-[0-9]{3}-[0-9]{3}" required="required" value="<?php echo $broj;?>">
                    </div>
                </div>

                <div class="col-2">
                </div>


            </div>




            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group">
                        <div class="form-group">
                            <label> Опис </label>
                            <textarea name="opis" class="col-12" rows="3" value="<?echo $opis;?>"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-2">
                </div>


            </div>

            <div class="row">
                <div class="col-8 offset-2">
                    <button name="info" class="btn button btn-dark">Промени </button>
                </div>
            </div>

        </form>
        <br>
        <hr>


        <div class="row">

            <div class="col-8 offset-2">
                <h5> Профилна слика </h5>
                <br>
            </div>
            <div class="col-2">
            </div>
        </div>
        <form action="promeni_slika.php" method="post">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group mt-3">
                        <label class="mr-2">Прикачи слика:</label>
                        <input type="file" name="image" required="required" />
                    </div>
                </div>

                <div class="col-2">
                </div>


            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <button name="slika" class="btn button btn-dark">Промени </button>
                </div>
            </div>


        </form>
        <br>

        <hr>

        <form action="promeni_pass.php" method="post">
            <div class="row">

                <div class="col-8 offset-2">
                    <h5> Лозинка </h5>
                    <br>
                </div>
                <div class="col-2">
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group">
                        <label>Сегашна лозинка</label>
                        <input name="segasen" type="password" class="form-control">
                    </div>
                </div>

                <div class="col-2">
                </div>


            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group">
                        <label>Нова лозинка</label>
                        <input name="nov" type="password" class="form-control">
                    </div>
                </div>

                <div class="col-2">
                </div>


            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <button name="pass" class="btn button btn-dark">Промени </button>
                </div>
            </div>

        </form>
        <br>
        <br>



    </div>
    </div>
    </div><?php
        }
    }
}
        ?>


</body>

</html>