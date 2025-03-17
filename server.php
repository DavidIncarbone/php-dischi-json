<?php

require_once "./vars.php";

// var_dump($_POST);

$discs[] = $_POST;

// var_dump($discs);

$discs_json = json_encode($discs);

file_put_contents($discs_path, $discs_json);

header("Location: ./index.php");
