<!DOCTYPE html>
<html>

<head>
    <title>Petscue - вдомете животно</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style/style_header.css" />
    <link rel="stylesheet" href="style/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>

<body>
    <?php 
        include("includes/header.php");
        include("includes/connection.php");
        
        ?>
    <br>
    <div class="container">

        <form accept-charset="UTF-8" action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-4">
                    <select class="form-control input-md" name="zivotno" required="required" id="zivotno">

                        <option value="mace">Маче</option>
                        <option value="kuce">Куче</option>
                    </select>
                </div>

                <div class="col-4">
                    <select class="form-control input-md" name="pol" required="required">
                        <option value="/">Пол</option>
                        <option value="m">Машки</option>
                        <option value="z">Женски</option>
                    </select>
                </div>
                <div class="col-4">
                    <select class="form-control input-md" name="vozrast" required="required">
                        <option value="/">Возраст</option>
                        <option value="0">Помало од 6 месеци</option>
                        <option value="1">Од 6 месеци до 1 година</option>
                        <option value="2">Од 1 година до 3 години</option>
                        <option value="3">Над 3 години</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <div class="checkbox">
                        <label><input type="checkbox" name="vakcinirano" value="ne">&nbsp;Вакцинирано</label>
                    </div>

                </div>
                <div class="col-4">
                    <div class="checkbox">
                        <label><input type="checkbox" name="chipirano" value="da">&nbsp;Чипирано</label>
                    </div>
                </div>
                <div class="col-4">
                    <button name="choice" type="submit" class="btn btn-dark btn-block">
                        Пребарувај
                    </button>
                </div>
            </div>

        </form>
        <hr>
        <br>
    </div>




    <?php
       if(!isset($_POST["choice"]))
       {
$sql = "SELECT slika, ID from mace";
$zivotno="mace";
include("prikaz.php");
$sql = "SELECT slika, ID from kuce";
$zivotno="kuce";
include("prikaz.php");

       }
       else
       {
           if($_POST["zivotno"]=="kuce")
           { $zivotno="kuce";
                if(isset($_POST["chipirano"]))
                {
                    if(isset($_POST["vakcinirano"]))
                    {
                        if($_POST["pol"]=="z")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from kuce where vozrast='0' and pol='z' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from kuce where vozrast='1' and pol='z' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from kuce where vozrast='2' and pol='z' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from kuce where vozrast='3' and pol='z' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from kuce where pol='z' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                        }
                        else if ($_POST["pol"]=="m")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from kuce where vozrast='0' and pol='m' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from kuce where vozrast='1' and pol='m' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from kuce where vozrast='2' and pol='m' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from kuce where vozrast='3' and pol='m' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from kuce where pol='m' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";

                        }
                        else
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from kuce where vozrast='0' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from kuce where vozrast='1' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from kuce where vozrast='2' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from kuce where vozrast='3' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from kuce where vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                        }
                    }
                    else
                    {
                        if($_POST["pol"]=="z")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from kuce where vozrast='0' and pol='z' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from kuce where vozrast='1' and pol='z' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from kuce where vozrast='2' and pol='z'  and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from kuce where vozrast='3' and pol='z'  and chipirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from kuce where pol='z'  and chipirano='da' and vdomeno='ne'";
                        }
                        else if ($_POST["pol"]=="m")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from kuce where vozrast='0' and pol='m' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from kuce where vozrast='1' and pol='m' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from kuce where vozrast='2' and pol='m' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from kuce where vozrast='3' and pol='m' and chipirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from kuce where pol='m' and chipirano='da' and vdomeno='ne'";

                        }
                        else
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from kuce where vozrast='0' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from kuce where vozrast='1' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from kuce where vozrast='2' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from kuce where vozrast='3' and chipirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from kuce where chipirano='da' and vdomeno='ne'";
                        }
                    }
                }
                else
                {
                    if(isset($_POST["vakcinirano"]))
                    {
                        if($_POST["pol"]=="z")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from kuce where vozrast='0' and pol='z' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from kuce where vozrast='1' and pol='z' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from kuce where vozrast='2' and pol='z' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from kuce where vozrast='3' and pol='z' and vakcinirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from kuce where pol='z' and vakcinirano='da' and vdomeno='ne'";
                        }
                        else if ($_POST["pol"]=="m")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from kuce where vozrast='0' and pol='m' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from kuce where vozrast='1' and pol='m' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from kuce where vozrast='2' and pol='m' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from kuce where vozrast='3' and pol='m' and vakcinirano='da'  vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from kuce where pol='m' and vakcinirano='da' and vdomeno='ne'";

                        }
                        else
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from kuce where vozrast='0' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from kuce where vozrast='1' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from kuce where vozrast='2' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from kuce where vozrast='3' and vakcinirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from kuce where vakcinirano='da' and vdomeno='ne'";
                        }
                    }
                    else
                    {
                        if($_POST["pol"]=="z")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from kuce where vozrast='0' and pol='z' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from kuce where vozrast='1' and pol='z' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from kuce where vozrast='2' and pol='z'  and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from kuce where vozrast='3' and pol='z'  and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from kuce where pol='z'  and vdomeno='ne'";
                        }
                        else if ($_POST["pol"]=="m")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from kuce where vozrast='0' and pol='m' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from kuce where vozrast='1' and pol='m' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from kuce where vozrast='2' and pol='m' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from kuce where vozrast='3' and pol='m' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from kuce where pol='m' and vdomeno='ne'";

                        }
                        else
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from kuce where vozrast='0' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from kuce where vozrast='1' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from kuce where vozrast='2' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from kuce where vozrast='3' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from kuce where vdomeno='ne'";
                        }
                    }

                }
           }
           else
           { $zivotno= "mace";
               if(isset($_POST["chipirano"]))
                {
                    if(isset($_POST["vakcinirano"]))
                    {
                        if($_POST["pol"]=="z")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from mace where vozrast='0' and pol='z' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from mace where vozrast='1' and pol='z' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from mace where vozrast='2' and pol='z' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from mace where vozrast='3' and pol='z' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from mace where pol='z' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                        }
                        else if ($_POST["pol"]=="m")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from mace where vozrast='0' and pol='m' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from mace where vozrast='1' and pol='m' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from mace where vozrast='2' and pol='m' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from mace where vozrast='3' and pol='m' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from mace where pol='m' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";

                        }
                        else
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from mace where vozrast='0' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from mace where vozrast='1' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from mace where vozrast='2' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from mace where vozrast='3' and vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from mace where vakcinirano='da' and chipirano='da' and vdomeno='ne'";
                        }
                    }
                    else
                    {
                        if($_POST["pol"]=="z")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from mace where vozrast='0' and pol='z' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from mace where vozrast='1' and pol='z' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from mace where vozrast='2' and pol='z'  and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from mace where vozrast='3' and pol='z'  and chipirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from mace where pol='z'  and chipirano='da' and vdomeno='ne'";
                        }
                        else if ($_POST["pol"]=="m")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from mace where vozrast='0' and pol='m' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from mace where vozrast='1' and pol='m' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from mace where vozrast='2' and pol='m' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from mace where vozrast='3' and pol='m' and chipirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from mace where pol='m' and chipirano='da' and vdomeno='ne'";

                        }
                        else
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from mace where vozrast='0' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from mace where vozrast='1' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from mace where vozrast='2' and chipirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from mace where vozrast='3' and chipirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from mace where chipirano='da' and vdomeno='ne'";
                        }
                    }
                }
                else
                {
                    if(isset($_POST["vakcinirano"]))
                    {
                        if($_POST["pol"]=="z")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from mace where vozrast='0' and pol='z' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from mace where vozrast='1' and pol='z' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from mace where vozrast='2' and pol='z' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from mace where vozrast='3' and pol='z' and vakcinirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from mace where pol='z' and vakcinirano='da' and vdomeno='ne'";
                        }
                        else if ($_POST["pol"]=="m")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from mace where vozrast='0' and pol='m' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from mace where vozrast='1' and pol='m' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from mace where vozrast='2' and pol='m' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from mace where vozrast='3' and pol='m' and vakcinirano='da'  vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from mace where pol='m' and vakcinirano='da' and vdomeno='ne'";

                        }
                        else
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from mace where vozrast='0' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from mace where vozrast='1' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from mace where vozrast='2' and vakcinirano='da' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from mace where vozrast='3' and vakcinirano='da' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from mace where vakcinirano='da' and vdomeno='ne'";
                        }
                    }
                    else
                    {
                        if($_POST["pol"]=="z")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from mace where vozrast='0' and pol='z' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from mace where vozrast='1' and pol='z' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from mace where vozrast='2' and pol='z'  and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from mace where vozrast='3' and pol='z'  and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from mace where pol='z'  and vdomeno='ne'";
                        }
                        else if ($_POST["pol"]=="m")
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from mace where vozrast='0' and pol='m' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from mace where vozrast='1' and pol='m' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from mace where vozrast='2' and pol='m' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from mace where vozrast='3' and pol='m' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from mace where pol='m' and vdomeno='ne'";

                        }
                        else
                        {
                            if($_POST["vozrast"]=="0")
                            $sql = "SELECT slika, ID from mace where vozrast='0' and vdomeno='ne'";
                            if($_POST["vozrast"]=="1")
                            $sql = "SELECT slika, ID from mace where vozrast='1' and vdomeno='ne'";
                            if($_POST["vozrast"]=="2")
                            $sql = "SELECT slika, ID from mace where vozrast='2' and vdomeno='ne'";
                            if($_POST["vozrast"]=="3")
                            $sql = "SELECT slika, ID from mace where vozrast='3' and vdomeno='ne'";
                            else 
                            $sql = "SELECT slika, ID from mace where vdomeno='ne'";
                        }
                    }

                }
           }
           include("prikaz.php");
        
    
       }
       ?>
</body>

</html>