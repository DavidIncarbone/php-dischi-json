<?php


if ($_POST["title"] && $_POST["artist"] && $_POST["genre"] && $_POST["cover_url"] && $_POST["year_of_publication"]) {

    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $genre = $_POST["genre"];
    $cover_url = $_POST["cover_url"];
    $year_of_publication = $_POST["year_of_publication"];

    require_once "./vars.php";

    $discs[] = [
        "title" => $title,
        "artist" => $artist,
        "genre" => $genre,
        "cover_url" => $cover_url,
        "year_of_publication" => $year_of_publication
    ];

    $discs_json = json_encode($discs);

    file_put_contents($discs_path, $discs_json);

    header("Location: ./index.php");
} else {

    header("Location: ./form.php");
}
