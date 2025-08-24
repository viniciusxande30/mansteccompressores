<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TransporteController;


/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/', 'Controller@homeIndex');

$router->post('/send-email-home', function (\Illuminate\Http\Request $request) {
    $data = [
        'name'    => $request->input('name'),
        'email'   => $request->input('email'),
        'phone'   => $request->input('phone'),
        'subject' => $request->input('subject'),
        'message' => $request->input('message'),
    ];

    \Illuminate\Support\Facades\Mail::send('mail.contact-home', ['data' => $data], function ($message) use ($data) {
        $message->to('comercial@mansteccompressores.com.br', 'Envio de E-mail')
                ->subject('Contato do Site - Contato: ' . $data['subject']);
                //->replyTo($data['email'], $data['name']);
    });

     // Retorna a view original com mensagem de sucesso
    return view('site', ['success' => true]);
});

$router->post('/send-cotacao-frete', function (\Illuminate\Http\Request $request) {
        $data = [
        'id' => $request->input('id'),
        'origin'    => $request->input('name'),
        'destination'   => $request->input('email'),
        'name'   => $request->input('phone'),
        'whatsapp' => $request->input('subject'),
        'message' => $request->input('message'),
    ];

    \Illuminate\Support\Facades\Mail::send('mail.contact-cotacao-frete', ['data' => $data], function ($message) use ($data) {
        $message->to('comercial@krstrans.com.br', 'Envio de E-mail')
                ->subject('Contato do Site - Formulário: ' . $data['name']);
                //->replyTo($data['email'], $data['name']);
    });

     // Retorna a view original com mensagem de sucesso
    return view('site', ['success' => true]);
});

$router->post('/send-cotacao-frete-whatsapp', function (\Illuminate\Http\Request $request) {
        $data = [
        'id' => $request->input('id'),
        'origin'    => $request->input('origin'),
        'destination'   => $request->input('destination'),
        'name'   => $request->input('name'),
        'whatsapp' => $request->input('whatsapp'),
        'message' => $request->input('message'),
    ];

    \Illuminate\Support\Facades\Mail::send('mail.contact-cotacao-frete-whatsapp', ['data' => $data], function ($message) use ($data) {
        $message->to('comercial@krstrans.com.br', 'Envio de E-mail')
                ->subject('Contato do Site - WhatsApp: ' . $data['name']);
                //->replyTo($data['email'], $data['name']);
    });

     // Retorna a view original com mensagem de sucesso
    return view('site', ['success' => true]);
});


$router->get('/compressores-de-ar/{destino}', 'TransporteController@mostrarRota');
$router->get('/compressores-de-ar', 'TransporteController@listarRotas');
$router->get('/contato', 'TransporteController@contato');
$router->get('/sobre-nos', 'TransporteController@sobreNos');
$router->get('/nossos-servicos', 'TransporteController@servicos');

$router->get('/manutencao-preventiva', 'TransporteController@manutencaoPreventiva');
$router->get('/manutencao-corretiva', 'TransporteController@manutencaoCorretiva');
$router->get('/kits-de-servico', 'TransporteController@kits');
$router->get('/monitoramento-e-upgrade', 'TransporteController@monitoramento');
$router->get('/contratos-de-servico', 'TransporteController@contratos');
$router->get('/auditoria-e-inspecoes', 'TransporteController@auditoria');

$router->get('/politicas-de-privacidade', 'TransporteController@politicas');
$router->get('/termos-de-uso', 'TransporteController@termos');



// $router->get('/teste', 'Controller@teste');




