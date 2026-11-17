@php
$locationBaseUrl = rtrim((string) env('APP_URL', ''), '/');
if ($locationBaseUrl === '') {
    $locationBaseUrl = rtrim(URL('/'), '/');
}

$kw = 'compressores de ar no Alto Tietê, manutenção de compressores Alto Tietê, assistência técnica compressor Mogi das Cruzes, Suzano, Itaquaquecetuba, Arujá';
$metaTitle = 'Compressores de Ar no Alto Tietê | Manstec';
$metaDescription = 'Manutenção, assistência técnica, peças e redes de ar comprimido no Alto Tietê. Atendimento para Guarulhos, Mogi das Cruzes, Suzano, Itaquaquecetuba e região.';
$canonicalUrl = $locationBaseUrl . '/compressores-de-ar-no-alto-tiete';
$schemaType = 'Service';
$cities = $altoTieteCities;
$regionEntity = ['@type' => 'Place', 'name' => 'Alto Tietê, São Paulo, Brasil'];
$articleLinks = [
    ['url' => '/blog/manutencao-de-compressores-no-alto-tiete', 'label' => 'Manutenção de compressores no Alto Tietê'],
    ['url' => '/blog/assistencia-tecnica-compressor-mogi-das-cruzes', 'label' => 'Assistência técnica de compressor em Mogi das Cruzes'],
    ['url' => '/blog/compressor-de-ar-em-suzano', 'label' => 'Compressor de ar em Suzano'],
    ['url' => '/blog/manutencao-preventiva-compressor-itaquaquecetuba', 'label' => 'Manutenção preventiva em Itaquaquecetuba'],
    ['url' => '/blog/vazamentos-de-ar-comprimido-no-alto-tiete', 'label' => 'Vazamentos de ar comprimido no Alto Tietê'],
];
@endphp
@include('includes.top')

<div class="breadcrumb-area bg-default" data-background="{{ $locationBaseUrl }}/assets/img/hero/h2-bg-1-opt.jpg">
    <div class="container fx-container-1"><div class="breadcrumb-wrap"><div class="breadcrumb-content">
        <nav class="breadcrumb-list" aria-label="Trilha de navegação"><a href="{{ $locationBaseUrl }}">Home</a><a href="{{ $locationBaseUrl }}/compressores-de-ar">Áreas atendidas</a><span>Alto Tietê</span></nav>
        <h1 class="breadcrumb-title fx-heading-1 text-uppercase">Compressores de Ar no Alto Tietê</h1>
    </div></div></div>
</div>

<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Service","name":"Compressores de Ar no Alto Tietê","url":"{{ $canonicalUrl }}","provider":{"@id":"{{ $locationBaseUrl }}/#manstec"},"areaServed":{!! json_encode(array_map(function ($city) { return ['@type' => 'City', 'name' => $city['name'], 'address' => ['@type' => 'PostalAddress', 'addressRegion' => 'SP', 'addressCountry' => 'BR']]; }, $cities), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!},"serviceType":["Manutenção de compressores de ar","Assistência técnica de compressores","Redes de ar comprimido"]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
{"@type":"Question","name":"A Manstec atende compressores de ar no Alto Tietê?","acceptedAnswer":{"@type":"Answer","text":"A Manstec atende empresas do Alto Tietê com manutenção, assistência técnica, peças e avaliação de sistemas de ar comprimido, conforme a necessidade da operação."}},
{"@type":"Question","name":"Quais cidades do Alto Tietê estão na área de atendimento?","acceptedAnswer":{"@type":"Answer","text":"A página regional reúne atendimento para Arujá, Biritiba-Mirim, Ferraz de Vasconcelos, Guararema, Guarulhos, Itaquaquecetuba, Mogi das Cruzes, Poá, Salesópolis, Santa Isabel e Suzano."}},
{"@type":"Question","name":"Como solicitar uma cotação de compressor no Alto Tietê?","acceptedAnswer":{"@type":"Answer","text":"Informe marca, modelo, horas de operação, sintomas e urgência pelo contato da Manstec. Esses dados ajudam a direcionar a avaliação inicial."}}
]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"{{ $locationBaseUrl }}"},{"@type":"ListItem","position":2,"name":"Compressores de Ar no Alto Tietê","item":"{{ $canonicalUrl }}"}]}
</script>

<section class="fx-services-details-area pt-120 pb-80">
    <div class="container fx-container-1"><div class="fx-services-details-container"><article class="fx-services-details-content">
        <h2>Atendimento técnico para compressores de ar no Alto Tietê</h2>
        <p>A Manstec atende empresas do <strong>Alto Tietê</strong> que precisam manter compressores, redes de ar comprimido e equipamentos de tratamento de ar disponíveis para a operação. O atendimento pode abranger manutenção preventiva, diagnóstico corretivo, revisão, peças e análise de perdas no sistema.</p>
        <p>O escopo é definido a partir do equipamento, das horas de trabalho, dos sintomas percebidos e da criticidade da produção. Essa avaliação evita intervenções genéricas e ajuda a orientar uma cotação mais precisa.</p>

        <div class="row mb-55 align-items-center">
            <div class="col-lg-7">
                <h2>Serviços para sistemas de ar comprimido</h2>
                <p>O compressor deve ser analisado junto com os componentes que influenciam pressão, vazão e qualidade do ar.</p>
                <ul>
                    <li><a href="{{ $locationBaseUrl }}/manutencao-de-compressores-no-alto-tiete">Manutenção de compressores no Alto Tietê</a></li>
                    <li><a href="{{ $locationBaseUrl }}/assistencia-tecnica-de-compressores-no-alto-tiete">Assistência técnica de compressores no Alto Tietê</a></li>
                    <li><a href="{{ $locationBaseUrl }}/redes-de-ar-comprimido-no-alto-tiete">Redes de ar comprimido no Alto Tietê</a></li>
                    <li>Revisão de filtros, óleo, válvulas, transmissão e componentes compatíveis</li>
                    <li>Análise de vazamentos, perda de pressão e tratamento de ar</li>
                </ul>
            </div>
            <div class="col-lg-5"><div class="list-img fix img-cover"><img src="{{ $locationBaseUrl }}/assets/img/services/sd-img-1-opt.webp" alt="Atendimento de compressores de ar no Alto Tietê"></div></div>
        </div>

        <section>
            <h2>Cidades atendidas no Alto Tietê</h2>
            <p>Escolha a cidade para ver como organizar a solicitação de atendimento. A página de Guarulhos possui um hub próprio com bairros atendidos.</p>
            <div class="row g-4">
                @foreach($cities as $city)
                <div class="col-md-6">
                    <section id="{{ $city['slug'] }}" class="h-100 p-4" style="background:#f3f7fc; border:1px solid #d8e3f1; border-radius:12px;">
                        <h3 class="fx-heading-1 fx-font-600" style="font-size:24px;">Compressores de ar em {{ $city['name'] }}</h3>
                        <p class="mb-2">{{ $city['summary'] }}</p>
                        @if(!empty($city['url']))
                        <a href="{{ $locationBaseUrl . $city['url'] }}"><strong>Ver atendimento em {{ $city['name'] }}</strong></a>
                        @else
                        <a href="{{ $locationBaseUrl }}/contato"><strong>Solicitar avaliação para {{ $city['name'] }}</strong></a>
                        @endif
                    </section>
                </div>
                @endforeach
            </div>
        </section>

        <section>
            <h2>Conteúdos técnicos para empresas do Alto Tietê</h2>
            <p>Estes guias aprofundam situações comuns em sistemas de ar comprimido e ajudam a preparar uma solicitação técnica.</p>
            <ul>
                @foreach($articleLinks as $articleLink)
                <li><a href="{{ $locationBaseUrl . $articleLink['url'] }}">{{ $articleLink['label'] }}</a></li>
                @endforeach
            </ul>
        </section>

        <section>
            <h2>Como solicitar uma cotação regional</h2>
            <p>Informe marca, modelo, horas de operação, sintomas, alarmes, fotos do painel quando possível e a urgência da operação. Se o problema envolver perda de pressão ou qualidade do ar, descreva também os pontos de uso afetados.</p>
            <p><a href="{{ $locationBaseUrl }}/contato"><strong>Fale com a Manstec e solicite uma cotação no Alto Tietê.</strong></a></p>
        </section>
    </article></div></div>
</section>
@include('includes.footer')
