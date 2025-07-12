<?php

//include 'functions.php';
require_once 'const.php';
require_once 'functions.php';
require_once 'classes/NextMovie.php';

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();

render_template('head', ["title" => $next_movie_data["title"]]);
render_template('main', array_merge($next_movie_data, ["days" => $next_movie->days_until_message()] ));  #fusiona varios arrays en uno solo, util para mandar varias variables como parametro