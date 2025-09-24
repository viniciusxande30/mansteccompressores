<!Doctype html>
<html class="no-js" lang="pt-br">
    
    <head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7WM4MWQR9N"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-7WM4MWQR9N');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    {{-- Se existir a variável $kw, monta o título dinâmico --}}
    <title>
        @isset($kw) {{ $kw }} @else Manstec - Compressores de Ar @endisset
    </title>

    {{-- Description dinâmica com fallback --}}
    <meta name="description" content="@isset($kw) Conheça nossos serviços especializados, trabalhamos com {{ $kw }}. @else Soluções completas em manutenção de compressores de ar. @endisset">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL('/') }}/assets/img/manstec.png">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL('/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL('/') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ URL('/') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ URL('/') }}/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{ URL('/') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ URL('/') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ URL('/') }}/assets/css/main.css">
    <link rel="stylesheet" href="{{ URL('/') }}/assets/css/custom_style.css">
    <link rel="stylesheet" href="{{ URL('/') }}/assets/css/style.css">
</head>



     
    <body class="fd-home-1" >

        <div id="cotacao-modal" class="cotacao-modal-bg" style="display: none;">
  <div class="cotacao-modal">
    <div class="cotacao-modal-header">
      <span><i class="fa-solid fa-truck"></i> Cotação de Frete Via WhatsApp</span>
      <span class="cotacao-modal-close" onclick="closeCotacaoModal()">×</span>
    </div>
    <div class="cotacao-modal-body">
      <div class="cotacao-modal-info">
        <i class="fa-solid fa-circle-info"></i>
        Envie sua cotação via WhatsApp e nossos especialistas entrarão em contato com você.
      </div>
      <form id="cotacao-form" autocomplete="off">
        <div class="cotacao-modal-row">
          <input type="text" name="origin" id="modal-origin" placeholder="Origem" required="">
          <input type="text" name="destination" id="modal-destination" placeholder="Destino" required="">
        </div>
        <div class="cotacao-modal-row">
          <input type="text" name="name" id="modal-name" placeholder="Nome" required="">
          <input type="tel" name="whatsapp" id="modal-whatsapp" placeholder="WhatsApp" required="">
        </div>
        <div class="cotacao-modal-row">
          <textarea name="message" id="modal-message" rows="2" placeholder="Descrição" data-listener-added_6c001595="true"></textarea>
        <span id="monica-writing-entry-btn-root" style="position: absolute; left: 0px; top: 0px; pointer-events: none;"></span></div>
        <button type="submit" class="cotacao-modal-btn">
          <i class="fa-brands fa-whatsapp"></i> Enviar via WhatsApp
        </button>
      </form>
    </div>
  </div>
</div>

<div class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" style=""><a id="WhatsApp-button" href="https://wa.me/351969558556?text=Olá,%20gostaria%20de%20falar%20com%20você!" target="_blank" class="phoneJs" title=""><div class="cbh-ph-circle"></div><div class="cbh-ph-circle-fill"></div><div class="cbh-ph-img-circle1"></div></a></div>


        <!-- header-start -->
        <div class="fx-header-2-area ">
            <div class="fx-header-2-container">
                <div class="fx-header-2-wrap">

                    <!-- logo -->
                    <div class="fx-header-2-logo-box">
                        <a href="{{url('/')}}" aria-label="name" class="fx-header-2-main-logo">
                            <img src="{{ url('/') }}/assets/img/manstec.png" alt=""  style="width:150px">
                        </a>
                    </div>

                    <div class="fx-header-2-right">
                        <!-- header-top -->
                        <div class="fx-header-2-top" >
                            <ul class="fx-contact-list">
                                <li>
                                    <a href="mailto:comercial@mansteccompressores.com.br" aria-label="name">
                                        <i class="fa-regular fa-envelope"></i>
                                        comercial@mansteccompressores.com.br
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/5511959781897?text=Olá,%20gostaria%20de%20falar%20com%20você!" aria-label="name" TARGET="_blank">
                                        <i class="fa-regular fa-phone-volume"></i> 
                                        +55 (11) 95978-1897
                                    </a>
                                </li>
                               
                            </ul>
                            <div class="fx-social-icon">
								 <a href="https://www.instagram.com/manstec_compressores/" class="fx-social-icon-btn" aria-label="name" target="_BLANK">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#" class="fx-social-icon-btn" aria-label="name">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="fx-social-icon-btn" aria-label="name">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                               
                            </div>
                        </div>

                        <!-- header-main -->
                        <div class="fx-header-2-main">
                            <!-- menu -->
                            <nav class="main-navigation has-header-2 d-none d-lg-block ">
                                <ul id="main-nav" class="nav navbar-nav clearfix">

                                    <li>
                                        <a class="is-active" href="{{url('/')}}">Home</a>
                                        
                                    </li>
        
                                    <li>
                                        <a href="{{url('/')}}/sobre-nos">Sobre Nós</a>
                                    </li>
									<li>
                                        <a href="{{URL('/')}}/compressores-de-ar">Área de Atuação</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{URL('/')}}/#nossos-servicos">Nossos Serviços</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li>
                                                <a href="manutencao-preventiva">Manutenção Preventiva</a>
                                            </li>
                                            <li>
                                                <a href="manutencao-corretiva">Manutenção Corretiva e Diagnósticos</a>
                                            </li>
                                            <li>
                                                <a href="kits-de-servico">Kits de Serviço e Peças Originais</a>
                                            </li>
                                            <li>
                                                <a href="contratos-de-servico">Contratos de Serviço Fixo</a>
                                            </li>
                                            <li>
                                                <a href="auditoria-e-inspecoes">Auditorias e Inspeções</a>
                                            </li>
                                            <li>
                                                <a href="monitoramento-e-upgrade">Monitoramento e Upgrade</a>
                                            </li>
                                            <li>
                                                <a href="redes-de-ar">Projetos e Manutenção em Redes de Ar</a>
                                            </li>
                                        </ul>
                                    </li>
                                                                
        
                                    <li>
                                        <a href="{{url('/')}}">Projetos</a>
                                    </li>
        
                                    <!-- <li  class="dropdown">
                                        <a href="!#">Nosso Blog</a>
                                    </li> -->
        
                                    <li>
                                        <a href="{{url('/')}}/contato">Contato</a>
                                    </li>
        
                                </ul>
                            </nav>

                            <!-- action-btn -->
                            <div class="fx-header-2-action-link d-flex align-items-center justify-content-end">

                              
                                <!-- pr-btn -->
                                <a href="{{ URL('/') }}/contato" aria-label="name" class="fx-pr-btn-1 has-hover-border">
                                    <span class="text" data-back="Solicite sua Cotação" data-front="Solicite sua Cotação"></span>
                                </a>

                                <!-- sidebar-btn -->
                                <button type="button" aria-label="name" class="fx-menu-btn-1 offcanvas_toggle" >
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
 