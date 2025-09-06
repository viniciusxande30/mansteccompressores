@php
$kw = "Manstec Compressores de Ar - Termos de Uso"
@endphp
@include('includes.top')


<div class="breadcrumb-area bg-default" data-background="{{URL('/')}}/assets/img/hero/h2-bg-1.png">
  <div class="container fx-container-1">
    <div class="breadcrumb-wrap">
      <div class="breadcrumb-content">
        <div class="breadcrumb-list">
          <a href="{{ url('/') }}">Home</a>
        </div>
        <h1 class="breadcrumb-title fx-heading-1 text-uppercase" data-txaa-split-text-1>Termos de Uso</h1>
      </div>
    </div>
  </div>
</div>

<div class="fx-services-details-area pt-120 pb-120">
  <div class="container fx-container-1">
    <div class="fx-services-details-container">
      <div class="fx-services-details-content">

        <h3>1. Aceitação dos termos</h3>
        <p>
          Ao acessar ou utilizar o site da <strong>Manstec</strong>, o usuário concorda com os presentes <strong>Termos de Uso</strong> e com a <a href="{{ url('/politica-de-privacidade') }}">Política de Privacidade</a>. Se você não concorda com os termos, recomendamos não utilizar nossos serviços online.
        </p>

        <h3>2. Uso permitido</h3>
        <p>
          O conteúdo deste site é destinado a fins informativos e comerciais relacionados aos produtos e serviços oferecidos pela Manstec. É proibida a utilização para qualquer finalidade ilícita ou que infrinja direitos de terceiros.
        </p>

        <h3>3. Propriedade intelectual</h3>
        <p>
          Todo o conteúdo deste site — incluindo textos, imagens, logotipos, vídeos, gráficos e códigos — é protegido por direitos autorais e pertence à Manstec ou a seus parceiros licenciados. É proibida a reprodução total ou parcial sem autorização expressa.
        </p>

        <h3>4. Responsabilidades do usuário</h3>
        <ul>
          <li>Fornecer informações verdadeiras e completas nos formulários;</li>
          <li>Não tentar invadir, manipular ou comprometer a segurança do site;</li>
          <li>Utilizar o conteúdo apenas conforme permitido por lei e por este termo.</li>
        </ul>

        <h3>5. Modificações no site</h3>
        <p>
          A Manstec reserva-se o direito de alterar, suspender ou descontinuar qualquer parte do site a qualquer momento, sem aviso prévio. Isso inclui mudanças em serviços, preços ou funcionalidades.
        </p>

        <h3>6. Limitação de responsabilidade</h3>
        <p>
          Embora busquemos manter as informações atualizadas e corretas, a Manstec não se responsabiliza por eventuais erros de conteúdo, indisponibilidades técnicas ou prejuízos decorrentes do uso inadequado do site.
        </p>

        <h3>7. Links externos</h3>
        <p>
          Nosso site pode conter links para sites de terceiros. A Manstec não se responsabiliza pelo conteúdo, políticas ou práticas desses sites externos.
        </p>

        <h3>8. Atualização dos termos</h3>
        <p>
          Estes Termos de Uso podem ser atualizados periodicamente. Recomendamos que o usuário revise esta página com frequência para estar ciente de quaisquer mudanças.
        </p>

        <h3>9. Contato</h3>
        <p>
          Para dúvidas sobre estes termos, entre em contato com nossa equipe pelo e-mail: <a href="mailto:contato@manstec.com.br">contato@manstec.com.br</a>
        </p>

      </div>
    </div>
  </div>
</div>

@include('includes.footer')
