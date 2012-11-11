<?php
    // /app/app.php
    require_once __DIR__.'/../vendor/autoload.php';
     
    use Symfony\Component\HttpFoundation\Response;
     
    $app = new Silex\Application();
   
    $app->get('/hello/', function() { 
        // $name = "raul"; 
        return new Response('Hello'); 
    });

    $app->get('/', function() {
        return new Response('<h1>Welcome to my new Silex app</h1>');
    });

    return $app;

?>