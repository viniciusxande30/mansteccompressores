@php
$service = $localService;
$kw = $service['keywords'];
$metaTitle = $service['title'] . ' | Manstec';
$metaDescription = $service['description'];
$canonicalUrl = URL('/') . $service['path'];
$schemaType = 'Service';
@endphp
@include('includes.top')
<div class="breadcrumb-area bg-default" data-background="{{ URL('/') }}/assets/img/hero/h2-bg-1-opt.jpg"><div class="container fx-container-1"><div class="breadcrumb-wrap"><div class="breadcrumb-content">
<nav class="breadcrumb-list" aria-label="Trilha de navegação"><a href="{{ URL('/') }}">Home</a><a href="{{ URL('/') }}/compressores-de-ar-em-guarulhos">Compressores de Ar em Guarulhos</a><span>{{ $service['shortTitle'] }}</span></nav>
<h1 class="breadcrumb-title fx-heading-1 text-uppercase">{{ $service['title'] }}</h1>
</div></div></div></div>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","name":{!! json_encode($service['title'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!},"url":{!! json_encode($canonicalUrl, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!},"provider":{"@type":"ProfessionalService","name":"Manstec Compressores","url":"{{ URL('/') }}"},"areaServed":{"@type":"City","name":"Guarulhos","address":{"@type":"PostalAddress","addressRegion":"SP","addressCountry":"BR"}},"serviceType":{!! json_encode($service['serviceType'], JSON_UNESCAPED_UNICODE) !!}}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"{{ URL('/') }}"},{"@type":"ListItem","position":2,"name":"Compressores de Ar em Guarulhos","item":"{{ URL('/') }}/compressores-de-ar-em-guarulhos"},{"@type":"ListItem","position":3,"name":{!! json_encode($service['shortTitle'], JSON_UNESCAPED_UNICODE) !!},"item":{!! json_encode($canonicalUrl, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}}]}</script>
<section class="fx-services-details-area pt-120 pb-120"><div class="container fx-container-1"><div class="fx-services-details-container"><article class="fx-services-details-content">
<h2>{{ $service['heading'] }}</h2>
@foreach($service['intro'] as $paragraph)<p>{{ $paragraph }}</p>@endforeach
<div class="row mb-55 align-items-center"><div class="col-lg-7"><h2>O que avaliamos</h2><p>{{ $service['assessmentText'] }}</p><ul>@foreach($service['items'] as $item)<li>{{ $item }}</li>@endforeach</ul></div><div class="col-lg-5"><div class="list-img fix img-cover"><img src="{{ URL('/') }}/assets/img/services/sd-img-1-opt.webp" alt="{{ $service['title'] }}"></div></div></div>
<section><h2>Atendimento em Guarulhos com escopo técnico</h2><p>O atendimento é definido conforme o modelo do equipamento, sintomas relatados, condições de operação e criticidade da produção. Essa análise ajuda a direcionar a intervenção e a cotação de forma objetiva.</p></section>
<section><h2>Conteúdos relacionados</h2><p>{!! $service['related'] !!}</p></section>
<section><h2>Solicite uma cotação</h2><p>Informe marca, modelo, horas de operação e a necessidade da sua empresa. <a href="{{ URL('/') }}/contato"><strong>Fale com a Manstec para atendimento em Guarulhos.</strong></a></p></section>
</article></div></div></section>
@include('includes.footer')
