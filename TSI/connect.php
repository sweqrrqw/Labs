<?php

$connect = mysqli_connect( 'localhost', 'root', '', 'lel');

if (!$connect) {

    die('Error connect to database!');

}