<?php

$discs_path = "./discs.json";

$discs_string = file_get_contents($discs_path);
// var_dump($discs_string);
$discs = json_decode($discs_string, true);
// var_dump($discs);
