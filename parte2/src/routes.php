<?php

// Routes

$app->get('/', function ($request, $response, $args) {
    $this->logger->info("Slim-Skeleton '/' route");
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/empleados/{inicio}/{fin}', function ($request,$response, $args) use ($app) {
    $intInicio = $request->getAttribute('inicio');
    $intFin = $request->getAttribute('fin');
    $args = array('intInicio' => $intInicio, 'intFin' => $intFin);
    return $this->renderer->render($response, 'empleados.phtml', $args);
});
