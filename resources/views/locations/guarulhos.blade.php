@php
$isNeighborhood = !empty($area);
$placeName = $isNeighborhood ? $area['name'] . ', Guarulhos' : 'Guarulhos';
$pagePath = $isNeighborhood ? '/compressores-de-ar-em-guarulhos/' . $area['slug'] : '/compressores-de-ar-em-guarulhos';
$kw = $isNeighborhood
    ? "compressores de ar em {$placeName}, manutenção de compressor {$area['name']}, assistência técnica compressor Guarulhos"
    : 'compressores de ar em Guarulhos, manutenção de compressores Guarulhos, assistência técnica compressor de ar Guarulhos';
$metaTitle = "Compressores de Ar em {$placeName} | Manstec";
$metaDescription = "Manutenção, assistência técnica, peças e diagnóstico para compressores de ar em {$placeName}. Solicite uma cotação com a Manstec.";
$canonicalUrl = URL('/') . $pagePath;
$schemaType = 'Service';
$areas = [
    ['slug' => 'centro', 'name' => 'Centro'],
    ['slug' => 'cumbica', 'name' => 'Cumbica'],
    ['slug' => 'bonsucesso', 'name' => 'Bonsucesso'],
    ['slug' => 'ponte-grande', 'name' => 'Ponte Grande'],
    ['slug' => 'vila-galvao', 'name' => 'Vila Galvão'],
];
@endphp
@include('includes.top')

<div class="breadcrumb-area bg-default" data-background="{{ URL('/') }}/assets/img/hero/h2-bg-1-opt.jpg">
    <div class="container fx-container-1"><div class="breadcrumb-wrap"><div class="breadcrumb-content">
        <nav class="breadcrumb-list" aria-label="Trilha de navegação">
            <a href="{{ URL('/') }}">Home</a>
            <a href="{{ URL('/') }}/compressores-de-ar">Áreas atendidas</a>
            @if($isNeighborhood)<a href="{{ URL('/') }}/compressores-de-ar-em-guarulhos">Guarulhos</a>@endif
            <span>{{ $placeName }}</span>
        </nav>
        <h1 class="breadcrumb-title fx-heading-1 text-uppercase">Compressores de Ar em {{ $placeName }}</h1>
    </div></div></div>
</div>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": {!! json_encode('Manutenção de Compressores de Ar em ' . $placeName, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!},
  "url": {!! json_encode($canonicalUrl, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!},
  "provider": {"@type": "ProfessionalService", "name": "Manstec Compressores", "url": "{{ URL('/') }}"},
  "areaServed": {"@type": "City", "name": "Guarulhos", "address": {"@type": "PostalAddress", "addressRegion": "SP", "addressCountry": "BR"}},
  "serviceType": ["Manutenção de compressores", "Assistência técnica de compressores de ar", "Redes de ar comprimido"]
}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
 {"@type":"ListItem","position":1,"name":"Home","item":"{{ URL('/') }}"},
 {"@type":"ListItem","position":2,"name":"Compressores de Ar em Guarulhos","item":"{{ URL('/') }}/compressores-de-ar-em-guarulhos"}@if($isNeighborhood),
 {"@type":"ListItem","position":3,"name":{!! json_encode($area['name'], JSON_UNESCAPED_UNICODE) !!},"item":{!! json_encode($canonicalUrl, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}}@endif
]}
</script>

<section class="fx-services-details-area pt-120 pb-80">
    <div class="container fx-container-1"><div class="fx-services-details-container"><article class="fx-services-details-content">
        <h2>Atendimento técnico para compressores de ar em {{ $placeName }}</h2>
        <p>A Manstec atende operações industriais em {{ $placeName }} com <strong>manutenção preventiva e corretiva de compressores de ar</strong>, diagnóstico de falhas, revisão, fornecimento de peças e melhorias em sistemas de ar comprimido.</p>
        <p>O atendimento é planejado conforme o modelo do equipamento, a criticidade da produção e os sintomas relatados. Assim, a empresa recebe uma recomendação técnica adequada, sem promessas genéricas ou intervenções desnecessárias.</p>

        <div class="row mb-55 align-items-center">
            <div class="col-lg-7">
                <h2>Quando solicitar assistência técnica?</h2>
                <p>Queda de pressão, ruído anormal, aquecimento, vazamento de óleo, consumo elevado e paradas frequentes são sinais de que o compressor precisa ser avaliado.</p>
                <ul>
                    <li>Manutenção preventiva programada</li>
                    <li>Atendimento corretivo e diagnóstico de falhas</li>
                    <li>Revisão de compressores de parafuso e pistão</li>
                    <li>Troca de filtros, óleo, correias e componentes compatíveis</li>
                    <li>Análise de vazamentos e rede de ar comprimido</li>
                </ul>
            </div>
            <div class="col-lg-5"><div class="list-img fix img-cover"><img src="{{ URL('/') }}/assets/img/services/sd-img-1-opt.webp" alt="Manutenção de compressor de ar em {{ $placeName }}"></div></div>
        </div>

        <section>
            <h2>Manutenção de compressores para a indústria de Guarulhos</h2>
            <p>Um compressor fora do ponto ideal pode reduzir a vazão disponível, elevar o gasto de energia e comprometer ferramentas, máquinas e processos que dependem de ar comprimido. A manutenção técnica identifica a causa do problema e orienta a melhor ação para recuperar a confiabilidade do sistema.</p>
            <p>Além do compressor, a avaliação pode considerar reservatório, secador, filtros, drenos, pressostato e linha de distribuição. Essa visão de conjunto reduz recorrências e torna a cotação mais precisa.</p>
        </section>

        <section>
            <h2>Bairros atendidos em Guarulhos</h2>
            <p>Atendemos empresas em diferentes regiões do município. Consulte conteúdos específicos para cada área:</p>
            <ul>
                @foreach($areas as $localArea)
                <li><a href="{{ URL('/') }}/compressores-de-ar-em-guarulhos/{{ $localArea['slug'] }}">Compressores de ar em {{ $localArea['name'] }}, Guarulhos</a></li>
                @endforeach
            </ul>
        </section>

        <section>
            <h2>Conteúdos para manter seu sistema disponível</h2>
            <p>Veja como montar um <a href="{{ URL('/') }}/blog/plano-de-manutencao-de-compressores">plano de manutenção de compressores</a>, saiba o que fazer quando o <a href="{{ URL('/') }}/blog/compressor-nao-atinge-pressao">compressor não atinge pressão</a> e confira como identificar <a href="{{ URL('/') }}/blog/vazamentos-de-ar-comprimido">vazamentos de ar comprimido</a>.</p>
        </section>

        <section>
            <h2>Solicite uma cotação em Guarulhos</h2>
            <p>Informe o modelo do compressor, os sintomas e a urgência da sua operação. A equipe da Manstec retorna com a orientação inicial e o escopo de atendimento mais adequado.</p>
            <p><a href="{{ URL('/') }}/contato"><strong>Solicite uma cotação de manutenção de compressor em Guarulhos.</strong></a></p>
        </section>
    </article></div></div>
</section>
@include('includes.footer')
