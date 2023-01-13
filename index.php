<?php
require_once "./classes/movies.php";

$avatar = new Movie("Avatar", "English", "fantastico");
$pulp_fiction = new Movie("Pulp Fiction", "English", "Azione" );
$scarface = new Movie("Scarface", "English", "Azione");

?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movies</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->
    </head>
    <body class="bg-dark">
        <div class="container">
            <h1 class="text-center text-primary mb-5">Movies Object in PHP</h1>
            <ul class="list-group bg-white px-5 py-3 border border-black ">
                <li class="list-item">
                    <h5>Titolo Film: <?php  echo $avatar->getTitle()?></h5>
                    <ul>
                        <li>Lingua originale: <?php echo $avatar->getOriginal_language()?></li>
                        <li>generi: <?php echo $avatar->getGenres()?></li>
                    </ul>
                </li>
            
            
                <li class="list-item py-3">
                    <h5>Titolo Film: <?php  echo $pulp_fiction->getTitle()?></h5>
                    <ul>
                        <li>Lingua originale: <?php echo $pulp_fiction->getOriginal_language()?></li>
                        <li>generi: <?php echo $pulp_fiction->getGenres()?></li>
                    </ul>
                </li>
            
            
                <li class="list-item">
                    <h5>Titolo Film: <?php  echo $scarface->getTitle()?></h5>
                    <ul>
                        <li>Lingua originale: <?php echo $scarface->getOriginal_language()?></li>
                        <li>generi: <?php echo $scarface->getGenres()?></li>
                    </ul>
                </li>
            </ul>
            
        </div>
        <!-- <script src="js/main.js"></script> -->
    </body>
</html>