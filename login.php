<!doctype html>

<head>
    <title> Најава </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style/style_header.css" />
    <link rel="stylesheet" href="style/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <style>
    h1 {
        font-size: 20px;
        margin-top: 24px;
        margin-bottom: 24px;
    }
    </style>

    <title>Најава</title>
</head>

<body>
    <?php
      
      include("includes/header.php");
      if(!isset($_SESSION['user']) || empty($_SESSION['user']))
      {

      
      ?>
    <div class="col-md-6 offset-md-3 mt-5">

        <form action="login_func.php" method="POST">
            <div class="form-group">
                <label for="exampleInputName">Корисничко име или е-пошта</label>
                <input type="text" name="username" class="form-control"
                    placeholder="Внесете го Вашето корисничко име или е-пошта" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1" required="required">Лозинка</label>
                <div class="row">
                    <div class="col-8">
                        <input type="password" name="password" class="form-control" id="myInput"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col-4">
                        <input type="checkbox" onclick="Lozinka()">Прикажи лозинка
                        <script>
                        function Lozinka() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                        </script>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <a style="text-decoration: none;float: right;color: #187fab ;" data-toggle="tooltip" title="Signin"
                    href="signup.php">Сѐ уште немате профил? Регистрирајте се.</a><br><br>
                <button id="login" name="login" type="submit" class="btn btn-dark">Најави се</button>

        </form>
    </div>
    <?php
      }
      else
      {
          header("Location: main.php");
      }
      ?>


    </div>
</body>

</html>