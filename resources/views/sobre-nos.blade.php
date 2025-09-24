@php
$kw = "Manstec Compressores de Ar - Sobre Nós"
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
<div class="breadcrumb-area bg-default" data-background="assets/img/hero/h2-bg-1.png" role="region" aria-label="Trilha de navegação">
  <div class="container fx-container-1">
    <div class="breadcrumb-wrap">
      <div class="breadcrumb-content text-center">
        <nav class="breadcrumb-list" aria-label="breadcrumbs">
          <a href="{{ url('/') }}">Home</a>
          <span>Sobre a Manstec</span>
        </nav>
        <h1 class="breadcrumb-title fx-heading-1 text-uppercase" data-txaa-split-text-1>
          Quem Somos
        </h1>
      </div>
    </div>
  </div>
</div>

<!-- ====== SOBRE NÓS ====== -->
<section class="fx-about-inner-area" aria-labelledby="title-quem-somos">
  <div class="container fx-container-1">

    <header class="text-center mb-5">
      <h6 class="fx-subtitle-1 text-uppercase text-muted">
        <span>01</span> Sobre a Manstec
      </h6>
      <h2 id="title-quem-somos" class="fx-heading-1 fw-bold mb-3">
        Soluções completas e seguras em ar comprimido
      </h2>
      <p class="fx-para-1 mx-auto" style="max-width: 860px;">
        A <strong>Manstec Soluções Industriais</strong> projeta, mantém e otimiza sistemas de ar comprimido com foco em
        <strong>confiabilidade</strong>, <strong>eficiência energética</strong> e <strong>conformidade NR-13</strong>.
        Atendemos multimarcas e atuamos do diagnóstico à operação assistida.
      </p>
    </header>

    <!-- ====== CARROSSEL DE MARCAS ====== -->
    <section class="mb-2" aria-labelledby="title-marcas">
      <h3 id="title-marcas" class="fx-heading-1 fw-bold mb-4 text-center">
        Marcas que confiamos
      </h3>
      <div id="carouselMarcas" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner text-center">

          <?php 
            $total = 20;       
            $porSlide = 5;     
            $slides = ceil($total / $porSlide);

            for($s = 0; $s < $slides; $s++):
              $ativo = ($s == 0) ? 'active' : '';
          ?>
            <div class="carousel-item <?= $ativo ?>">
              <div class="d-flex justify-content-center align-items-center gap-5 flex-wrap">
                <?php 
                  for($i = $s*$porSlide+1; $i <= min(($s+1)*$porSlide, $total); $i++): 
                ?>
                  <img src="{{ URL('/') }}/assets/img/marcas/<?= $i ?>.png" 
                       class="img-fluid" 
                       alt="Marca <?= $i ?>">
                <?php endfor; ?>
              </div>
            </div>
          <?php endfor; ?>

        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMarcas" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMarcas" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
        </button>
      </div>
    </section>

    <!-- ====== 3 PILARES ====== -->
    <div class="row g-4 text-center mb-5">
      <article class="col-md-4">
        <div class="card h-100 p-4">
          <i class="fa-solid fa-shield-halved mb-3"></i>
          <h5 class="fw-bold">Confiabilidade</h5>
          <p>Planos preventivos que reduzem paradas e mantêm sua produção estável.</p>
        </div>
      </article>
      <article class="col-md-4">
        <div class="card h-100 p-4">
          <i class="fa-solid fa-bolt mb-3"></i>
          <h5 class="fw-bold">Eficiência</h5>
          <p>Projetos e ajustes para consumir menos energia por m³ de ar.</p>
        </div>
      </article>
      <article class="col-md-4">
        <div class="card h-100 p-4">
          <i class="fa-solid fa-clipboard-check mb-3"></i>
          <h5 class="fw-bold">Conformidade</h5>
          <p>Laudos e inspeções conforme <strong>NR-13</strong> para vasos de pressão e segurança operacional.</p>
        </div>
      </article>
    </div>

    <!-- ====== RESUMO ====== -->
<section class="mb-5 text-center">
  <div class="col-lg-10 mx-auto">
    <p class="fx-para-1 mb-4">
      Unimos engenharia e prática de chão de fábrica para implementar soluções sob medida. Nossa equipe mapeia
      perdas, vazamentos e gargalos do sistema, define o plano de ação e acompanha os resultados com indicadores claros.
    </p>
    <ul class="fx-para-1 list-unstyled">
      <li>✔️ Atuação consultiva com diagnóstico técnico e plano priorizado.</li>
      <li>✔️ Time multimarcas e peças homologadas.</li>
      <li>✔️ Suporte programado e emergencial.</li>
    </ul>
  </div>
</section>
    <!-- ====== SERVIÇOS ====== -->
    <section aria-labelledby="title-servicos" class="mb-1">
      <h3 id="title-servicos" class="fx-heading-1 fw-bold mb-4 text-center">O que fazemos</h3>
      <div class="row g-4">
        <!-- Cada card de serviço -->
        <div class="col-md-6 col-lg-4">
          <div class="fx-about-1-card h-100 p-4">
            <i class="fa-solid fa-screwdriver-wrench mb-3"></i>
            <h5 class="fw-bold">Manutenção de Compressores e Secadores</h5>
            <p>Preventiva e corretiva, multimarcas, com checklists e histórico de ativos.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="fx-about-1-card h-100 p-4">
            <i class="fa-solid fa-diagram-project mb-3"></i>
            <h5 class="fw-bold">Projetos de Redes de Ar</h5>
            <p>Dimensionamento, montagem e comissionamento focados em perdas mínimas.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="fx-about-1-card h-100 p-4">
            <i class="fa-solid fa-file-signature mb-3"></i>
            <h5 class="fw-bold">Laudos Técnicos NR-13</h5>
            <p>Inspeção, prontuário e acompanhamento das ações corretivas.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="fx-about-1-card h-100 p-4">
            <i class="fa-solid fa-water mb-3"></i>
            <h5 class="fw-bold">Tratamento de Ar</h5>
            <p>Secadores, filtros, drenos e separadores de condensado com especificação correta.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="fx-about-1-card h-100 p-4">
            <i class="fa-solid fa-handshake mb-3"></i>
            <h5 class="fw-bold">Contratos de Manutenção</h5>
            <p>Planos sob medida com visitas programadas e indicadores de desempenho.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="fx-about-1-card h-100 p-4">
            <i class="fa-solid fa-gauge-simple-high mb-3"></i>
            <h5 class="fw-bold">Eficiência Energética</h5>
            <p>Medições, correções e automação para reduzir kWh/m³.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ====== ONDE ATUAMOS ====== -->
    <section aria-labelledby="title-onde-atuamos" class="text-center mb-5">
      <h3 id="title-onde-atuamos" class="fx-heading-1 fw-bold mb-3">Onde atuamos</h3>
      <p class="fx-para-1">
        Base em <strong>Itaquaquecetuba/SP</strong> e atendimento à <strong>Grande São Paulo</strong> e interior.
        Experiência em metalurgia, alimentos e bebidas, automotivo, farmacêutico e logística.
      </p>
    </section>

    <!-- ====== CTA ====== -->
    <div class="text-center mb-5">
      <a href="https://www.mansteccompressores.com.br" target="_blank" rel="noopener" 
         class="btn btn-primary px-4 py-2 rounded-pill">
        Fale com a Manstec <i class="fa-solid fa-angle-right ms-2"></i>
      </a>
    </div>

    <!-- ====== FAQ ====== -->
    <section aria-labelledby="title-faq">
      <h3 id="title-faq" class="fx-heading-1 fw-bold mb-4 text-center">Perguntas frequentes</h3>
      <details>
        <summary>Vocês atendem todas as marcas de compressores?</summary>
        <p>Sim. Trabalhamos com compressores e secadores multimarcas, seguindo o manual de cada fabricante.</p>
      </details>
      <details>
        <summary>Como funciona o contrato de manutenção?</summary>
        <p>Definimos periodicidade, escopo e SLAs. A cada visita, registramos checklist e orientações técnicas.</p>
      </details>
      <details>
        <summary>Em quanto tempo sai o laudo NR-13?</summary>
        <p>Após inspeção e análise documental, emitimos o laudo com prazos e recomendações de adequação quando necessário.</p>
      </details>
    </section>

  </div>
</section>

@include('includes.footer')
