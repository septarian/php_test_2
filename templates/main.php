<main>
    <body class="bg-dark text-white">
        <section class="flex items-center">
            <h1>La proxima pelicula de marvel</h1>
            <img src="<?= $poster_url; ?>" width="300" class="bg-white" style="border-radius:20px;" alt="poster">
        </section>

        <hgroup class="grid items-center justify-items-center align-center">
            <h2 class="align-center">La pelicula <strong class="text-primary"> <?= $title ?> </strong> - <strong class="text-warning"> <?= $days ?> </strong></h2>
            <h2>La fecha de estreno es el <strong class="text-info"> <?= $release_date ?> </strong>
                <h3>La siguiente pelicula sera <strong class="text-danger"> <?= $following_production ?> </strong></h3>
        </hgroup>
    </body>
</main>