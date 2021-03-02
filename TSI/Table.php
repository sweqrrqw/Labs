<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>VolgaCars</title>
</head>

<body>
<div class="row">
    <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
            <button class="navbar-toggler  justify-content-around" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around " id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php">Фирмы</a>
                    <a class="nav-item nav-link" href="spisok_auto.php">Список автомобилей</a>
                    <a class="nav-item nav-link" href="contacts.php">Контакты</a>
                    <a class="nav-item nav-link" href="registration.php">Регистрация</a>
                    <a class="nav-item nav-link active" href="Table.php">Таблица</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<?php

require_once 'connect.php';

?>
<main>
<div class="container content table">
    <table class="table">
        <tr>
            <th>CarID</th>
            <th>Brand</th>
            <th>NameCar</th>
            <th>HP</th>
            <th>Price</th>
        </tr>
        <?php
        $cars = mysqli_query($connect, "SELECT * FROM `cars`");
        $cars = mysqli_fetch_all($cars);
        foreach ($cars as $car) {
            ?>
            <tr>
                <td><?= $car[0] ?></td>
                <td><?= $car[1] ?></td>
                <td><?= $car[2] ?></td>
                <td><?= $car[3] ?></td>
                <td><?= $car[4] ?></td>

            </tr>

            <?php

        }
        ?>
    </table>
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
                        <a class="nav-item nav-link" href="spisok%20auto.html">Список автомобилей</a>
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

