

<html lang="ru">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>VolgaCars</title>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
            <button class="navbar-toggler  justify-content-around" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around " id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php">Фирмы</a>
                    <a class="nav-item nav-link" href="spisok_auto.php">Список автомобилей</a>
                    <a class="nav-item nav-link" href="contacts.php">Контакты</a>
                    <a class="nav-item nav-link active" href="registration.php">Регистрация</a>
                    <a class="nav-item nav-link" href="Table.php">Таблица</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<main>
    <?php
    $connection= new mysqli('localhost','root','','lel')or die("Could not connect to mysql".mysqli_error($connection));
    $select_db = mysqli_select_db($connection , 'lel');

    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST["password"];

        $query = "INSERT INTO users (username , email, password) VALUES ('$username', '$email','$password')";
        $result = mysqli_query( $connection,$query);

        if ($result){
            $smsg = "Регистрация прошла успешно!";
        }else{
            $fsmsg = "Ошибка";
        }
    }
    ?>
    <div class="container ">
        <div class="row">
            <div class="col">
                <form class="form-signin" method="post">
                    <div class="form-group">
                        <?php if (isset($smsg)){?><div class="alert alert-success" role="alert"><?php echo $smsg;?></div><?php }?>
                        <?php if (isset($fsmsg)){?><div class="alert alert-danger" role="alert"><?php echo $fsmsg;?></div><?php }?>
                        <label>Имя пользователя </label>
                            <input type="text" class="form-control" name="username"  placeholder="Введите Имя" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Адрес электронной почты</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите E-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль" required>
                    </div>
                     <button type="submit" class="btn  btn-primary btn-dark">Зарегистрироваться</button>
                    <div class="form-group">
                        <p>Уже есть аккаунт? Тогда кликай кнопку ниже</p>
                        <a href="login.php" class="btn  btn-primary btn-dark">Вход</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>


<footer class="footer fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h5>Страницы</h5>
                <ul>
                    <li><a class="nav-item nav-link active" href="index.php">Фирмы</a>
                    <li>
                        <a class="nav-item nav-link" href="spisok%20auto.php">Список автомобилей</a>
                    </li>
                    <li>
                        <a class="nav-item nav-link" href="contacts.php">Контакты</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <div class="ya-share2 st" data-services="vkontakte,facebook,twitter,reddit,telegram"></div>
            </div>
            <div class="col-3 d-flex justify-content-around">
                <div class="row">COPYRIGHT.2020&copy;</div>

            </div>
        </div>

    </div>
</footer>




<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>