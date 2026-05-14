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

$sendEmailHomeHandler = function (\Illuminate\Http\Request $request) {
    $description = trim((string) $request->input('description', ''));
    $legacyMessage = trim((string) $request->input('message', ''));
    $formId = trim((string) $request->input('id', 'form_contato'));
    $subject = trim((string) $request->input('subject', ''));

    if ($subject === '') {
        $subject = $formId === 'form_popup_home'
            ? 'Popup Home - Contato de emergência'
            : 'Formulário de contato';
    }

    $data = [
        'id'          => $formId,
        'name'        => trim((string) $request->input('name', '')),
        'company'     => trim((string) $request->input('company', '')),
        'address'     => trim((string) $request->input('address', '')),
        'email'       => trim((string) $request->input('email', '')),
        'phone'       => trim((string) $request->input('phone', '')),
        'subject'     => $subject,
        'description' => $description,
        'message'     => $description !== '' ? $description : $legacyMessage,
    ];

    \Illuminate\Support\Facades\Mail::send('mail.contact-home', ['data' => $data], function ($message) use ($data) {
        $message->to('comercial@mansteccompressores.com.br', 'Envio de E-mail')
                ->subject('Contato do Site - ' . $data['subject']);
                //->replyTo($data['email'], $data['name']);
    });

     // Retorna a view original com mensagem de sucesso
    return view('site', ['success' => true]);
};

$router->post('/send-email-home', $sendEmailHomeHandler);
$router->post('/MANSTEC/public/send-email-home', $sendEmailHomeHandler);
$router->post('/MANSTEC/PUBLIC/send-email-home', $sendEmailHomeHandler);

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
$router->get('/redes-de-ar', 'TransporteController@redes');

$router->get('/politicas-de-privacidade', 'TransporteController@politicas');
$router->get('/termos-de-uso', 'TransporteController@termos');
$router->get('/blog', 'TransporteController@blog');


$router->get('/blog/automacao-com-ar-comprimido', function () {return view('artigos.automacao-com-ar-comprimido');});
$router->get('/blog/checklist-completo', function () {return view('artigos.checklist-completo');});
$router->get('/blog/como-funciona-um-compressor', function () {return view('artigos.como-funciona-um-compressor');});
$router->get('/blog/como-identificar-vazamento-em-ar', function () {return view('artigos.como-identificar-vazamento-em-ar');});
$router->get('/blog/compressor-com-inversor', function () {return view('artigos.compressor-com-inversor');});
$router->get('/blog/custo-do-ar-comprimido', function () {return view('artigos.custo-do-ar-comprimido');});
$router->get('/blog/dimensionamento-de-compressores', function () {return view('artigos.dimensionamento-de-compressores');});
$router->get('/blog/eficiencia-energetica-em-compressores', function () {return view('artigos.eficiencia-energetica-em-compressores');});
$router->get('/blog/empresa-de-manutencao', function () {return view('artigos.empresa-de-manutencao');});
$router->get('/blog/erros-na-instalacao-de-compressores', function () {return view('artigos.erros-na-instalacao-de-compressores');});
$router->get('/blog/falhas-comuns-e-como-evitar', function () {return view('artigos.falhas-comuns-e-como-evitar');});
$router->get('/blog/linha-de-ar-comprimido', function () {return view('artigos.linha-de-ar-comprimido');});
$router->get('/blog/manutencao-preventiva-vs-corretiva', function () {return view('artigos.manutencao-preventiva-vs-corretiva');});
$router->get('/blog/nr13-em-compressores', function () {return view('artigos.nr13-em-compressores');});
$router->get('/blog/pressao-ideal-em-compressores', function () {return view('artigos.pressao-ideal-em-compressores');});
$router->get('/blog/qualidade-do-ar-comprimido', function () {return view('artigos.qualidade-do-ar-comprimido');});
$router->get('/blog/secador-refrigerado-vs-adsorcao', function () {return view('artigos.secador-refrigerado-vs-adsorcao');});
$router->get('/blog/secadores-de-ar-comprimido', function () {return view('artigos.secadores-de-ar-comprimido');});
$router->get('/blog/tipos-de-compressores', function () {return view('artigos.tipos-de-compressores');});
$router->get('/blog/vida-util-de-compressores', function () {return view('artigos.vida-util-de-compressores');});


// $router->get('/teste', 'Controller@teste');

