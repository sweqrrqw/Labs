<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                        <a class="nav-item nav-link active" href="contacts.php">Контакты</a>
                        <a class="nav-item nav-link" href="registration.php">Регистрация</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <main>
        <div class="container content">
            <div class="row">
                <div class="col">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum illum tempora nobis perspiciatis cupiditate aliquam? Perspiciatis eveniet, laboriosam et officia quos dolor hic, inventore pariatur modi, voluptatum consectetur libero saepe.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat voluptates, sed distinctio saepe animi perspiciatis tempora, quia enim, officia aperiam quaerat odit qui voluptatibus soluta. Exercitationem magni vel veritatis, magnam.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <h3>Контакты:</h3>
                    <ul>
                        <li>Группа Вконтакте 'ссылка'</li>
                        <li>Instagram 'ссылка'</li>
                        <li>Telegram 'ссылка'</li>
                    </ul>
                </div>
                <div class="col-8">
                    <form method="post">
                    <textarea name="feedback" id="feedback" cols="40" rows="5"></textarea><br>
                        <input type="submit" class="btn btn-dark">
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
<?php require 'feedback_action.php' ?>





    <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="https://yastatic.net/share2/share.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
