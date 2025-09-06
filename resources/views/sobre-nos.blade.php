@include('includes.top')

<div class="breadcrumb-area bg-default" data-background="assets/img/hero/h2-bg-1.png" role="region" aria-label="Trilha de navegação">
  <div class="container fx-container-1">
    <div class="breadcrumb-wrap">
      <div class="breadcrumb-content">
        <nav class="breadcrumb-list" aria-label="breadcrumbs">
          <a href="{{ url('/') }}">Home</a>
          <span>Sobre a Manstec</span>
        </nav>
        <h1 class="breadcrumb-title fx-heading-1 text-uppercase" data-txaa-split-text-1>Quem Somos</h1>
      </div>
    </div>
  </div>
</div>

<!-- about-start -->
<section class="fx-about-inner-area fx-scn-redius pt-110 pb-120 p-relative fix" aria-labelledby="title-quem-somos">
  <div class="container fx-container-1">

    <!-- TÍTULO -->
    <header class="fx-about-1-scn-title mb-40">
      <h6 class="fx-subtitle-1">
        <span>01</span>
        <span class="txaa-split-text-2 txaa-split-text-2-ani">Sobre a Manstec</span>
      </h6>
      <h2 id="title-quem-somos" class="fx-scn-title-1 txaa-split-text-3 txaa-split-text-3-ani">
        Soluções completas e seguras em ar comprimido
      </h2>
      <p class="fx-para-1 has-opacity-7 mt-10" style="max-width:860px">
        A <strong>Manstec Soluções Industriais</strong> projeta, mantém e otimiza sistemas de ar comprimido com foco em
        <strong>confiabilidade</strong>, <strong>eficiência energética</strong> e <strong>conformidade NR-13</strong>.
        Atendemos multimarcas e atuamos do diagnóstico à operação assistida.
      </p>
    </header>

    <!-- BLOCO VALOR (3 pilares) -->
    <div class="row g-3 mb-50" role="list">
      <article class="col-md-4" role="listitem">
        <div class="fx-counter-1-item txxaslideup fix card">
          <div class="txxaslideup-item fx-cube-1 card-body">
            <i class="fa-solid fa-shield-halved" aria-hidden="true"></i>
            <h5 class="fx-heading-1 fx-font-600 mt-10">Confiabilidade</h5>
            <p class="fx-para-1">Planos preventivos que reduzem paradas e mantêm sua produção estável.</p>
          </div>
        </div>
      </article>
      <article class="col-md-4" role="listitem">
        <div class="fx-counter-1-item txxaslideup fix card">
          <div class="txxaslideup-item fx-cube-1 card-body">
            <i class="fa-solid fa-bolt" aria-hidden="true"></i>
            <h5 class="fx-heading-1 fx-font-600 mt-10">Eficiência</h5>
            <p class="fx-para-1">Projetos e ajustes para consumir menos energia por m³ de ar.</p>
          </div>
        </div>
      </article>
      <article class="col-md-4" role="listitem">
        <div class="fx-counter-1-item txxaslideup fix card">
          <div class="txxaslideup-item fx-cube-1 card-body">
            <i class="fa-solid fa-clipboard-check" aria-hidden="true"></i>
            <h5 class="fx-heading-1 fx-font-600 mt-10">Conformidade</h5>
            <p class="fx-para-1">Laudos e inspeções conforme <strong>NR-13</strong> para vasos de pressão e segurança operacional.</p>
          </div>
        </div>
      </article>
    </div>

    <!-- IMAGEM + RESUMO -->
    <div class="row align-items-center mb-50">
      <div class="col-lg-6">
        <figure class="content-img fix img-cover mb-20" aria-label="Equipe técnica Manstec">
          <img src="{{ URL('/') }}/assets/img/story/s1-img-2.jpg" alt="Equipe técnica da Manstec atuando em compressores">
        </figure>
      </div>
      <div class="col-lg-6">
        <p class="fx-para-1 has-opacity-7">
          Unimos engenharia e prática de chão de fábrica para implementar soluções sob medida. Nossa equipe mapeia
          perdas, vazamentos e gargalos do sistema, define o plano de ação e acompanha os resultados com indicadores claros.
        </p>
        <ul class="fx-para-1 has-opacity-7">
          <li>Atuação consultiva com diagnóstico técnico e plano priorizado.</li>
          <li>Time multimarcas e peças homologadas.</li>
          <li>Suporte programado e emergencial.</li>
        </ul>
      </div>
    </div>

    <!-- SERVIÇOS (cards) -->
    <section aria-labelledby="title-servicos" class="mb-50">
      <h3 id="title-servicos" class="fx-heading-1 fx-font-600 mb-20">O que fazemos</h3>
      <div class="row g-3">
        <div class="col-md-6 col-lg-4">
          <div class="fx-about-1-card txaaslideup h-100">
            <div class="card-body">
              <i class="fa-solid fa-screwdriver-wrench" aria-hidden="true"></i>
              <h5 class="fx-heading-1 fx-font-600 mt-10">Manutenção de Compressores e Secadores</h5>
              <p class="fx-para-1 has-opacity-7">Preventiva e corretiva, multimarcas, com checklists e histórico de ativos.</p>
              <ul class="fx-para-1 has-opacity-7">
                <li>Troca de elementos e filtros</li>
                <li>Balanceamento e testes</li>
                <li>Relatórios pós-serviço</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="fx-about-1-card txaaslideup h-100">
            <div class="card-body">
              <i class="fa-solid fa-diagram-project" aria-hidden="true"></i>
              <h5 class="fx-heading-1 fx-font-600 mt-10">Projetos de Redes de Ar</h5>
              <p class="fx-para-1 has-opacity-7">Dimensionamento, montagem e comissionamento focados em perdas mínimas.</p>
              <ul class="fx-para-1 has-opacity-7">
                <li>Layout e diâmetros ideais</li>
                <li>Pontos de consumo e drenagem</li>
                <li>Estimativa de ROI</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="fx-about-1-card txaaslideup h-100">
            <div class="card-body">
              <i class="fa-solid fa-file-signature" aria-hidden="true"></i>
              <h5 class="fx-heading-1 fx-font-600 mt-10">Laudos Técnicos NR-13</h5>
              <p class="fx-para-1 has-opacity-7">Inspeção, prontuário e acompanhamento das ações corretivas.</p>
              <ul class="fx-para-1 has-opacity-7">
                <li>Vasos de pressão</li>
                <li>Planos de inspeção</li>
                <li>Treinamentos e POPs</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="fx-about-1-card txaaslideup h-100">
            <div class="card-body">
              <i class="fa-solid fa-water" aria-hidden="true"></i>
              <h5 class="fx-heading-1 fx-font-600 mt-10">Tratamento de Ar</h5>
              <p class="fx-para-1 has-opacity-7">Secadores, filtros, drenos e separadores de condensado com especificação correta.</p>
              <ul class="fx-para-1 has-opacity-7">
                <li>Ponto de orvalho adequado</li>
                <li>Qualidade ISO 8573-1</li>
                <li>Menos contaminação no processo</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="fx-about-1-card txaaslideup h-100">
            <div class="card-body">
              <i class="fa-solid fa-handshake" aria-hidden="true"></i>
              <h5 class="fx-heading-1 fx-font-600 mt-10">Contratos de Manutenção</h5>
              <p class="fx-para-1 has-opacity-7">Planos sob medida com visitas programadas e indicadores de desempenho.</p>
              <ul class="fx-para-1 has-opacity-7">
                <li>SLAs claros</li>
                <li>Reposição ágil</li>
                <li>Dashboard de ocorrências</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="fx-about-1-card txaaslideup h-100">
            <div class="card-body">
              <i class="fa-solid fa-gauge-simple-high" aria-hidden="true"></i>
              <h5 class="fx-heading-1 fx-font-600 mt-10">Eficiência Energética</h5>
              <p class="fx-para-1 has-opacity-7">Medições, correções e automação para reduzir kWh/m³.</p>
              <ul class="fx-para-1 has-opacity-7">
                <li>Teste de vazamentos</li>
                <li>Curva de carga</li>
                <li>Payback estimado</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- COBERTURA / SETORES -->
    <section aria-labelledby="title-onde-atuamos" class="mb-50">
      <h3 id="title-onde-atuamos" class="fx-heading-1 fx-font-600 mb-10">Onde atuamos</h3>
      <p class="fx-para-1 has-opacity-7">
        Base em <strong>Itaquaquecetuba/SP</strong> e atendimento à <strong>Grande São Paulo</strong> e interior.
        Experiência em metalurgia, alimentos e bebidas, automotivo, farmacêutico e logística.
      </p>
    </section>

    <!-- CHAMADA / CTA -->
    <div class="fx-about-1-content-btn txxaslideup fix">
      <span class="txxaslideup-item fx-cube-1">
        <a href="https://www.mansteccompressores.com.br" target="_blank" rel="noopener" aria-label="Fale com a Manstec" class="fx-pr-btn-1">
          <span class="text" data-back="Fale com a Manstec" data-front="Fale com a Manstec"></span>
          <i class="fa-solid fa-angle-right"></i>
        </a>
      </span>
    </div>

    <!-- FAQ (acessível, sem JS) -->
    <section class="mt-40" aria-labelledby="title-faq">
      <h3 id="title-faq" class="fx-heading-1 fx-font-600 mb-15">Perguntas frequentes</h3>
      <details class="mb-10">
        <summary class="fx-heading-1 fx-font-600">Vocês atendem todas as marcas de compressores?</summary>
        <p class="fx-para-1 has-opacity-7">Sim. Trabalhamos com compressores e secadores multimarcas, seguindo o manual de cada fabricante.</p>
      </details>
      <details class="mb-10">
        <summary class="fx-heading-1 fx-font-600">Como funciona o contrato de manutenção?</summary>
        <p class="fx-para-1 has-opacity-7">Definimos periodicidade, escopo e SLAs. A cada visita, registramos checklist e orientações técnicas.</p>
      </details>
      <details>
        <summary class="fx-heading-1 fx-font-600">Em quanto tempo sai o laudo NR-13?</summary>
        <p class="fx-para-1 has-opacity-7">Após inspeção e análise documental, emitimos o laudo com prazos e recomendações de adequação quando necessário.</p>
      </details>
    </section>

  </div>
</section>
<!-- about-end -->

<div class="fx-gap-12"></div>
@include('includes.footer')