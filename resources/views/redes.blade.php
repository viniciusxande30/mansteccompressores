@php
$kw = "Manstec - Projetos e Manutenção em Redes de Ar"
@endphp
@include('includes.top')

<div class="breadcrumb-area bg-default" data-background="{{URL('/')}}/assets/img/hero/h2-bg-1.png">
  <div class="container fx-container-1">
    <div class="breadcrumb-wrap">
      <div class="breadcrumb-content">
        <div class="breadcrumb-list">
          <a href="{{URL('/')}}">Home</a>
        </div>
        <h1 class="breadcrumb-title fx-heading-1 text-uppercase" data-txaa-split-text-1>
          Projetos e Manutenção em Redes de Ar
        </h1>
      </div>
    </div>
  </div>
</div>

<div class="fx-services-details-area pt-100 pb-100">
  <div class="container fx-container-1">
    <div class="fx-services-details-container">
      <div class="fx-services-details-content">

        <!-- INTRO -->
        <h3>Por que investir em projetos de redes de ar?</h3>
        <p>
          A <strong>Manstec Soluções Industriais</strong> desenvolve e executa projetos completos de redes de ar comprimido,
          desde o dimensionamento até a instalação e manutenção preventiva. Nosso foco está em garantir
          <strong>eficiência energética</strong>, <strong>confiabilidade operacional</strong> e <strong>longevidade dos equipamentos</strong>,
          reduzindo custos e aumentando a produtividade.
        </p>

        <!-- LISTA DE SERVIÇOS -->
        <div class="row mb-55 align-items-center">
          <div class="col-lg-7">
            <ul>
              <li>Projetos personalizados de acordo com a demanda da sua empresa</li>
              <li>Dimensionamento correto de diâmetros e layout para evitar perdas</li>
              <li>Instalação de pontos de consumo, drenos e sistemas de filtragem</li>
              <li>Manutenção preventiva e corretiva em redes já existentes</li>
              <li>Detecção e correção de vazamentos e gargalos operacionais</li>
              <li>Relatórios técnicos detalhados com recomendações de melhoria</li>
            </ul>
          </div>
          <div class="col-lg-5">
            <div class="list-img fix img-cover">
              <img src="{{URL('/')}}/assets/img/services/sd-img-1.png" 
                   alt="Projetos e manutenção em redes de ar comprimido">
            </div>
          </div>
        </div>

        <!-- COMO FUNCIONA -->
        <h3>Como funciona o processo?</h3>
        <p>
          Nossa equipe realiza uma <strong>avaliação técnica</strong> das necessidades do cliente, considerando
          consumo de ar, setor de atuação e condições do ambiente fabril.
          A partir disso, desenvolvemos o projeto da rede e aplicamos soluções
          que garantem a melhor performance do sistema.
        </p>
        <p>
          Após a instalação, realizamos <strong>manutenções programadas</strong> para preservar a eficiência
          e a segurança do sistema, além de serviços corretivos sempre que necessário.
        </p>

        <!-- VANTAGENS -->
        <h3>Principais vantagens para sua empresa</h3>
        <p>
          Com os projetos e a manutenção da Manstec, sua empresa terá:
        </p>
        <ul>
          <li>Redução de custos energéticos e operacionais</li>
          <li>Maior confiabilidade e disponibilidade do sistema</li>
          <li>Conformidade com normas técnicas e de segurança</li>
          <li>Suporte contínuo de uma equipe técnica especializada</li>
        </ul>

        <p><br>
          A <strong>Manstec</strong> é referência em <em>redes de ar comprimido</em>, entregando soluções sob medida
          que unem engenharia, tecnologia e prática de chão de fábrica.
        </p>

      </div>
    </div>
  </div>
</div>

@include('includes.footer')