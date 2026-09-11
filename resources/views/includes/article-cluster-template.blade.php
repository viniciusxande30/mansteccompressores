<div class="breadcrumb-area bg-default" data-background="{{ URL('/') }}/assets/img/hero/h2-bg-1-opt.jpg">
    <div class="container fx-container-1">
        <div class="breadcrumb-wrap"><div class="breadcrumb-content">
            <div class="breadcrumb-list"><a href="{{ URL('/') }}">Home</a><a href="{{ URL('/') }}/blog">Blog</a></div>
            <h1 class="breadcrumb-title fx-heading-1 text-uppercase">{{ $articleTitle }}</h1>
        </div></div>
    </div>
</div>

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
                <img src="{{ URL('/') }}/assets/img/services/sd-img-1-opt.webp" alt="{{ $articleImageAlt }}">
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
        <section>
            <h2>Solicite uma cotação de manutenção</h2>
            <p>A <strong>Manstec Compressores</strong> avalia a condição do equipamento e do sistema de ar comprimido para propor o atendimento adequado à sua operação.</p>
            <p><strong>Evite paradas inesperadas e reduza riscos operacionais.</strong> <a href="{{ URL('/') }}/contato">Fale com a equipe da Manstec e solicite uma cotação</a>.</p>
        </section>
    </article></div></div>
</div>
