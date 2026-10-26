<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/

$app = require __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$request = Illuminate\Http\Request::capture();

// Build absolute asset and page URLs from the active host. This avoids invalid
// URLs such as "http://:/assets/..." when Apache/PHP does not expose SERVER_NAME.
$host = $request->headers->get('host');
if ($host) {
    $basePath = rtrim(str_replace('/index.php', '', $request->getBaseUrl()), '/');
    $scheme = $request->getScheme();

    if ($request->headers->get('x-forwarded-proto') === 'https') {
        $scheme = 'https';
    }

    $app->make('url')->forceRootUrl($scheme . '://' . $host . $basePath);
}

$app->run($request);
