@php
$locationBaseUrl = rtrim((string) env('APP_URL', ''), '/');
if ($locationBaseUrl === '') {
    $locationBaseUrl = rtrim(URL('/'), '/');
}
$service = $regionalService;
$kw = $service['keywords'];
$metaTitle = $service['title'] . ' | Manstec';
$metaDescription = $service['description'];
$canonicalUrl = $locationBaseUrl . $service['path'];
$schemaType = 'Service';
@endphp
@include('includes.top')

<div class="breadcrumb-area bg-default" data-background="{{ $locationBaseUrl }}/assets/img/hero/h2-bg-1-opt.jpg"><div class="container fx-container-1"><div class="breadcrumb-wrap"><div class="breadcrumb-content">
<nav class="breadcrumb-list" aria-label="Trilha de navegação"><a href="{{ $locationBaseUrl }}">Home</a><a href="{{ $locationBaseUrl }}/compressores-de-ar-no-alto-tiete">Alto Tietê</a><span>{{ $service['shortTitle'] }}</span></nav>
<h1 class="breadcrumb-title fx-heading-1 text-uppercase">{{ $service['title'] }}</h1>
</div></div></div></div>

<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","name":{!! json_encode($service['title'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!},"url":{!! json_encode($canonicalUrl, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!},"provider":{"@id":"{{ $locationBaseUrl }}/#manstec"},"areaServed":{"@type":"Place","name":"Alto Tietê, São Paulo, Brasil"},"serviceType":{!! json_encode($service['serviceType'], JSON_UNESCAPED_UNICODE) !!}}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"{{ $locationBaseUrl }}"},{"@type":"ListItem","position":2,"name":"Compressores de Ar no Alto Tietê","item":"{{ $locationBaseUrl }}/compressores-de-ar-no-alto-tiete"},{"@type":"ListItem","position":3,"name":{!! json_encode($service['shortTitle'], JSON_UNESCAPED_UNICODE) !!},"item":{!! json_encode($canonicalUrl, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}}]}</script>

<section class="fx-services-details-area pt-120 pb-120"><div class="container fx-container-1"><div class="fx-services-details-container"><article class="fx-services-details-content">
<h2>{{ $service['heading'] }}</h2>
@foreach($service['intro'] as $paragraph)<p>{{ $paragraph }}</p>@endforeach
<div class="row mb-55 align-items-center"><div class="col-lg-7"><h2>O que avaliamos</h2><p>{{ $service['assessmentText'] }}</p><ul>@foreach($service['items'] as $item)<li>{{ $item }}</li>@endforeach</ul></div><div class="col-lg-5"><div class="list-img fix img-cover"><img src="{{ $locationBaseUrl }}/assets/img/services/sd-img-1-opt.webp" alt="{{ $service['title'] }}"></div></div></div>
<section><h2>Atendimento técnico no Alto Tietê</h2><p>O atendimento é organizado conforme o tipo de compressor, os sintomas relatados, as condições de operação e a criticidade da parada. Informações como modelo, horas de trabalho, alarmes e fotos do painel ajudam a tornar a avaliação inicial mais eficiente.</p></section>
<section><h2>Cidades da região</h2><p>A página regional reúne atendimento para Arujá, Biritiba-Mirim, Ferraz de Vasconcelos, Guararema, Guarulhos, Itaquaquecetuba, Mogi das Cruzes, Poá, Salesópolis, Santa Isabel e Suzano. <a href="{{ $locationBaseUrl }}/compressores-de-ar-no-alto-tiete"><strong>Veja a cobertura no Alto Tietê.</strong></a></p></section>
<section><h2>Conteúdos relacionados</h2><p>{!! $service['related'] !!}</p></section>
<section><h2>Solicite uma cotação</h2><p>Informe a necessidade da sua empresa para direcionar a avaliação. <a href="{{ $locationBaseUrl }}/contato"><strong>Fale com a Manstec para atendimento no Alto Tietê.</strong></a></p></section>
</article></div></div></section>
@include('includes.footer')
