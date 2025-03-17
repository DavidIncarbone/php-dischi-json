<?php

require_once "./server.php"



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Add Disc</title>
</head>

<body>

    <h1 class="text-center text-white">Aggiungi un nuovo album</h1>


    <form action="server.php" method="POST" class="text-white p-5">
        <div class="card text-white">
            <div class="card-body">
                <div class="mb-3">
                    <strong>Tutti i campi sono obbligatori</strong>
                </div>

                <div class="mb-3">
                    <label for="album-name" class="form-label">Nome album:</label>
                    <div class="form-text text-white">Min 1 Max 50 caratteri</div>
                    <input type="text" id="album-name" name="album-name" placeholder="Inserisci il nome dell'album" class="form-control" required minlength="1" maxlength="50">
                </div>

                <div class="mb-3">
                    <label for="artist-name" class="form-label">Nome artista:</label>
                    <div class="form-text text-white">Min 1 Max 50 caratteri</div>
                    <input type="text" id="artist-name" name="artist-name" placeholder="Inserisci il nome dell'artista" class="form-control" required minlength="1" maxlength="50">
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label">Genere:</label>
                    <div class="form-text text-white">Min 1 Max 50 caratteri</div>
                    <input type="text" id="genre" name="genre" placeholder="Inserisci il genere dell'album" class="form-control" required minlength="1" maxlength="50">
                </div>

                <div class="mb-3">
                    <label for="year-of-pubblication" class="form-label">Anno di pubblicazione:</label>
                    <div class="form-text text-white">Min 1 Max 50 caratteri</div>
                    <input type="text" id="year-of-pubblication" name="year-of-pubblication" placeholder="Inserisci l'anno di pubblicazione dell'album" class="form-control" required minlength="1" maxlength="50">
                </div>

                <div class="mb-3">
                    <label for="album-cover" class="form-label">Cover album:</label>
                    <div class="form-text text-white">Min 1 Max 1000 caratteri</div>
                    <input type="text" id="album-cover" name="album-cover" placeholder="Inserisci la cover dell'album" class="form-control" required minlength="1" maxlength="1000">
                </div>
            </div>
        </div>

        <div class="mt-3 d-flex justify-content-center gap-2">
            <button type="submit" class="p-2 card text-white">Aggiungi album</button>
            <button type="reset" class="p-2 card text-white">Resetta il form</button>
        </div>
    </form>


</body>

</html>