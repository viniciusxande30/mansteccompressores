<!Doctype html>
<html class="no-js" lang="pt-br">
    <head>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    (function () {
        var analyticsLoaded = false;

        var loadAnalytics = function () {
            if (analyticsLoaded) {
                return;
            }

            analyticsLoaded = true;

            var analyticsScript = document.createElement('script');
            analyticsScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-7WM4MWQR9N';
            analyticsScript.async = true;
            document.head.appendChild(analyticsScript);
            gtag('js', new Date());
            gtag('config', 'G-7WM4MWQR9N');
        };

        var scheduleAnalytics = function () {
            if ('requestIdleCallback' in window) {
                requestIdleCallback(loadAnalytics, { timeout: 3000 });
            } else {
                setTimeout(loadAnalytics, 1500);
            }
        };

        ['pointerdown', 'keydown', 'touchstart', 'scroll'].forEach(function (eventName) {
            window.addEventListener(eventName, scheduleAnalytics, { once: true, passive: true });
        });
    })();
    </script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @php
        $pageTitle = $metaTitle ?? ($title ?? (isset($kw) ? $kw : 'Manstec - Compressores de Ar'));
        $pageDescription = $metaDescription ?? (isset($kw)
            ? 'Solucoes tecnicas da Manstec para compressores de ar, ar comprimido industrial, manutencao, eficiencia energetica e reducao de paradas.'
            : 'Solucoes completas em manutencao de compressores de ar, redes de ar comprimido, eficiencia energetica e suporte tecnico industrial.');
        $pageKeywords = $metaKeywords ?? ($kw ?? 'manutencao de compressores de ar, compressores industriais, ar comprimido industrial, Manstec');
        $requestPath = trim(app('request')->getPathInfo(), '/');
        $isHomePage = $requestPath === '';
        $pageCanonical = $canonicalUrl ?? rtrim(URL('/'), '/') . ($requestPath ? '/' . $requestPath : '');
        $pageImage = $metaImage ?? URL('/') . '/assets/img/manstec-opt.webp';
        $pageType = $schemaType ?? 'website';
        $baseAssetUrl = rtrim(URL('/'), '/');
        $preloadImages = $preloadImages ?? [];
        $fontPreloads = [
            '/assets/fonts/roboto-latin.woff2',
            '/assets/fonts/teko-latin.woff2',
        ];
        $inlineStyleFiles = [
            'assets/css/local-fonts.css',
            'assets/css/critical.css',
        ];

        if ($isHomePage) {
            $inlineStyleFiles[] = 'assets/css/icons.css';
        }

        $inlineStyles = '';
        foreach ($inlineStyleFiles as $inlineStyleFile) {
            $inlineStylePath = base_path('public/' . ltrim($inlineStyleFile, '/'));
            if (is_file($inlineStylePath)) {
                $inlineStyles .= file_get_contents($inlineStylePath) . PHP_EOL;
            }
        }

        $deferredStyles = [
            '/assets/css/bootstrap.min.css',
            '/assets/css/swiper.min.css',
            '/assets/css/main.min.css',
            '/assets/css/animate.css',
            '/assets/css/magnific-popup.css',
            '/assets/css/nice-select.css',
            '/assets/css/custom_style.css',
            '/assets/css/style.css',
        ];

        if (!$isHomePage) {
            array_unshift($deferredStyles, '/assets/css/all.min.css');
        }
    @endphp
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="keywords" content="{{ $pageKeywords }}">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="{{ $pageCanonical }}">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="{{ $pageType === 'Article' ? 'article' : 'website' }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta property="og:url" content="{{ $pageCanonical }}">
    <meta property="og:site_name" content="Manstec Compressores">
    <meta property="og:image" content="{{ $pageImage }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDescription }}">
    <meta name="twitter:image" content="{{ $pageImage }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL('/') }}/assets/img/favicon-32.png">

    @foreach ($fontPreloads as $fontPreload)
    <link rel="preload" as="font" href="{{ $baseAssetUrl . $fontPreload }}" type="font/woff2" crossorigin>
    @endforeach

    @foreach ($preloadImages as $preloadImage)
    <link rel="preload" as="image" href="{{ $preloadImage['href'] }}"@if(!empty($preloadImage['fetchpriority'])) fetchpriority="{{ $preloadImage['fetchpriority'] }}"@endif>
    @endforeach

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "@id": "{{ URL('/') }}/#manstec",
      "name": "Manstec Compressores",
      "url": "{{ URL('/') }}",
      "image": "{{ $pageImage }}",
      "email": "comercial@mansteccompressores.com.br",
      "telephone": ["+351969558556", "+5511959781897", "+551146478222"],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Rua Arapiraca, 311 - Jardim Napoli",
        "addressLocality": "Itaquaquecetuba",
        "addressRegion": "SP",
        "postalCode": "08595-620",
        "addressCountry": "BR"
      },
      "areaServed": "Brasil",
      "sameAs": ["https://www.instagram.com/manstec_compressores/"],
      "description": "Manutencao de compressores de ar, redes de ar comprimido, auditoria tecnica, eficiencia energetica e suporte industrial."
    }
    </script>

    @if(($schemaType ?? '') === 'Article')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": {!! json_encode($pageTitle, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!},
      "description": {!! json_encode($pageDescription, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!},
      "image": {!! json_encode($pageImage, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!},
      "author": {
        "@type": "Organization",
        "name": "Manstec Compressores"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Manstec Compressores",
        "logo": {
          "@type": "ImageObject",
          "url": "{{ $pageImage }}"
        }
      },
      "datePublished": {!! json_encode($datePublished ?? '2026-06-09') !!},
      "dateModified": {!! json_encode($dateModified ?? '2026-06-09') !!},
      "mainEntityOfPage": {!! json_encode($pageCanonical, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    }
    </script>
    @endif

    @if ($inlineStyles !== '')
    <style>{!! $inlineStyles !!}</style>
    @endif

    @foreach ($deferredStyles as $deferredStyle)
    <link rel="preload" as="style" href="{{ $baseAssetUrl . $deferredStyle }}" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ $baseAssetUrl . $deferredStyle }}"></noscript>
    @endforeach
</head>

    <body class="{{ $bodyClass ?? 'fd-home-1' }}">

        <div id="cotacao-modal" class="cotacao-modal-bg" style="display: none;">
            <div class="cotacao-modal">
                <div class="cotacao-modal-header">
                    <span><i class="fa-solid fa-truck"></i> Cotação de Frete via WhatsApp</span>
                    <span class="cotacao-modal-close" onclick="closeCotacaoModal()">×</span>
                </div>
                <div class="cotacao-modal-body">
                    <div class="cotacao-modal-info">
                        <i class="fa-solid fa-circle-info"></i>
                        Envie sua cotação via WhatsApp e nossos especialistas entrarão em contato com você.
                    </div>
                    <form id="cotacao-form" autocomplete="off">
                        <div class="cotacao-modal-row">
                            <input type="text" name="origin" id="modal-origin" placeholder="Origem" required>
                            <input type="text" name="destination" id="modal-destination" placeholder="Destino" required>
                        </div>
                        <div class="cotacao-modal-row">
                            <input type="text" name="name" id="modal-name" placeholder="Nome" required>
                            <input type="tel" name="whatsapp" id="modal-whatsapp" placeholder="WhatsApp" required>
                        </div>
                        <div class="cotacao-modal-row">
                            <textarea name="message" id="modal-message" rows="2" placeholder="Descrição"></textarea>
                        </div>
                        <button type="submit" class="cotacao-modal-btn">
                            <i class="fa-brands fa-whatsapp"></i> Enviar via WhatsApp
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="phone-call cbh-phone cbh-green cbh-show cbh-static" id="clbh_phone_div" style="">
            <a id="WhatsApp-button" href="https://wa.me/351969558556?text=Ol%C3%A1,%20gostaria%20de%20falar%20com%20voc%C3%AA!" target="_blank" rel="noopener" class="phoneJs" aria-label="Falar com a Manstec no WhatsApp">
                <span class="visually-hidden">Falar com a Manstec no WhatsApp</span>
                <div class="cbh-ph-circle"></div>
                <div class="cbh-ph-circle-fill"></div>
                <div class="cbh-ph-img-circle1"></div>
            </a>
        </div>

@include('includes.emergency-popup')

        <div class="fx-header-2-area">
            <div class="fx-header-2-container">
                <div class="fx-header-2-wrap">
                    <div class="fx-header-2-logo-box">
                        <a href="{{ url('/') }}" aria-label="Manstec Compressores" class="fx-header-2-main-logo">
                            <img src="{{ url('/') }}/assets/img/manstec-opt.webp" alt="Manstec Compressores de Ar" width="150" height="150" decoding="async" fetchpriority="high" style="width:150px;height:auto;">
                        </a>
                    </div>

                    <div class="fx-header-2-right">
                        <div class="fx-header-2-top">
                            <ul class="fx-contact-list">
                                <li>
                                    <a href="mailto:comercial@mansteccompressores.com.br" aria-label="Enviar e-mail para a Manstec">
                                        <i class="fa-regular fa-envelope"></i>
                                        comercial@mansteccompressores.com.br
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/5511959781897?text=Ol%C3%A1,%20gostaria%20de%20falar%20com%20voc%C3%AA!" aria-label="Falar com a equipe comercial da Manstec no WhatsApp" target="_blank" rel="noopener">
                                        <i class="fa-regular fa-phone-volume"></i>
                                        +55 (11) 95978-1897
                                    </a>
                                </li>
                            </ul>
                            <div class="fx-social-icon">
                                <a href="https://www.instagram.com/manstec_compressores/" class="fx-social-icon-btn" aria-label="Instagram da Manstec" target="_blank" rel="noopener">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>

                        <div class="fx-header-2-main">
                            <nav class="main-navigation has-header-2 d-none d-lg-block" aria-label="Menu principal">
                                <ul id="main-nav" class="nav navbar-nav clearfix">
                                    <li>
                                        <a class="is-active" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/') }}/sobre-nos">Sobre Nós</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/') }}/compressores-de-ar">Área de Atuação</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ url('/') }}/#nossos-servicos">Nossos Serviços</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li><a href="{{ url('/') }}/manutencao-preventiva">Manutenção Preventiva</a></li>
                                            <li><a href="{{ url('/') }}/manutencao-corretiva">Manutenção Corretiva e Diagnósticos</a></li>
                                            <li><a href="{{ url('/') }}/kits-de-servico">Kits de Serviço e Peças Originais</a></li>
                                            <li><a href="{{ url('/') }}/contratos-de-servico">Contratos de Serviço Fixo</a></li>
                                            <li><a href="{{ url('/') }}/auditoria-e-inspecoes">Auditorias e Inspeções</a></li>
                                            <li><a href="{{ url('/') }}/monitoramento-e-upgrade">Monitoramento e Upgrade</a></li>
                                            <li><a href="{{ url('/') }}/redes-de-ar">Projetos e Manutenção em Redes de Ar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('/') }}">Projetos</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/') }}/blog">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/') }}/contato">Contato</a>
                                    </li>
                                </ul>
                            </nav>

                            <div class="fx-header-2-action-link d-flex align-items-center justify-content-end">
                                <a href="{{ url('/') }}/contato" aria-label="Solicitar cotação com a Manstec" class="fx-pr-btn-1 has-hover-border">
                                    <span class="text" data-back="Solicite sua Cotação" data-front="Solicite sua Cotação"></span>
                                </a>

                                <button type="button" aria-label="Abrir menu" class="fx-menu-btn-1 offcanvas_toggle">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main id="main-content">
