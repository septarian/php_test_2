<?php

declare(strict_types=1);

class NextMovie 
{
    public function __construct(
        private string $title,
        private int $days,
        private string $following_production,
        private string $release_date,
        private string $poster_url,
        private string $overview,
    ){}

    public function days_until_message(): string
{
    $days = $this->days;
    return match(true){
        $days === 0     => "¡Hoy se estrena!",
        $days === 1     => "¡mañana se estrena!",
        $days < 8       => "¡Sale esta semana!",
        $days < 30      => "¡Sale este mes!",
        default         => "¡Sale en $days dias!",
    };
}

    public static function fetch_and_create_movie(string $api_url): NextMovie  #espera devolver una instancia de la propia clase pelicula
{
    $resultado = file_get_contents($api_url);
    $data = json_decode($resultado, true);

    return new self(
        $data["title"],
        $data["days_until"],
        $data["following_production"]["title"] ?? "desconocido",    #si no hay siguiente pelicula pondra "desconocido"
        $data["release_date"],
        $data["poster_url"],
        $data["overview"],
    );
}

    public function get_data()
    {
        return get_object_vars($this);   #devuelve todas las propiedades del objeto
    }

}