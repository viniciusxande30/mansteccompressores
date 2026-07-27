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
$router->get('/kits-de-servicos', function () {
    return redirect('/kits-de-servico', 301);
});
$router->get('/monitoramento-e-upgrade', 'TransporteController@monitoramento');
$router->get('/contratos-de-servico', 'TransporteController@contratos');
$router->get('/auditoria-e-inspecoes', 'TransporteController@auditoria');
$router->get('/auditorias-e-inspecoes', function () {
    return redirect('/auditoria-e-inspecoes', 301);
});
$router->get('/redes-de-ar', 'TransporteController@redes');

$router->get('/politicas-de-privacidade', 'TransporteController@politicas');
$router->get('/termos-de-uso', 'TransporteController@termos');
$router->get('/blog', 'TransporteController@blog');


$router->get('/blog/automacao-com-ar-comprimido', function () {return view('artigos.automacao-com-ar-comprimido');});
$router->get('/blog/assistencia-tecnica-compressores-de-ar', function () {return view('artigos.assistencia-tecnica-compressores-de-ar');});
$router->get('/blog/auditoria-energetica-ar-comprimido', function () {return view('artigos.auditoria-energetica-ar-comprimido');});
$router->get('/blog/checklist-completo', function () {return view('artigos.checklist-completo');});
$router->get('/blog/como-funciona-um-compressor', function () {return view('artigos.como-funciona-um-compressor');});
$router->get('/blog/como-identificar-vazamento-em-ar', function () {return view('artigos.como-identificar-vazamento-em-ar');});
$router->get('/blog/compressor-com-inversor', function () {return view('artigos.compressor-com-inversor');});
$router->get('/blog/compressor-de-parafuso-industrial', function () {return view('artigos.compressor-de-parafuso-industrial');});
$router->get('/blog/contrato-manutencao-compressores', function () {return view('artigos.contrato-manutencao-compressores');});
$router->get('/blog/custo-do-ar-comprimido', function () {return view('artigos.custo-do-ar-comprimido');});
$router->get('/blog/custo-operacional', function () {return view('artigos.custo-operacional');});
$router->get('/blog/dimensionamento-de-compressores', function () {return view('artigos.dimensionamento-de-compressores');});
$router->get('/blog/eficiencia-energetica-em-compressores', function () {return view('artigos.eficiencia-energetica-em-compressores');});
$router->get('/blog/eficiencia-energetica-industrial', function () {return view('artigos.eficiencia-energetica-industrial');});
$router->get('/blog/empresa-de-manutencao', function () {return view('artigos.empresa-de-manutencao');});
$router->get('/blog/erros-na-instalacao-de-compressores', function () {return view('artigos.erros-na-instalacao-de-compressores');});
$router->get('/blog/falhas-comuns-e-como-evitar', function () {return view('artigos.falhas-comuns-e-como-evitar');});
$router->get('/blog/linha-de-ar-comprimido', function () {return view('artigos.linha-de-ar-comprimido');});
$router->get('/blog/manutencao-preditiva-compressores', function () {return view('artigos.manutencao-preditiva-compressores');});
$router->get('/blog/manutencao-preventiva-compressores', function () {return view('artigos.manutencao-preventiva');});
$router->get('/blog/manutencao-preventiva-vs-corretiva', function () {return view('artigos.manutencao-preventiva-vs-corretiva');});
$router->get('/blog/nr13-em-compressores', function () {return view('artigos.nr13-em-compressores');});
$router->get('/blog/pecas-para-compressores-de-ar', function () {return view('artigos.pecas-para-compressores-de-ar');});
$router->get('/blog/pressostato-do-compressor-de-ar', function () {return view('artigos.pressostato-do-compressor-de-ar');});
$router->get('/blog/filtro-coalescente-em-ar-comprimido', function () {return view('artigos.filtro-coalescente-em-ar-comprimido');});
$router->get('/blog/ponto-de-orvalho-em-ar-comprimido', function () {return view('artigos.ponto-de-orvalho-em-ar-comprimido');});
$router->get('/blog/valvula-de-seguranca-do-compressor-de-ar', function () {return view('artigos.valvula-de-seguranca-do-compressor-de-ar');});
$router->get('/blog/separador-agua-oleo-em-ar-comprimido', function () {return view('artigos.separador-agua-oleo-em-ar-comprimido');});
$router->get('/blog/perda-de-carga-na-rede-de-ar-comprimido', function () {return view('artigos.perda-de-carga-na-rede-de-ar-comprimido');});
$router->get('/blog/pressao-ideal-em-compressores', function () {return view('artigos.pressao-ideal-em-compressores');});
$router->get('/blog/qualidade-do-ar-comprimido', function () {return view('artigos.qualidade-do-ar-comprimido');});
$router->get('/blog/reservatorio-de-ar-comprimido', function () {return view('artigos.reservatorio-de-ar-comprimido');});
$router->get('/blog/tratamento-de-condensado-em-ar-comprimido', function () {return view('artigos.tratamento-de-condensado-em-ar-comprimido');});
$router->get('/blog/retrofit-compressores-industriais', function () {return view('artigos.retrofit-compressores-industriais');});
$router->get('/blog/secador-refrigerado-vs-adsorcao', function () {return view('artigos.secador-refrigerado-vs-adsorcao');});
$router->get('/blog/secadores-de-ar-comprimido', function () {return view('artigos.secadores-de-ar-comprimido');});
$router->get('/blog/tipos-de-compressores', function () {return view('artigos.tipos-de-compressores');});
$router->get('/blog/vazamentos-de-ar-comprimido', function () {return view('artigos.vazamentos-de-ar-comprimido');});
$router->get('/blog/vida-util-de-compressores', function () {return view('artigos.vida-util-de-compressores');});

$router->get('/sitemap.xml', function () {
    $urls = [
        '/',
        '/sobre-nos',
        '/compressores-de-ar',
        '/contato',
        '/blog',
        '/manutencao-preventiva',
        '/manutencao-corretiva',
        '/kits-de-servico',
        '/monitoramento-e-upgrade',
        '/contratos-de-servico',
        '/auditoria-e-inspecoes',
        '/redes-de-ar',
        '/blog/automacao-com-ar-comprimido',
        '/blog/assistencia-tecnica-compressores-de-ar',
        '/blog/auditoria-energetica-ar-comprimido',
        '/blog/checklist-completo',
        '/blog/como-funciona-um-compressor',
        '/blog/como-identificar-vazamento-em-ar',
        '/blog/compressor-com-inversor',
        '/blog/compressor-de-parafuso-industrial',
        '/blog/contrato-manutencao-compressores',
        '/blog/custo-do-ar-comprimido',
        '/blog/custo-operacional',
        '/blog/dimensionamento-de-compressores',
        '/blog/eficiencia-energetica-em-compressores',
        '/blog/eficiencia-energetica-industrial',
        '/blog/empresa-de-manutencao',
        '/blog/erros-na-instalacao-de-compressores',
        '/blog/falhas-comuns-e-como-evitar',
        '/blog/linha-de-ar-comprimido',
        '/blog/manutencao-preditiva-compressores',
        '/blog/manutencao-preventiva-compressores',
        '/blog/manutencao-preventiva-vs-corretiva',
        '/blog/nr13-em-compressores',
        '/blog/pecas-para-compressores-de-ar',
        '/blog/pressostato-do-compressor-de-ar',
        '/blog/filtro-coalescente-em-ar-comprimido',
        '/blog/ponto-de-orvalho-em-ar-comprimido',
        '/blog/valvula-de-seguranca-do-compressor-de-ar',
        '/blog/separador-agua-oleo-em-ar-comprimido',
        '/blog/perda-de-carga-na-rede-de-ar-comprimido',
        '/blog/pressao-ideal-em-compressores',
        '/blog/qualidade-do-ar-comprimido',
        '/blog/reservatorio-de-ar-comprimido',
        '/blog/tratamento-de-condensado-em-ar-comprimido',
        '/blog/retrofit-compressores-industriais',
        '/blog/secador-refrigerado-vs-adsorcao',
        '/blog/secadores-de-ar-comprimido',
        '/blog/tipos-de-compressores',
        '/blog/vazamentos-de-ar-comprimido',
        '/blog/vida-util-de-compressores',
    ];

    $baseUrl = rtrim(url('/'), '/');
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

    foreach ($urls as $path) {
        $loc = htmlspecialchars($baseUrl . $path, ENT_XML1, 'UTF-8');
        $priority = $path === '/' ? '1.0' : (strpos($path, '/blog/') === 0 ? '0.8' : '0.9');

        $xml .= "  <url>\n";
        $xml .= "    <loc>{$loc}</loc>\n";
        $xml .= "    <changefreq>weekly</changefreq>\n";
        $xml .= "    <priority>{$priority}</priority>\n";
        $xml .= "  </url>\n";
    }

    $xml .= '</urlset>';

    return new \Illuminate\Http\Response($xml, 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
});

$router->get('/robots.txt', function () {
    $content = "User-agent: *\n";
    $content .= "Allow: /\n";
    $content .= "Sitemap: " . url('/sitemap.xml') . "\n";

    return new \Illuminate\Http\Response($content, 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
});

// $router->get('/teste', 'Controller@teste');
