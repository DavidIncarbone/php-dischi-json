<?php

session_start();
require_once "./server.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">

    <title>PHP Dischi</title>
</head>

<body class="">

    <?php require_once "./header.php" ?>

    <div class="container ">
        <div class="row g-5 ">

            <?php
            foreach ($discs as $disc) {
                // var_dump($disc);
                // var_dump($disc["cover_url"]);

            ?>
                <div class="col-4 d-flex flex-column align-items-center py-3 ">
                    <div class="img-container ">
                        <img src=<?php echo $disc["cover_url"] ?> alt=<?php echo $disc["title"] ?>>
                    </div>
                    <h5><?php echo $disc["title"] ?></h5>
                    <div><?php echo $disc["artist"] ?></div>
                    <h5><?php echo $disc["year_of_publication"] ?></h5>
                </div>


            <?php } ?>



        </div>
    </div>



</body>

</html>