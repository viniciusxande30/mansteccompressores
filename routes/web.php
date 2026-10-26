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


$guarulhosAreas = [
    'centro' => ['slug' => 'centro', 'name' => 'Centro'],
    'cumbica' => ['slug' => 'cumbica', 'name' => 'Cumbica'],
    'bonsucesso' => ['slug' => 'bonsucesso', 'name' => 'Bonsucesso'],
    'ponte-grande' => ['slug' => 'ponte-grande', 'name' => 'Ponte Grande'],
    'vila-galvao' => ['slug' => 'vila-galvao', 'name' => 'Vila Galvão'],
];

$router->get('/compressores-de-ar-em-guarulhos', function () {
    return view('locations.guarulhos');
});
$router->get('/compressores-de-ar-em-guarulhos/{bairro}', function ($bairro) use ($guarulhosAreas) {
    if (!isset($guarulhosAreas[$bairro])) {
        abort(404);
    }

    return view('locations.guarulhos', ['area' => $guarulhosAreas[$bairro]]);
});

$guarulhosServices = [
    'manutencao-de-compressores-em-guarulhos' => [
        'path' => '/manutencao-de-compressores-em-guarulhos', 'shortTitle' => 'Manutenção de Compressores',
        'title' => 'Manutenção de Compressores em Guarulhos', 'serviceType' => 'Manutenção de compressores de ar',
        'keywords' => 'manutenção de compressores em Guarulhos, manutenção compressor de ar Guarulhos, revisão de compressor Guarulhos',
        'description' => 'Manutenção preventiva e corretiva de compressores em Guarulhos. Solicite avaliação técnica para reduzir paradas e perdas de desempenho.',
        'heading' => 'Manutenção preventiva e corretiva de compressores em Guarulhos',
        'intro' => ['A Manstec atende empresas em Guarulhos com manutenção de compressores de ar, revisão técnica e diagnóstico de falhas.', 'A rotina é definida conforme o tipo de equipamento, horas de trabalho, condições de operação e impacto da parada na produção.'],
        'assessmentText' => 'A avaliação reúne inspeção do compressor e dos componentes que influenciam sua disponibilidade.',
        'items' => ['Filtros, óleo e componentes de desgaste', 'Temperatura, pressão e alarmes', 'Vazamentos e condições da rede', 'Histórico de falhas e manutenção'],
        'related' => 'Veja o <a href="' . url('/') . '/blog/plano-de-manutencao-de-compressores">plano de manutenção de compressores</a>, a diferença entre <a href="' . url('/') . '/blog/manutencao-preventiva-vs-corretiva">preventiva e corretiva</a> e o <a href="' . url('/') . '/compressores-de-ar-em-guarulhos">hub de Guarulhos</a>.',
    ],
    'assistencia-tecnica-de-compressores-em-guarulhos' => [
        'path' => '/assistencia-tecnica-de-compressores-em-guarulhos', 'shortTitle' => 'Assistência Técnica',
        'title' => 'Assistência Técnica de Compressores em Guarulhos', 'serviceType' => 'Assistência técnica de compressores de ar',
        'keywords' => 'assistência técnica de compressores em Guarulhos, conserto de compressor Guarulhos, técnico de compressor de ar',
        'description' => 'Assistência técnica para compressores de ar em Guarulhos, com diagnóstico de falhas e orientação para reduzir tempo de parada.',
        'heading' => 'Assistência técnica para compressor de ar em Guarulhos',
        'intro' => ['Queda de pressão, aquecimento, ruído, vazamento e alarmes são sinais que pedem diagnóstico técnico.', 'A Manstec organiza o atendimento conforme os sintomas, modelo do equipamento e urgência informada pela operação.'],
        'assessmentText' => 'O diagnóstico verifica os parâmetros do equipamento e os componentes relacionados ao sintoma.',
        'items' => ['Leitura de alarmes e parâmetros', 'Condição de válvulas, filtros e transmissão', 'Pressão e vazão na operação', 'Possíveis perdas de ar comprimido'],
        'related' => 'Veja quando buscar <a href="' . url('/') . '/blog/assistencia-tecnica-urgente-compressor">assistência técnica urgente</a>, causas de <a href="' . url('/') . '/blog/compressor-desarmando">compressor desarmando</a> e o <a href="' . url('/') . '/compressores-de-ar-em-guarulhos">atendimento em Guarulhos</a>.',
    ],
    'pecas-para-compressores-em-guarulhos' => [
        'path' => '/pecas-para-compressores-em-guarulhos', 'shortTitle' => 'Peças para Compressores',
        'title' => 'Peças para Compressores em Guarulhos', 'serviceType' => 'Peças e componentes para compressores de ar',
        'keywords' => 'peças para compressores em Guarulhos, filtro compressor Guarulhos, peças compressor de ar industrial',
        'description' => 'Peças e componentes para manutenção de compressores em Guarulhos. Solicite avaliação e cotação com especificação compatível.',
        'heading' => 'Peças e componentes para compressores de ar em Guarulhos',
        'intro' => ['A peça correta depende do modelo, série, pressão de trabalho e condição do equipamento. Informações incompletas podem levar a uma reposição incompatível.', 'A Manstec orienta a identificação de componentes de manutenção e itens relacionados ao sistema de ar comprimido.'],
        'assessmentText' => 'A identificação técnica reduz erros de compra e ajuda a preservar o desempenho do equipamento.',
        'items' => ['Filtros de ar, óleo e linha', 'Óleo e separadores compatíveis', 'Correias, válvulas e componentes de reposição', 'Itens para secagem e tratamento do ar'],
        'related' => 'Consulte o guia de <a href="' . url('/') . '/blog/pecas-para-compressores-de-ar">peças para compressores</a>, a <a href="' . url('/') . '/blog/troca-de-filtros-compressor-de-ar">troca de filtros</a> e o <a href="' . url('/') . '/compressores-de-ar-em-guarulhos">hub local</a>.',
    ],
    'redes-de-ar-comprimido-em-guarulhos' => [
        'path' => '/redes-de-ar-comprimido-em-guarulhos', 'shortTitle' => 'Redes de Ar Comprimido',
        'title' => 'Redes de Ar Comprimido em Guarulhos', 'serviceType' => 'Projetos e manutenção de redes de ar comprimido',
        'keywords' => 'redes de ar comprimido em Guarulhos, instalação rede de ar Guarulhos, vazamento de ar comprimido Guarulhos',
        'description' => 'Análise e manutenção de redes de ar comprimido em Guarulhos para reduzir perda de pressão, vazamentos e desperdício de energia.',
        'heading' => 'Redes de ar comprimido para indústrias em Guarulhos',
        'intro' => ['Uma rede inadequada pode reduzir a pressão disponível no ponto de uso e fazer o compressor trabalhar mais para compensar perdas.', 'A análise da distribuição considera vazamentos, queda de pressão, tratamento de ar e as necessidades dos equipamentos conectados.'],
        'assessmentText' => 'O objetivo é identificar restrições e perdas que comprometem a eficiência do sistema.',
        'items' => ['Vazamentos e conexões', 'Perda de carga e diâmetro de tubulação', 'Drenos, filtros e tratamento de ar', 'Pressão requerida nos pontos de uso'],
        'related' => 'Saiba mais sobre <a href="' . url('/') . '/blog/vazamentos-de-ar-comprimido">vazamentos de ar comprimido</a>, <a href="' . url('/') . '/blog/perda-de-carga-na-rede-de-ar-comprimido">perda de carga</a> e o <a href="' . url('/') . '/compressores-de-ar-em-guarulhos">atendimento em Guarulhos</a>.',
    ],
];

foreach ($guarulhosServices as $slug => $service) {
    $router->get('/' . $slug, function () use ($service) {
        return view('locations.guarulhos-service', ['localService' => $service]);
    });
}

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


$router->get('/blog/analise-de-demanda-de-ar-comprimido', function () {return view('artigos.analise-de-demanda-de-ar-comprimido');});
$router->get('/blog/automacao-com-ar-comprimido', function () {return view('artigos.automacao-com-ar-comprimido');});
$router->get('/blog/assistencia-tecnica-compressores-de-ar', function () {return view('artigos.assistencia-tecnica-compressores-de-ar');});
$router->get('/blog/auditoria-energetica-ar-comprimido', function () {return view('artigos.auditoria-energetica-ar-comprimido');});
$router->get('/blog/agua-na-linha-de-ar-comprimido', function () {return view('artigos.agua-na-linha-de-ar-comprimido');});
$router->get('/blog/checklist-completo', function () {return view('artigos.checklist-completo');});
$router->get('/blog/como-funciona-um-compressor', function () {return view('artigos.como-funciona-um-compressor');});
$router->get('/blog/como-identificar-vazamento-em-ar', function () {return view('artigos.como-identificar-vazamento-em-ar');});
$router->get('/blog/compressor-com-inversor', function () {return view('artigos.compressor-com-inversor');});
$router->get('/blog/compressor-de-parafuso-industrial', function () {return view('artigos.compressor-de-parafuso-industrial');});
$router->get('/blog/compressor-de-ar-nao-liga', function () {return view('artigos.compressor-de-ar-nao-liga');});
$router->get('/blog/compressor-consumindo-muito-oleo', function () {return view('artigos.compressor-consumindo-muito-oleo');});
$router->get('/blog/compressor-desarmando', function () {return view('artigos.compressor-desarmando');});
$router->get('/blog/compressor-fazendo-barulho', function () {return view('artigos.compressor-fazendo-barulho');});
$router->get('/blog/compressor-isento-de-oleo', function () {return view('artigos.compressor-isento-de-oleo');});
$router->get('/blog/compressor-nao-atinge-pressao', function () {return view('artigos.compressor-nao-atinge-pressao');});
$router->get('/blog/compressor-nao-desliga', function () {return view('artigos.compressor-nao-desliga');});
$router->get('/blog/compressor-perde-pressao', function () {return view('artigos.compressor-perde-pressao');});
$router->get('/blog/compressor-superaquecendo', function () {return view('artigos.compressor-superaquecendo');});
$router->get('/blog/compressor-vazando-oleo', function () {return view('artigos.compressor-vazando-oleo');});
$router->get('/blog/contrato-manutencao-compressores', function () {return view('artigos.contrato-manutencao-compressores');});
$router->get('/blog/custo-do-ar-comprimido', function () {return view('artigos.custo-do-ar-comprimido');});
$router->get('/blog/custo-operacional', function () {return view('artigos.custo-operacional');});
$router->get('/blog/deteccao-ultrassonica-de-vazamentos', function () {return view('artigos.deteccao-ultrassonica-de-vazamentos');});
$router->get('/blog/dimensionamento-de-compressores', function () {return view('artigos.dimensionamento-de-compressores');});
$router->get('/blog/eficiencia-energetica-em-compressores', function () {return view('artigos.eficiencia-energetica-em-compressores');});
$router->get('/blog/eficiencia-energetica-industrial', function () {return view('artigos.eficiencia-energetica-industrial');});
$router->get('/blog/empresa-de-manutencao', function () {return view('artigos.empresa-de-manutencao');});
$router->get('/blog/erros-na-instalacao-de-compressores', function () {return view('artigos.erros-na-instalacao-de-compressores');});
$router->get('/blog/falhas-comuns-e-como-evitar', function () {return view('artigos.falhas-comuns-e-como-evitar');});
$router->get('/blog/linha-de-ar-comprimido', function () {return view('artigos.linha-de-ar-comprimido');});
$router->get('/blog/manutencao-de-secador-de-ar-comprimido', function () {return view('artigos.manutencao-de-secador-de-ar-comprimido');});
$router->get('/blog/manutencao-de-compressor-de-pistao', function () {return view('artigos.manutencao-de-compressor-de-pistao');});
$router->get('/blog/manutencao-de-reservatorio-de-ar-comprimido', function () {return view('artigos.manutencao-de-reservatorio-de-ar-comprimido');});
$router->get('/blog/manutencao-compressor-de-parafuso', function () {return view('artigos.manutencao-compressor-de-parafuso');});
$router->get('/blog/manutencao-multimarcas-de-compressores', function () {return view('artigos.manutencao-multimarcas-de-compressores');});
$router->get('/blog/manutencao-preditiva-compressores', function () {return view('artigos.manutencao-preditiva-compressores');});
$router->get('/blog/manutencao-preventiva-compressores', function () {return view('artigos.manutencao-preventiva');});
$router->get('/blog/manutencao-preventiva-vs-corretiva', function () {return view('artigos.manutencao-preventiva-vs-corretiva');});
$router->get('/blog/monitoramento-remoto-de-compressores', function () {return view('artigos.monitoramento-remoto-de-compressores');});
$router->get('/blog/nr13-em-compressores', function () {return view('artigos.nr13-em-compressores');});
$router->get('/blog/pecas-para-compressores-de-ar', function () {return view('artigos.pecas-para-compressores-de-ar');});
$router->get('/blog/pressostato-do-compressor-de-ar', function () {return view('artigos.pressostato-do-compressor-de-ar');});
$router->get('/blog/filtro-coalescente-em-ar-comprimido', function () {return view('artigos.filtro-coalescente-em-ar-comprimido');});
$router->get('/blog/ponto-de-orvalho-em-ar-comprimido', function () {return view('artigos.ponto-de-orvalho-em-ar-comprimido');});
$router->get('/blog/valvula-de-seguranca-do-compressor-de-ar', function () {return view('artigos.valvula-de-seguranca-do-compressor-de-ar');});
$router->get('/blog/dreno-automatico-compressor-de-ar', function () {return view('artigos.dreno-automatico-compressor-de-ar');});
$router->get('/blog/separador-agua-oleo-em-ar-comprimido', function () {return view('artigos.separador-agua-oleo-em-ar-comprimido');});
$router->get('/blog/sequenciamento-de-compressores-de-ar', function () {return view('artigos.sequenciamento-de-compressores-de-ar');});
$router->get('/blog/perda-de-carga-na-rede-de-ar-comprimido', function () {return view('artigos.perda-de-carga-na-rede-de-ar-comprimido');});
$router->get('/blog/pressao-ideal-em-compressores', function () {return view('artigos.pressao-ideal-em-compressores');});
$router->get('/blog/qualidade-do-ar-comprimido', function () {return view('artigos.qualidade-do-ar-comprimido');});
$router->get('/blog/revisao-de-compressor-de-ar', function () {return view('artigos.revisao-de-compressor-de-ar');});
$router->get('/blog/recuperacao-de-calor-em-compressores', function () {return view('artigos.recuperacao-de-calor-em-compressores');});
$router->get('/blog/reservatorio-de-ar-comprimido', function () {return view('artigos.reservatorio-de-ar-comprimido');});
$router->get('/blog/sala-de-compressores-industrial', function () {return view('artigos.sala-de-compressores-industrial');});
$router->get('/blog/tratamento-de-condensado-em-ar-comprimido', function () {return view('artigos.tratamento-de-condensado-em-ar-comprimido');});
$router->get('/blog/troca-de-filtros-compressor-de-ar', function () {return view('artigos.troca-de-filtros-compressor-de-ar');});
$router->get('/blog/troca-de-oleo-compressor-de-ar', function () {return view('artigos.troca-de-oleo-compressor-de-ar');});
$router->get('/blog/retrofit-compressores-industriais', function () {return view('artigos.retrofit-compressores-industriais');});
$router->get('/blog/secador-refrigerado-vs-adsorcao', function () {return view('artigos.secador-refrigerado-vs-adsorcao');});
$router->get('/blog/secadores-de-ar-comprimido', function () {return view('artigos.secadores-de-ar-comprimido');});
$router->get('/blog/tipos-de-compressores', function () {return view('artigos.tipos-de-compressores');});
$router->get('/blog/unidade-frl-em-ar-comprimido', function () {return view('artigos.unidade-frl-em-ar-comprimido');});
$router->get('/blog/vazamentos-de-ar-comprimido', function () {return view('artigos.vazamentos-de-ar-comprimido');});
$router->get('/blog/vida-util-de-compressores', function () {return view('artigos.vida-util-de-compressores');});
$router->get('/blog/assistencia-tecnica-urgente-compressor', function () {return view('artigos.assistencia-tecnica-urgente-compressor');});
$router->get('/blog/orcamento-manutencao-compressor', function () {return view('artigos.orcamento-manutencao-compressor');});
$router->get('/blog/plano-de-manutencao-de-compressores', function () {return view('artigos.plano-de-manutencao-de-compressores');});
$router->get('/blog/filtro-de-ar-do-compressor-entupido', function () {return view('artigos.filtro-de-ar-do-compressor-entupido');});
$router->get('/blog/valvula-de-retencao-do-compressor-de-ar', function () {return view('artigos.valvula-de-retencao-do-compressor-de-ar');});
$router->get('/blog/correia-do-compressor-de-ar', function () {return view('artigos.correia-do-compressor-de-ar');});
$router->get('/blog/manutencao-compressores-guarulhos', function () {return view('artigos.manutencao-compressores-guarulhos');});
$router->get('/blog/assistencia-tecnica-compressor-guarulhos', function () {return view('artigos.assistencia-tecnica-compressor-guarulhos');});
$router->get('/blog/compressores-de-ar-cumbica-guarulhos', function () {return view('artigos.compressores-de-ar-cumbica-guarulhos');});
$router->get('/blog/vazamento-ar-comprimido-guarulhos', function () {return view('artigos.vazamento-ar-comprimido-guarulhos');});
$router->get('/blog/manutencao-preventiva-compressor-guarulhos', function () {return view('artigos.manutencao-preventiva-compressor-guarulhos');});
$router->get('/blog/como-calcular-vazao-compressor-pcm', function () {return view('artigos.como-calcular-vazao-compressor-pcm');});
$router->get('/blog/compressor-parafuso-ou-pistao', function () {return view('artigos.compressor-parafuso-ou-pistao');});
$router->get('/blog/compressor-de-ar-para-pintura-industrial', function () {return view('artigos.compressor-de-ar-para-pintura-industrial');});
$router->get('/blog/compressor-para-ferramentas-pneumaticas', function () {return view('artigos.compressor-para-ferramentas-pneumaticas');});
$router->get('/blog/compressor-de-ar-industria-alimenticia', function () {return view('artigos.compressor-de-ar-industria-alimenticia');});

$router->get('/sitemap.xml', function () {
    $urls = [
        '/',
        '/sobre-nos',
        '/compressores-de-ar',
        '/compressores-de-ar-em-guarulhos',
        '/compressores-de-ar-em-guarulhos/centro',
        '/compressores-de-ar-em-guarulhos/cumbica',
        '/compressores-de-ar-em-guarulhos/bonsucesso',
        '/compressores-de-ar-em-guarulhos/ponte-grande',
        '/compressores-de-ar-em-guarulhos/vila-galvao',
        '/manutencao-de-compressores-em-guarulhos',
        '/assistencia-tecnica-de-compressores-em-guarulhos',
        '/pecas-para-compressores-em-guarulhos',
        '/redes-de-ar-comprimido-em-guarulhos',
        '/contato',
        '/blog',
        '/nossos-servicos',
        '/manutencao-preventiva',
        '/manutencao-corretiva',
        '/kits-de-servico',
        '/monitoramento-e-upgrade',
        '/contratos-de-servico',
        '/auditoria-e-inspecoes',
        '/redes-de-ar',
        '/blog/analise-de-demanda-de-ar-comprimido',
        '/blog/automacao-com-ar-comprimido',
        '/blog/assistencia-tecnica-compressores-de-ar',
        '/blog/auditoria-energetica-ar-comprimido',
        '/blog/agua-na-linha-de-ar-comprimido',
        '/blog/checklist-completo',
        '/blog/como-funciona-um-compressor',
        '/blog/como-identificar-vazamento-em-ar',
        '/blog/compressor-com-inversor',
        '/blog/compressor-de-parafuso-industrial',
        '/blog/compressor-de-ar-nao-liga',
        '/blog/compressor-consumindo-muito-oleo',
        '/blog/compressor-desarmando',
        '/blog/compressor-fazendo-barulho',
        '/blog/compressor-isento-de-oleo',
        '/blog/compressor-nao-atinge-pressao',
        '/blog/compressor-nao-desliga',
        '/blog/compressor-perde-pressao',
        '/blog/compressor-superaquecendo',
        '/blog/compressor-vazando-oleo',
        '/blog/contrato-manutencao-compressores',
        '/blog/custo-do-ar-comprimido',
        '/blog/custo-operacional',
        '/blog/deteccao-ultrassonica-de-vazamentos',
        '/blog/dimensionamento-de-compressores',
        '/blog/eficiencia-energetica-em-compressores',
        '/blog/eficiencia-energetica-industrial',
        '/blog/empresa-de-manutencao',
        '/blog/erros-na-instalacao-de-compressores',
        '/blog/falhas-comuns-e-como-evitar',
        '/blog/linha-de-ar-comprimido',
        '/blog/manutencao-de-secador-de-ar-comprimido',
        '/blog/manutencao-de-compressor-de-pistao',
        '/blog/manutencao-de-reservatorio-de-ar-comprimido',
        '/blog/manutencao-compressor-de-parafuso',
        '/blog/manutencao-multimarcas-de-compressores',
        '/blog/manutencao-preditiva-compressores',
        '/blog/manutencao-preventiva-compressores',
        '/blog/manutencao-preventiva-vs-corretiva',
        '/blog/monitoramento-remoto-de-compressores',
        '/blog/nr13-em-compressores',
        '/blog/pecas-para-compressores-de-ar',
        '/blog/pressostato-do-compressor-de-ar',
        '/blog/filtro-coalescente-em-ar-comprimido',
        '/blog/ponto-de-orvalho-em-ar-comprimido',
        '/blog/valvula-de-seguranca-do-compressor-de-ar',
        '/blog/dreno-automatico-compressor-de-ar',
        '/blog/separador-agua-oleo-em-ar-comprimido',
        '/blog/sequenciamento-de-compressores-de-ar',
        '/blog/perda-de-carga-na-rede-de-ar-comprimido',
        '/blog/pressao-ideal-em-compressores',
        '/blog/qualidade-do-ar-comprimido',
        '/blog/revisao-de-compressor-de-ar',
        '/blog/recuperacao-de-calor-em-compressores',
        '/blog/reservatorio-de-ar-comprimido',
        '/blog/sala-de-compressores-industrial',
        '/blog/tratamento-de-condensado-em-ar-comprimido',
        '/blog/troca-de-filtros-compressor-de-ar',
        '/blog/troca-de-oleo-compressor-de-ar',
        '/blog/retrofit-compressores-industriais',
        '/blog/secador-refrigerado-vs-adsorcao',
        '/blog/secadores-de-ar-comprimido',
        '/blog/tipos-de-compressores',
        '/blog/unidade-frl-em-ar-comprimido',
        '/blog/vazamentos-de-ar-comprimido',
        '/blog/vida-util-de-compressores',
        '/blog/assistencia-tecnica-urgente-compressor',
        '/blog/orcamento-manutencao-compressor',
        '/blog/plano-de-manutencao-de-compressores',
        '/blog/filtro-de-ar-do-compressor-entupido',
        '/blog/valvula-de-retencao-do-compressor-de-ar',
        '/blog/correia-do-compressor-de-ar',
        '/blog/manutencao-compressores-guarulhos',
        '/blog/assistencia-tecnica-compressor-guarulhos',
        '/blog/compressores-de-ar-cumbica-guarulhos',
        '/blog/vazamento-ar-comprimido-guarulhos',
        '/blog/manutencao-preventiva-compressor-guarulhos',
        '/blog/como-calcular-vazao-compressor-pcm',
        '/blog/compressor-parafuso-ou-pistao',
        '/blog/compressor-de-ar-para-pintura-industrial',
        '/blog/compressor-para-ferramentas-pneumaticas',
        '/blog/compressor-de-ar-industria-alimenticia',
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
