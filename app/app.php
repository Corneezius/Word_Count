<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/word.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
           'twig.path' => __DIR__.'/../views'

       ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');

      });

    $app->get("/scrabble_result", function() use($app) {
        $new_Word = new Word;
        $word_count = $new_Word->getCount($_GET['input_word']);
        return $app['twig']->render('scrabble_score.html.twig', array('result' => $scrabble_phrase));
    });

    return $app;

 ?>
