@php
$articleBaseUrl = rtrim((string) env('APP_URL', ''), '/');
if ($articleBaseUrl === '') {
    $articleBaseUrl = rtrim(URL('/'), '/');
}
@endphp
<div class="breadcrumb-area bg-default" data-background="{{ $articleBaseUrl }}/assets/img/hero/h2-bg-1-opt.jpg">
    <div class="container fx-container-1">
        <div class="breadcrumb-wrap"><div class="breadcrumb-content">
            <div class="breadcrumb-list"><a href="{{ $articleBaseUrl }}">Home</a><a href="{{ $articleBaseUrl }}/blog">Blog</a></div>
            <h1 class="breadcrumb-title fx-heading-1 text-uppercase">{{ $articleTitle }}</h1>
        </div></div>
    </div>
</div>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ $articleBaseUrl }}"},
    {"@type": "ListItem", "position": 2, "name": "Blog", "item": "{{ $articleBaseUrl }}/blog"},
    {"@type": "ListItem", "position": 3, "name": {!! json_encode($articleTitle, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}, "item": {!! json_encode($pageCanonical ?? $articleBaseUrl . '/' . trim(app('request')->getPathInfo(), '/'), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}}
  ]
}
</script>

<div class="fx-services-details-area pt-120 pb-120">
    <div class="container fx-container-1"><div class="fx-services-details-container"><article class="fx-services-details-content">
        <h2>{{ $articleHeadline }}</h2>
        @foreach ($articleIntro as $paragraph)
        <p>{!! $paragraph !!}</p>
        @endforeach

        <div class="row mb-55 align-items-center">
            <div class="col-lg-7">
                <h2>{{ $articleCalloutTitle }}</h2>
                <p>{{ $articleCalloutText }}</p>
                <ul>
                    @foreach ($articleCalloutItems as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-5"><div class="list-img fix img-cover">
                <img src="{{ $articleBaseUrl }}/assets/img/services/sd-img-1-opt.webp" alt="{{ $articleImageAlt }}">
            </div></div>
        </div>

        @foreach ($articleSections as $section)
        <section>
            <h2>{{ $section['title'] }}</h2>
            @foreach ($section['paragraphs'] as $paragraph)
            <p>{!! $paragraph !!}</p>
            @endforeach
            @if (!empty($section['items']))
            <ul>
                @foreach ($section['items'] as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
            @endif
        </section>
        @endforeach

        <section>
            <h2>Conteúdos relacionados para sua operação</h2>
            <p>{!! $articleRelatedText !!}</p>
        </section>
        @if(!empty($articleFaq))
        <section>
            <h2>Perguntas frequentes</h2>
            @foreach($articleFaq as $faq)
            <h3>{{ $faq['question'] }}</h3>
            <p>{{ $faq['answer'] }}</p>
            @endforeach
        </section>
        @endif
        <section>
            <h2>Solicite uma cotação de manutenção</h2>
            <p>A <strong>Manstec Compressores</strong> avalia a condição do equipamento e do sistema de ar comprimido para propor o atendimento adequado à sua operação.</p>
            <p><strong>Evite paradas inesperadas e reduza riscos operacionais.</strong> <a href="{{ $articleBaseUrl }}/contato">Fale com a equipe da Manstec e solicite uma cotação</a>.</p>
        </section>
    </article></div></div>
</div>
