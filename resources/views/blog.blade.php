@php
$kw = "blog manstec compressores, manutenção de compressores de ar, eficiência energética industrial, ar comprimido industrial";
$metaTitle = "Blog Manstec | Compressores de Ar, Manutenção e Eficiência";
$metaDescription = "Conteúdos técnicos sobre compressores de ar, manutenção industrial, eficiência energética, redes de ar comprimido e redução de paradas.";
$maintenanceCluster = [
  ['slug' => 'compressor-nao-desliga', 'title' => 'Compressor Não Desliga: Causas, Riscos e Diagnóstico Técnico', 'image' => 's1-img-1-opt.jpg'],
  ['slug' => 'agua-na-linha-de-ar-comprimido', 'title' => 'Água na Linha de Ar Comprimido: Causas e Como Resolver', 'image' => 's1-img-2-opt.jpg'],
  ['slug' => 'compressor-fazendo-barulho', 'title' => 'Compressor Fazendo Barulho: Quando o Ruído Indica Manutenção', 'image' => 's1-img-3-opt.jpg'],
  ['slug' => 'compressor-consumindo-muito-oleo', 'title' => 'Compressor Consumindo Muito Óleo: Como Identificar a Causa', 'image' => 's1-img-1-opt.jpg'],
  ['slug' => 'compressor-perde-pressao', 'title' => 'Compressor Perde Pressão: Como Localizar a Perda de Ar', 'image' => 's1-img-2-opt.jpg'],
  ['slug' => 'compressor-de-ar-nao-liga', 'title' => 'Compressor de Ar Não Liga: Causas e Quando Chamar Manutenção', 'image' => 's1-img-2-opt.jpg'],
  ['slug' => 'compressor-nao-atinge-pressao', 'title' => 'Compressor Não Atinge Pressão: Como Identificar a Causa', 'image' => 's1-img-3-opt.jpg'],
  ['slug' => 'compressor-desarmando', 'title' => 'Compressor Desarmando: Causas e Como Agir com Segurança', 'image' => 's1-img-1-opt.jpg'],
  ['slug' => 'compressor-superaquecendo', 'title' => 'Compressor Superaquecendo: Causas, Riscos e Manutenção', 'image' => 's1-img-2-opt.jpg'],
  ['slug' => 'compressor-vazando-oleo', 'title' => 'Compressor Vazando Óleo: Causas e Quando Solicitar Manutenção', 'image' => 's1-img-3-opt.jpg'],
  ['slug' => 'orcamento-manutencao-compressor', 'title' => 'Orçamento de Manutenção de Compressor: Como Solicitar uma Cotação Mais Precisa', 'image' => 's1-img-1-opt.jpg'],
  ['slug' => 'assistencia-tecnica-urgente-compressor', 'title' => 'Assistência Técnica Urgente para Compressor: Como Reduzir o Tempo de Parada', 'image' => 's1-img-2-opt.jpg'],
  ['slug' => 'manutencao-compressor-de-parafuso', 'title' => 'Manutenção de Compressor de Parafuso: Como Evitar Paradas e Custos', 'image' => 's1-img-3-opt.jpg'],
  ['slug' => 'revisao-de-compressor-de-ar', 'title' => 'Revisão de Compressor de Ar: Quando Fazer e o que Avaliar', 'image' => 's1-img-1-opt.jpg'],
  ['slug' => 'troca-de-oleo-compressor-de-ar', 'title' => 'Troca de Óleo de Compressor de Ar: Prazo, Cuidados e Desempenho', 'image' => 's1-img-2-opt.jpg'],
  ['slug' => 'troca-de-filtros-compressor-de-ar', 'title' => 'Troca de Filtros de Compressor de Ar: Como Evitar Falhas', 'image' => 's1-img-3-opt.jpg'],
  ['slug' => 'manutencao-multimarcas-de-compressores', 'title' => 'Manutenção Multimarcas de Compressores: Atendimento para Sua Fábrica', 'image' => 's1-img-1-opt.jpg'],
  ['slug' => 'plano-de-manutencao-de-compressores', 'title' => 'Plano de Manutenção de Compressores: Mais Disponibilidade Industrial', 'image' => 's1-img-2-opt.jpg'],
  ['slug' => 'manutencao-de-compressor-de-pistao', 'title' => 'Manutenção de Compressor de Pistão: Cuidados Essenciais', 'image' => 's1-img-3-opt.jpg'],
  ['slug' => 'manutencao-de-reservatorio-de-ar-comprimido', 'title' => 'Manutenção de Reservatório de Ar Comprimido: Segurança e Confiabilidade', 'image' => 's1-img-1-opt.jpg'],
];
@endphp
@include('includes.top')

<style>
/* ====== GERAL ====== */
section {
  padding-top: 80px;
  padding-bottom: 80px;
}
.fx-heading-1 {
  line-height: 1.3;
  letter-spacing: 0.5px;
}
.fx-para-1 {
  line-height: 1.7;
}

/* ====== CARROSSEL ====== */
#carouselMarcas {
  background: #f9f9f9;
  padding: 30px 15px;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}
#carouselMarcas img {
  max-height: 70px;
  filter: grayscale(100%);
  opacity: 0.7;
  transition: all 0.3s ease;
}
#carouselMarcas img:hover {
  filter: grayscale(0%);
  opacity: 1;
  transform: scale(1.05);
}
#carouselMarcas .carousel-control-prev-icon,
#carouselMarcas .carousel-control-next-icon {
  background-color: #aaa;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  background-size: 60% 60%;
  transition: background-color 0.3s ease;
}
#carouselMarcas .carousel-control-prev-icon:hover,
#carouselMarcas .carousel-control-next-icon:hover {
  background-color: #444;
}

/* ====== CARDS (valores + serviços) ====== */
.card, .fx-about-1-card {
  border: none;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card:hover, .fx-about-1-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.08);
}
.card i, .fx-about-1-card i {
  font-size: 30px;
  color: #0d6efd;
}

/* ====== LISTAS ====== */
ul {
  padding-left: 18px;
}
ul li {
  margin-bottom: 6px;
}

/* ====== FAQ ====== */
/* ====== SEÇÕES ====== */
section {
  padding-top: 50px;   /* antes estava 80px */
  padding-bottom: 50px;
}

/* ====== TÍTULOS ====== */
section h2, section h3 {
  margin-bottom: 20px; /* reduzido */
}

/* ====== PARÁGRAFOS ====== */
.fx-para-1 {
  margin-bottom: 15px; /* reduzido */
  line-height: 1.6;
}

/* ====== CARDS ====== */
.card, .fx-about-1-card {
  padding: 25px;  /* antes estava 40px */
}

/* ====== LISTAS ====== */
ul {
  margin-bottom: 15px; /* menos espaço depois da lista */
}

/* ====== FAQ ====== */
details {
  margin-bottom: 8px; /* menos espaço entre perguntas */
  padding: 12px 18px; /* mais compacto */
}


</style>

<!-- ====== BREADCRUMB ====== -->
<div class="breadcrumb-area bg-default" data-background="{{ URL('/') }}/assets/img/hero/h2-bg-1-opt.jpg" role="region" aria-label="Trilha de navegação">
  <div class="container fx-container-1">
    <div class="breadcrumb-wrap">
      <div class="breadcrumb-content text-center">
        <nav class="breadcrumb-list" aria-label="breadcrumbs">
          <a href="{{ url('/') }}">Home</a>
          <span>Blog</span>
        </nav>
        <h1 class="breadcrumb-title fx-heading-1 text-uppercase" data-txaa-split-text-1>
          Blog Manstec
        </h1>
      </div>
    </div>
  </div>
</div>
         
       <div class="fx-serve-1-area fix p-relative pt-120 pb-20">

            <div class="container fx-container-1">

                <!-- section-title -->
                <div class="fx-serve-1-scn-title mb-45">
                    <h2 class="fx-scn-title-2 txaa-split-text-3 txaa-split-text-3-ani" id="nossos-servicos">Nosso Blog</h2>
				</div>


                <div class="fx-services-page-item">
                    @foreach ($maintenanceCluster as $article)
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/{{ $article['image'] }}" alt="{{ $article['title'] }}">
                        </div>
                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/{{ $article['slug'] }}" aria-label="Abrir artigo: {{ $article['title'] }}">{{ $article['title'] }}</a>
                            </h5>
                            <a class="item-btn" href="{{ url('/') }}/blog/{{ $article['slug'] }}" aria-label="Abrir artigo: {{ $article['title'] }}">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M40 20C40 8.97219 31.0278 0 20 0S0 8.97219 0 20s8.97219 20 20 20 20-8.97219 20-20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5S37.5 10.3503 37.5 20 29.6497 37.5 20 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338c-.4885.4884-1.2793.4884-1.7675 0-.244-.2441-.3662-.5641-.3662-.8838 0-.3197.1222-.6397.3662-.8838l4.1163-4.1162H12.5c-.6904 0-1.25-.5597-1.25-1.25s.5596-1.25 1.25-1.25h11.9825l-4.1162-4.1163c-.4885-.4884-.4885-1.2793 0-1.7675.4884-.4881 1.2793-.4884 1.7674 0l6.25 6.2501c.4885.4884.4885 1.2793 0 1.7675l-6.25 6.25Z" fill="#FC5220"/></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-2-opt.jpg" alt="Artigo sobre compressor isento de óleo">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/compressor-isento-de-oleo" aria-label="Abrir artigo sobre compressor isento de óleo">Compressor Isento de Óleo: Quando Vale a Pena e Como Garantir Ar Mais Puro</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/compressor-isento-de-oleo" aria-label="Abrir artigo sobre compressor isento de óleo">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-3-opt.jpg" alt="Artigo sobre unidade FRL em ar comprimido">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/unidade-frl-em-ar-comprimido" aria-label="Abrir artigo sobre unidade FRL em ar comprimido">Unidade FRL em Ar Comprimido: Como Proteger Equipamentos no Ponto de Uso</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/unidade-frl-em-ar-comprimido" aria-label="Abrir artigo sobre unidade FRL em ar comprimido">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo sobre manutenção de secador de ar comprimido">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/manutencao-de-secador-de-ar-comprimido" aria-label="Abrir artigo sobre manutenção de secador de ar comprimido">Manutenção de Secador de Ar Comprimido: Como Evitar Umidade, Falhas e Desperdícios</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/manutencao-de-secador-de-ar-comprimido" aria-label="Abrir artigo sobre manutenção de secador de ar comprimido">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo sobre sequenciamento de compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/sequenciamento-de-compressores-de-ar" aria-label="Abrir artigo sobre sequenciamento de compressores de ar">Sequenciamento de Compressores de Ar: Como Reduzir Consumo e Ganhar Estabilidade</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/sequenciamento-de-compressores-de-ar" aria-label="Abrir artigo sobre sequenciamento de compressores de ar">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-2-opt.jpg" alt="Artigo sobre monitoramento remoto de compressores">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/monitoramento-remoto-de-compressores" aria-label="Abrir artigo sobre monitoramento remoto de compressores">Monitoramento Remoto de Compressores: Como Antecipar Falhas e Melhorar a Eficiência</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/monitoramento-remoto-de-compressores" aria-label="Abrir artigo sobre monitoramento remoto de compressores">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-3-opt.jpg" alt="Artigo sobre sala de compressores industrial">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/sala-de-compressores-industrial" aria-label="Abrir artigo sobre sala de compressores industrial">Sala de Compressores Industrial: Como Projetar um Ambiente Seguro e Eficiente</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/sala-de-compressores-industrial" aria-label="Abrir artigo sobre sala de compressores industrial">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-2-opt.jpg" alt="Artigo sobre análise de demanda de ar comprimido">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/analise-de-demanda-de-ar-comprimido" aria-label="Abrir artigo sobre análise de demanda de ar comprimido">Análise de Demanda de Ar Comprimido: Como Dimensionar a Produção sem Desperdícios</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/analise-de-demanda-de-ar-comprimido" aria-label="Abrir artigo sobre análise de demanda de ar comprimido">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-3-opt.jpg" alt="Artigo sobre detecção ultrassônica de vazamentos em ar comprimido">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/deteccao-ultrassonica-de-vazamentos" aria-label="Abrir artigo sobre detecção ultrassônica de vazamentos">Detecção Ultrassônica de Vazamentos em Ar Comprimido: Como Encontrar Perdas Invisíveis</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/deteccao-ultrassonica-de-vazamentos" aria-label="Abrir artigo sobre detecção ultrassônica de vazamentos">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo sobre recuperação de calor em compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/recuperacao-de-calor-em-compressores" aria-label="Abrir artigo sobre recuperação de calor em compressores">Recuperação de Calor em Compressores de Ar: Como Transformar Desperdício em Economia</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/recuperacao-de-calor-em-compressores" aria-label="Abrir artigo sobre recuperação de calor em compressores">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo sobre compressor de parafuso industrial">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/compressor-de-parafuso-industrial" aria-label="name">Compressor de Parafuso Industrial: Guia Completo para Reduzir Custos</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/compressor-de-parafuso-industrial" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo sobre assistencia tecnica para compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/assistencia-tecnica-compressores-de-ar" aria-label="name">Assist&ecirc;ncia T&eacute;cnica para Compressores de Ar: Quando Chamar?</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/assistencia-tecnica-compressores-de-ar" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico sobre pecas para compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/pecas-para-compressores-de-ar" aria-label="name">Pe&ccedil;as para Compressores de Ar: Como Escolher e Evitar Paradas</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/pecas-para-compressores-de-ar" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico sobre contrato de manutencao para compressores">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/contrato-manutencao-compressores" aria-label="name">Contrato de Manuten&ccedil;&atilde;o para Compressores: Quando Vale a Pena?</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/contrato-manutencao-compressores" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>                            </a>
                        </div>

                    </div>


                    
                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/custo-operacional" aria-label="name">5 Erros que Aumentam o Custo da Operação Industrial</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/custo-operacional" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/manutencao-preditiva-compressores" aria-label="name">Manuten&ccedil;&atilde;o Preditiva em Compressores: Como Antecipar Falhas e Evitar Paradas</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/manutencao-preditiva-compressores" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/auditoria-energetica-ar-comprimido" aria-label="name">Auditoria Energ&eacute;tica em Ar Comprimido: Como Reduzir Custos Industriais</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/auditoria-energetica-ar-comprimido" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/retrofit-compressores-industriais" aria-label="name">Retrofit de Compressores Industriais: Quando Modernizar Vale Mais</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/retrofit-compressores-industriais" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-2-opt.jpg" alt="Artigo sobre pressostato do compressor de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/pressostato-do-compressor-de-ar" aria-label="name">Pressostato do Compressor de Ar: como funciona e como regular</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/pressostato-do-compressor-de-ar" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-3-opt.jpg" alt="Artigo sobre válvula de segurança do compressor de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/valvula-de-seguranca-do-compressor-de-ar" aria-label="name">Válvula de Segurança do Compressor de Ar: por que é indispensável</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/valvula-de-seguranca-do-compressor-de-ar" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo sobre dreno automático do compressor de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/dreno-automatico-compressor-de-ar" aria-label="name">Dreno Automático do Compressor de Ar: como funciona e quando usar</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/dreno-automatico-compressor-de-ar" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/manutencao-preventiva-compressores" aria-label="name">Manutenção Preventiva em Compressores de Ar: como reduzir custos e evitar paradas</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/manutencao-preventiva-compressores" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-2-opt.jpg" alt="Artigo sobre filtro coalescente em ar comprimido">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/filtro-coalescente-em-ar-comprimido" aria-label="name">Filtro Coalescente em Ar Comprimido: o que é e quando trocar</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/filtro-coalescente-em-ar-comprimido" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-3-opt.jpg" alt="Artigo sobre separador de água e óleo em ar comprimido">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/separador-agua-oleo-em-ar-comprimido" aria-label="name">Separador de Água e Óleo em Ar Comprimido: como funciona</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/separador-agua-oleo-em-ar-comprimido" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-2-opt.jpg" alt="Artigo sobre tratamento de condensado em ar comprimido">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/tratamento-de-condensado-em-ar-comprimido" aria-label="name">Tratamento de Condensado em Ar Comprimido: como reduzir riscos e custos</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/tratamento-de-condensado-em-ar-comprimido" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-3-opt.jpg" alt="Artigo sobre ponto de orvalho em ar comprimido">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/ponto-de-orvalho-em-ar-comprimido" aria-label="name">Ponto de Orvalho em Ar Comprimido: como controlar a umidade</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/ponto-de-orvalho-em-ar-comprimido" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo sobre reservatorio de ar comprimido">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/reservatorio-de-ar-comprimido" aria-label="name">Reservat&oacute;rio de Ar Comprimido: Como Dimensionar e Usar</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/reservatorio-de-ar-comprimido" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo sobre perda de carga na rede de ar comprimido">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/perda-de-carga-na-rede-de-ar-comprimido" aria-label="name">Perda de Carga na Rede de Ar Comprimido: Como Reduzir</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/perda-de-carga-na-rede-de-ar-comprimido" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/vazamentos-de-ar-comprimido" aria-label="name">Vazamentos de Ar Comprimido: o inimigo silencioso dos custos industriais</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/vazamentos-de-ar-comprimido" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>

                


                                <div class="fx-services-page-item">


                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/automacao-com-ar-comprimido" aria-label="name">Automação com Ar Comprimido: Como Aumentar a Eficiência da Sua Indústria</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/automacao-com-ar-comprimido" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                     <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/checklist-completo" aria-label="name">Checklist Completo de Manutenção em Compressores de Ar Industriais</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/checklist-completo" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                   <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/como-funciona-um-compressor" aria-label="name">Como Funciona um Compressor de Ar Industrial: Guia Completo</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/como-funciona-um-compressor" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>




                                <div class="fx-services-page-item">


                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/como-identificar-vazamento-em-ar" aria-label="name">Como Identificar Vazamentos em Sistemas de Ar Comprimido</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/como-identificar-vazamento-em-ar" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                     <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/compressor-com-inversor" aria-label="name">Compressor com Inversor de Frequência (VSD): Vale a Pena Investir?</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/compressor-com-inversor" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                   <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/custo-do-ar-comprimido" aria-label="name">Quanto Custa o Ar Comprimido na Indústria? Entenda Onde Está o Desperdício</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/custo-do-ar-comprimido" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>




                                <div class="fx-services-page-item">


                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/dimensionamento-de-compressores" aria-label="name">Como Dimensionar um Compressor de Ar Industrial: Guia Completo</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/dimensionamento-de-compressores" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                     <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/eficiencia-energetica-em-compressores" aria-label="name">Como Reduzir o Consumo de Energia em Compressores de Ar: Guia Completo para Indústrias</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/eficiencia-energetica-em-compressores" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                   <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/empresa-de-manutencao" aria-label="name">Como Escolher uma Empresa de Manutenção de Compressores de Ar (Guia Completo)</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/empresa-de-manutencao" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>



                                <div class="fx-services-page-item">


                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/erros-na-instalacao-de-compressores" aria-label="name">Erros na Instalação de Compressores de Ar que Aumentam o Custo da Operação</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/erros-na-instalacao-de-compressores" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                     <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/falhas-comuns-e-como-evitar" aria-label="name">Falhas Mais Comuns em Compressores de Ar e Como Evitar Paradas na Produção</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/falhas-comuns-e-como-evitar" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                   <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/linha-de-ar-comprimido" aria-label="name">Linha de Ar Comprimido: Como Projetar um Sistema Eficiente e Reduzir Custos</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/linha-de-ar-comprimido" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>



                                <div class="fx-services-page-item">


                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/manutencao-preventiva-vs-corretiva" aria-label="name">Manutenção Preventiva vs Corretiva: Qual a Melhor Estratégia para Sua Indústria?</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/manutencao-preventiva-vs-corretiva" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                     <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/nr13-em-compressores" aria-label="name">NR-13 em Compressores de Ar: Como Garantir Segurança, Evitar Multas e Manter sua Operação Regularizada</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/nr13-em-compressores" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                   <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/pressao-ideal-em-compressores" aria-label="name">Pressão Ideal em Compressores: Como Definir e Evitar Desperdício</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/pressao-ideal-em-compressores" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>



                                <div class="fx-services-page-item">


                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/qualidade-do-ar-comprimido" aria-label="name">Qualidade do Ar Comprimido: Classes ISO 8573 e Como Elas Impactam Sua Produção</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/qualidade-do-ar-comprimido" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                     <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/secador-refrigerado-vs-adsorcao" aria-label="name">Secador Refrigerado vs Adsorção: Qual Escolher para Sua Indústria?</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/secador-refrigerado-vs-adsorcao" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                   <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/secadores-de-ar-comprimido" aria-label="name">Secadores de Ar Comprimido: Por que são essenciais e como escolher o ideal para sua indústria</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/secadores-de-ar-comprimido" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>



                                <div class="fx-services-page-item">


                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/tipos-de-compressores" aria-label="name">Tipos de Compressores Industriais: Como Escolher o Ideal para Sua Operação</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/tipos-de-compressores" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                     <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/vida-util-de-compressores" aria-label="name">Vida Útil de um Compressor Industrial: Como Aumentar e Evitar Desgaste Prematuro</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/vida-util-de-compressores" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item" style="margin-top:30px">
                        <div class="item-img fix img-cover">
                            <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/serve/s1-img-1-opt.jpg" alt="Artigo tecnico da Manstec sobre compressores de ar">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/blog/eficiencia-energetica-industrial" aria-label="name">Eficiência Energética Industrial: Como Reduzir Custos</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/blog/eficiencia-energetica-industrial" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>













            </div>
        </div>

       
        <div class="fx-gap-12"></div>

        <!-- contact-us-start -->
        <div class="fx-contact-us-1-area">
            <div class="container fx-container-1">
                <div class="row align-items-center">
                    <!-- left-side -->
                    <div class="col-lg-6">
                        <div class="fx-contact-us-1-left">

                            <!-- section-title -->
                            <div class="fx-blog-2-scn-title mb-30">
                                <h6 class="fx-subtitle-1 has-mb-28">
                                    <span>07</span>
                                    <span class="txaa-split-text-2 txaa-split-text-2-ani"  >Entre em Contato</span>
                                </h6>
                                <h2 class="fx-scn-title-2 txaa-split-text-3 txaa-split-text-3-ani ">Entre em contato com nossos especialistas</h2>
                            </div>

@if(isset($success) && $success)
    <div class="alert alert-success">
        Cotação enviada com sucesso! Entraremos em contato em breve.
    </div>
@endif

                            <form action="{{ url('/') }}/send-email-home" method="POST" class="fx-form-1">
								<input type="text" name="id" value="form_contato" hidden>

                                <!-- single-box -->
                                <div class="fx-form-1-box">
                                    <label class="fx-form-1-label" >Nome Completo</label>
                                    <input class="fx-form-1-input" type="text" placeholder="Ex. Vinícius Albuquerque" name="name">
                                </div>

                                <!-- single-box -->
                                <div class="fx-form-1-box">
                                    <label class="fx-form-1-label" >Telefone / WhatsApp</label>
                                    <input class="fx-form-1-input" type="tel" placeholder="Ex. (11)9999-9999" name="phone">
                                </div>

                                <!-- single-box -->
                                <div class="fx-form-1-box">
                                    <label class="fx-form-1-label" >Mensagem</label>
                                    <textarea class="fx-form-1-input" placeholder="Escreva sua Mensagem Aqui"  name="message"></textarea>
                                </div>

                                <!-- single-box -->
                                                                        

                                <div class="fx-form-1-box fix txxaslideup">
                                    <span class="txxaslideup-item fx-cube-1">
                                        <button type="submit" aria-label="name" class="fx-pr-btn-1 ">
                                            <span class="text" data-back="Faça sua Cotação" data-front="Faça sua Cotação"></span>
                                            <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </span>

                                </div>
							<!-- <button class="btn btn-primary solid blank" type="submit">Enviar Mensagem</button> -->

                            </form>

                        </div>
                    </div>

                    <!-- right-side -->
                    <div class="col-lg-6">
                        <div class="fx-contact-us-1-right">
                            
                            <div class="fx-contact-us-1-img fix img-cover">
                                <img loading="lazy" decoding="async" src="{{ URL('/') }}/assets/img/contact/c2-img-1-opt.jpg" alt="Equipe tecnica da Manstec">
                            </div>

                            <div class="fx-contact-us-1-content fix">

                                <!-- single-box -->
                                <div class="fx-contact-us-1-info-box fix txxaslideup bg-default" data-background="{{ URL('/') }}/assets/img/contact/c2-box-bg-1.png">
                                    <h6 class="box-title fx-heading-1 fx-font-400">Endereço:</h6>
                                    <p class="address fx-para-1 has-clr-white">
                                        <span class="txxaslideup-item fx-cube-1">Rua Arapiraca, 311 - Jardim Napoli Itaquaquecetuba - SP 08595-620 - Brasil</span>
                                    </p>
                                </div>

                                <!-- single-box -->
                                <div class="fx-contact-us-1-info-box txxaslideup fix bg-default"  data-background="{{ URL('/') }}/assets/img/contact/c2-box-bg-2.png">
                                    <h6 class="box-title fx-heading-1 fx-font-400">Fale com nossos Especialistas</h6>
                                    <ul class="info-list txxaslideup-item fx-cube-1" >
                                        <li>
                                            <a href="mailto:comercial@mansteccompressores.com.br" aria-label="name">
                                                <i class="fa-regular fa-envelope"></i>
                                                Nosso E-mail
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="name">
                                                <i class="fa-light fa-phone-volume"></i>
                                                +351 969 558 556
                                            </a> <br>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="name">
                                                <i class="fa-light fa-phone-volume"></i>
                                                +55 (11) 95978-1897
                                            </a><br>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="name">
                                                <i class="fa-light fa-phone-volume"></i>
                                                +351 (11) 4647-8222
                                            </a><br>
                                        </li>
                                            
                                        
                                        <li>
                                            <i class="fa-regular fa-clock"></i>
                                            Seg - Sex 7:30 - 17:20 <br>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
@include('includes.footer')



