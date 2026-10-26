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
    $forwardedProto = strtolower(trim(explode(',', (string) $request->headers->get('x-forwarded-proto'))[0]));
    $configuredScheme = parse_url((string) env('APP_URL', ''), PHP_URL_SCHEME);
    $serverHttps = strtolower((string) $request->server('HTTPS'));

    // SSL can be terminated by a proxy before PHP receives the request. In
    // that case getScheme() reports http, even though the browser is on HTTPS.
    $isHttps = $request->isSecure()
        || $forwardedProto === 'https'
        || in_array($serverHttps, ['on', '1'], true)
        || $configuredScheme === 'https';
    $scheme = $isHttps ? 'https' : 'http';

    $app->make('url')->forceRootUrl($scheme . '://' . $host . $basePath);
}

$app->run($request);
