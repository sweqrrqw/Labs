

<html lang="ru">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
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


                </div>
            </div>
        </nav>
    </div>
</div>
<main>
    <div class="container ">
        <div class="row">
            <div class="col">
                <form class="form-signin" method="post">
                    <div class="form-group">

                        <label>Имя пользователя </label>
                        <input type="text" class="form-control" name="username"  placeholder="Введите Имя" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль" required>
                    </div>
                    <button type="submit" class="btn  btn-primary btn-dark">Вход</button>
                    <div class="form-group">
                        <p>Нет аккаунта? Кликай на кнопку ниже и регистрируйся</p>
                        <a href="registration.php" class="btn  btn-primary btn-dark">Зарегистрироваться</a>
                    </div>
                    <?php
                    session_start();
                    $connection= new mysqli('localhost','root','','lel')or die("Could not connect to mysql".mysqli_error($connection));
                    $select_db = mysqli_select_db($connection , 'lel');

                    if (isset($_POST['username']) && isset($_POST['password'])){
                        $username = $_POST['username'];
                        $password = $_POST["password"];

                        $query = "SELECT * FROM users WHERE username='$username'and password='$password'";
                        $result = mysqli_query( $connection,$query) or die(mysqli_error($connection));
                        $count = mysqli_num_rows($result);

                        if($count == 1){
                            $_SESSION['username'] = $username;
                        }else{
                            $fmsg = "Error";
                        }
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['username'])){
                        $username = $_SESSION['username'];
                        echo " <h4>ПРОФИЛЬ-<sub id='costil'>костыль</sub></h4>" ;
                        echo "hello ",$username," ";
                        echo "Вы вошли <br>";
                        echo " <a class='btn btn-primary btn-dark' href='logout.php'>Выход</a>";
                    }
                    ?>

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
                        <a class="nav-item nav-link" href="spisok_auto.php">Список автомобилей</a>
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