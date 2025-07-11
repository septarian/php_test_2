<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Repaso php </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-white">
        <?php

        const API_URL = "https://whenisthenextmcufilm.com/api";
        $ch = curl_init(API_URL);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultado = curl_exec($ch);
        $data = json_decode($resultado, true);
        ?>
        <section class="flex items-center">
            <h1>La proxima pelicula de marvel</h1>
            <img src="<?=$data["poster_url"];?>" width="300" class="bg-white" style="border-radius:20px;" alt="poster">
        </section>

        <hgroup class="grid items-center justify-items-center align-center"> 
            <h2 class="align-center">La pelicula <strong class="text-primary"> <?=$data["title"]?> </strong> se estrena en <strong class="text-warning"> <?=$data["days_until"]?> </strong> dias</h2>
            <h2>La fecha de estreno es el <strong class="text-info"> <?=$data["release_date"]?> </strong>
            <h3>La siguiente pelicula sera <strong class="text-danger"> <?=$data["following_production"]["title"]?> </strong></h3>
        </hgroup>
    </body>
</html>

