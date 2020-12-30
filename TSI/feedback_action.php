<?php

include_once "SwearFilter.php";
var_dump($_POST);
$feedbackText = $_POST['feedback'];
$filter = new SwearFilter();

$feedbackText = $filter->removeSwearWords($feedbackText);

var_dump($feedbackText);
