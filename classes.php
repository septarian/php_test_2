<?php

declare(strict_types=1);

class SuperHero {

    //promoted properties -> 8.0
    public function __construct(
        private string $name,
        readonly public array $powers,
        readonly public string $planet,
        public int $level = 0
        ){}

    public function attack(){
        return "¡$this->name ataca con sus poderes!";
    }

    public function description(){
        $powers = implode(", ", $this->powers);     #implode convierte el array en string
        return "$this->name es un superheroe que viene de $this->planet y tiene los siguientes poderes: $powers y es nivel $this->level \n";
    }

    public static function random(){
        $names = ["thor", "spiderman", "ironman", "wolverine"];
        $powers = [
            ["volar", "fuerza", "inteligencia"],
            ["volar", "inteligencia"],
            ["volar", "fuerza", ],
            ["fuerza", "inteligencia"],
        ];
        $planets = ["hulkworld", "krypton", "gotham", "Tierra"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        //echo "$name fue el superheroe elegido que viene de $planet y tiene los siguientes poderes: " . implode(", ", $power) . "\n";
        return new self($name, $power, $planet);
    }
}

// estatico
$hero_random = SuperHero::random();
echo $hero_random->description();

//instanciar
$hero = new SuperHero("Batman", ["Inteligencia", "Fuerza", "Tecnologia"], "Gotham");
echo $hero->description();





//SuperHero::random();  #accede a la funcion estatica de la clase sin necesidad de crear un objeto