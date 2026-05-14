@include('includes.top')

<style>
/* ====== GERAL ====== */
section {
  padding-top: 20px;
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


.manstec-lead-fab {
  position: fixed;
  left: 22px;
  bottom: 30px;
  z-index: 1100;
  border: 0;
  border-radius: 999px;
  padding: 14px 22px;
  background: linear-gradient(110deg, #ff5f00, #ff8a00);
  color: #fff;
  font-size: 15px;
  font-weight: 700;
  box-shadow: 0 16px 34px rgba(255, 95, 0, 0.35);
  transition: transform 0.25s ease, box-shadow 0.25s ease;
  animation: manstecLeadPulse 1.7s infinite;
}
.cbh-phone {
  right: 8px;
  left: auto;
  z-index: 1090;
}
body.manstec-popup-open .manstec-lead-fab,
body.manstec-popup-open .cbh-phone {
  opacity: 0;
  pointer-events: none;
}
.manstec-lead-fab span {
  display: block;
  font-size: 12px;
  font-weight: 500;
  opacity: 0.92;
}
.manstec-lead-fab:hover {
  transform: translateY(-3px);
  box-shadow: 0 20px 34px rgba(255, 95, 0, 0.45);
}
@keyframes manstecLeadPulse {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-2px); }
}

.manstec-popup-open {
  overflow: hidden;
}
.manstec-lead-modal .modal-dialog {
  max-width: min(1100px, calc(100% - 24px));
}
.manstec-lead-modal {
  z-index: 2100;
}
.modal-backdrop.show {
  z-index: 2090;
}
.manstec-lead-modal .modal-content {
  border: 0;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 28px 90px rgba(0, 0, 0, 0.35);
}
.manstec-lead-modal .modal-body {
  padding: 0;
}
.manstec-popup-card {
  animation: manstecPopupIn 0.3s ease;
}
.manstec-popup-layout {
  display: grid;
  grid-template-columns: 40% 60%;
}
@keyframes manstecPopupIn {
  from { opacity: 0; transform: translateY(12px) scale(0.98); }
  to { opacity: 1; transform: translateY(0) scale(1); }
}
.manstec-popup-close {
  position: absolute;
  right: 12px;
  top: 12px;
  border: 1px solid rgba(255, 255, 255, 0.32);
  width: 36px;
  height: 36px;
  line-height: 1;
  border-radius: 50%;
  background: rgba(9, 29, 56, 0.45);
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  z-index: 2;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}
.manstec-popup-close:hover {
  background: rgba(9, 29, 56, 0.75);
}
.manstec-popup-side {
  background: linear-gradient(160deg, #0b2b56 0%, #0f437f 60%, #1e5da3 100%);
  color: #fff;
  padding: 24px 22px 20px;
  position: relative;
}
.manstec-popup-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 6px 12px;
  border-radius: 999px;
  background: rgba(255, 255, 255, 0.18);
  font-size: 12px;
  font-weight: 700;
  margin-bottom: 18px;
}
.manstec-popup-title {
  font-size: 28px;
  line-height: 1.2;
  margin-bottom: 12px;
  color: #fff;
}
.manstec-popup-text {
  margin-bottom: 20px;
  font-size: 15px;
  line-height: 1.55;
  opacity: 0.95;
}
.manstec-popup-list {
  margin: 0 0 18px;
  padding-left: 18px;
}
.manstec-popup-list li {
  margin-bottom: 8px;
}
.manstec-emergency-box {
  background: rgba(255, 255, 255, 0.13);
  border: 1px solid rgba(255, 255, 255, 0.22);
  border-radius: 14px;
  padding: 14px;
}
.manstec-emergency-box h5 {
  color: #fff;
  margin: 0 0 10px;
  font-size: 16px;
}
.manstec-emergency-box a {
  display: block;
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  margin-bottom: 6px;
}
.manstec-emergency-box a:hover {
  text-decoration: underline;
}

.manstec-popup-form-wrap {
  background: linear-gradient(175deg, #ffffff 0%, #f7fafc 100%);
  padding: 24px 22px 18px;
}
.manstec-popup-form-wrap h4 {
  margin: 0;
  color: #0d2b55;
  font-size: 32px;
}
.manstec-popup-form-wrap p {
  margin: 8px 0 20px;
  color: #375678;
  font-size: 14px;
}
.manstec-popup-form {
  display: grid;
  gap: 12px;
}
.manstec-popup-grid-2 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 12px;
}
.manstec-popup-form input,
.manstec-popup-form textarea {
  width: 100%;
  border: 1px solid #d3deec;
  border-radius: 12px;
  padding: 12px 13px;
  color: #0f2740;
  font-size: 14px;
  background: #fff;
}
.manstec-popup-form textarea {
  min-height: 96px;
  resize: vertical;
}
.manstec-popup-form input:focus,
.manstec-popup-form textarea:focus {
  border-color: #ff7a18;
  outline: none;
  box-shadow: 0 0 0 3px rgba(255, 122, 24, 0.16);
}
.manstec-popup-submit {
  border: 0;
  border-radius: 12px;
  padding: 13px 16px;
  background: linear-gradient(110deg, #ff5f00, #ff8a00);
  color: #fff;
  font-size: 15px;
  font-weight: 700;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.manstec-popup-submit:hover {
  transform: translateY(-1px);
  box-shadow: 0 10px 22px rgba(255, 95, 0, 0.3);
}
.manstec-popup-note {
  margin-top: 4px;
  color: #4f6a87;
  font-size: 12px;
}

@media (max-width: 1199.98px) {
  .manstec-lead-modal .modal-dialog {
    max-width: calc(100% - 16px);
  }
  .manstec-popup-layout {
    grid-template-columns: 42% 58%;
  }
  .manstec-popup-side {
    padding: 18px 16px 14px;
  }
  .manstec-popup-form-wrap {
    padding: 18px 16px 14px;
  }
  .manstec-popup-title {
    font-size: 26px;
    margin-bottom: 8px;
  }
  .manstec-popup-text {
    font-size: 14px;
    margin-bottom: 12px;
  }
  .manstec-popup-list {
    margin-bottom: 12px;
  }
  .manstec-popup-list li {
    margin-bottom: 6px;
  }
  .manstec-popup-form-wrap h4 {
    font-size: 28px;
  }
}

@media (max-width: 767.98px) {
  .manstec-lead-fab {
    left: 12px;
    right: auto;
    bottom: 104px;
    width: auto;
    max-width: 220px;
    text-align: left;
    font-size: 13px;
  }
  .manstec-lead-modal .modal-dialog {
    margin: 0;
    max-width: 100%;
    height: 100%;
  }
  .manstec-lead-modal .modal-content {
    height: 100%;
    border-radius: 0;
  }
  .manstec-lead-modal .modal-body {
    height: 100%;
    overflow-y: auto;
  }
  .manstec-popup-layout {
    grid-template-columns: 1fr;
  }
  .manstec-popup-close {
    background: rgba(9, 29, 56, 0.56);
    top: 8px;
    right: 8px;
    width: 34px;
    height: 34px;
    font-size: 20px;
  }
  .manstec-popup-side {
    padding: 16px 14px 12px;
  }
  .manstec-popup-badge {
    margin-bottom: 10px;
    font-size: 11px;
    padding: 5px 10px;
  }
  .manstec-popup-title {
    font-size: 19px;
    margin-bottom: 4px;
  }
  .manstec-emergency-box {
    padding: 10px 12px;
    border-radius: 10px;
  }
  .manstec-emergency-box h5 {
    font-size: 13px;
    margin-bottom: 7px;
  }
  .manstec-emergency-box a {
    font-size: 13px;
    margin-bottom: 3px;
  }
  .manstec-popup-form-wrap {
    padding: 16px 14px 14px;
  }
  .manstec-popup-form-wrap h4 {
    font-size: 20px;
  }
  .manstec-popup-form-wrap p {
    margin: 5px 0 10px;
    font-size: 12px;
  }
  .manstec-popup-grid-2 {
    grid-template-columns: 1fr;
  }
  .manstec-popup-form {
    gap: 8px;
  }
  .manstec-popup-form input,
  .manstec-popup-form textarea {
    padding: 10px 11px;
    font-size: 13px;
    border-radius: 10px;
  }
  .manstec-popup-form textarea {
    min-height: 72px;
  }
  .manstec-popup-submit {
    width: 100%;
    padding: 11px 14px;
    font-size: 14px;
  }
  .cbh-phone {
    right: 0;
    bottom: -16px;
  }
}

@media (max-width: 575.98px) {
  .manstec-lead-fab {
    max-width: 190px;
    padding: 11px 14px;
    bottom: 98px;
  }
  .manstec-lead-fab span {
    font-size: 11px;
  }
  .cbh-phone {
    right: -10px;
    bottom: -24px;
    transform: scale(0.88);
    transform-origin: right bottom;
  }
}

</style>


		<!-- hero-start -->
        <div class="fx-hero-2-area p-relative fix bg-default" data-background="assets/img/hero/h2-bg-1.png" >
            <div class="fx-hero-2-slider">
                <div class="swiper-container fx-hero-2-active fix">
                    <div class="swiper-wrapper">

                        <!-- single-slider -->
                        <div class="swiper-slide">
                            <div class="fx-hero-2-slider-item">

                                <div class="fx-hero-2-slider-item-img ">
                                    <img  src="assets/img/hero/h2-img-1.png" alt="">
                                </div>

                                <div class="container fx-container-1">
                                    <div class="fx-hero-2-slider-item-content">

                                       
                                        <h1 class="fx-hero-2-slider-item-title fx-heading-2 text-uppercase " data-txaa-split-text-1>Manutenção de Compressores de Ar</h1>
                                        <p class="fx-hero-2-slider-item-pera fx-para-1 has-clr-white fix"><span class="d-inline-block">Os nossos técnicos de manutenção certificados e peças de alta qualidade garantem a máxima disponibilidade do seu equipamento de ar comprimido.</span></p>

                                        <div class="fx-hero-2-slider-item-btn fix">
                                            <span class="d-inline-block">
                                                <a href="{{ URL('/') }}/contato" aria-label="name" class="fx-pr-btn-1 has-hover-white">
                                                    <span class="text" data-back="Entre em Contato Conosco" data-front="Entre em Contato Conosco"></span>
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- hero-end -->

        <button type="button" class="manstec-lead-fab" data-manstec-popup-open data-bs-toggle="modal" data-bs-target="#manstec-contact-popup">
            Atendimento de emerg&ecirc;ncia
        </button>

        <div class="modal fade manstec-lead-modal" id="manstec-contact-popup" tabindex="-1" aria-labelledby="manstec-popup-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl modal-fullscreen-sm-down">
                <div class="modal-content manstec-popup-card">
                    <div class="modal-body">
                        <div class="manstec-popup-layout">
                            <div class="manstec-popup-side">
                                <button type="button" class="manstec-popup-close" aria-label="Fechar formul&aacute;rio" data-bs-dismiss="modal" data-manstec-popup-close>&times;</button>
                                <span class="manstec-popup-badge"><i class="fa-solid fa-bolt"></i> Atendimento priorit&aacute;rio</span>
                                <h3 class="manstec-popup-title" id="manstec-popup-title">Fale com a MANSTEC agora</h3>
                                <p class="manstec-popup-text">Conte sua necessidade e nosso time t&eacute;cnico retorna com o melhor caminho para reduzir paradas e riscos operacionais.</p>

                                <ul class="manstec-popup-list">
                                    <li>An&aacute;lise inicial r&aacute;pida do seu cen&aacute;rio.</li>
                                    <li>Atendimento t&eacute;cnico especializado em compressores.</li>
                                    <li>Proposta objetiva para a&ccedil;&atilde;o imediata.</li>
                                </ul>

                                <div class="manstec-emergency-box">
                                    <h5>Telefones de emerg&ecirc;ncia</h5>
                                    <a href="tel:+351969558556"><i class="fa-light fa-phone-volume"></i> +351 969 558 556</a>
                                    
                                </div>
                            </div>

                            <div class="manstec-popup-form-wrap">
                                <h4>Formul&aacute;rio de contato</h4>
                                <p>Preencha os dados abaixo para receber contato do nosso especialista.</p>

                                @if(isset($success) && $success)
                                    <div class="alert alert-success">
                                        Solicita&ccedil;&atilde;o enviada com sucesso! Entraremos em contato em breve.
                                    </div>
                                @endif

                                <form action="{{ url('/') }}/send-email-home" method="POST" class="manstec-popup-form">
                                    <input type="text" name="id" value="form_popup_home" hidden>
                                    <input type="text" name="subject" value="Popup Home - Contato de emerg&ecirc;ncia" hidden>

                                    <div class="manstec-popup-grid-2">
                                        <input type="text" name="name" placeholder="Nome" required>
                                        <input type="text" name="company" placeholder="Empresa" required>
                                    </div>

                                    <input type="text" name="address" placeholder="Endere&ccedil;o" required>

                                    <div class="manstec-popup-grid-2">
                                        <input type="tel" name="phone" placeholder="Telefone" required>
                                        <input type="email" name="email" placeholder="E-mail" required>
                                    </div>

                                    <textarea name="description" placeholder="Uma breve descri&ccedil;&atilde;o do que precisa" required></textarea>
                                    <button type="submit" class="manstec-popup-submit">Quero falar com um especialista</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
       <div class="fx-serve-1-area fix p-relative pt-120 pb-20">

            <div class="container fx-container-1">

                <!-- section-title -->
                <div class="fx-serve-1-scn-title mb-45">
                    <h2 class="fx-scn-title-2 txaa-split-text-3 txaa-split-text-3-ani" id="nossos-servicos">Nossos Serviços</h2>
				</div>


                <div class="fx-services-page-item">

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item">
                        <div class="item-img fix img-cover">
                            <img src="assets/img/serve/s1-img-1.png" alt="">
                        </div>

                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/manutencao-preventiva" aria-label="name">Manutenção Preventiva</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/manutencao-preventiva" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                    
                    <div class="fx-serve-1-slider-item">
                        <div class="item-img fix img-cover">
                            <img src="assets/img/serve/s1-img-2.png" alt="">
                        </div>
                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/manutencao-corretiva" aria-label="name">Manutenção Corretiva e Diagnósticos</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/manutencao-corretiva" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="fx-serve-1-slider-item">
                        <div class="item-img fix img-cover">
                            <img src="assets/img/serve/s1-img-3.png" alt="">
                        </div>
                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/kits-de-servico" aria-label="name">Kits de Serviço e Peças Originais</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/kits-de-servico" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="fx-serve-1-slider-item">
                        <div class="item-img fix img-cover">
                            <img src="assets/img/serve/s1-img-4.png" alt="">
                        </div>
                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/contratos-de-servico" aria-label="name">Contratos de Serviço Fixo</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/contratos-de-servico" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="fx-serve-1-slider-item">
                        <div class="item-img fix img-cover">
                            <img src="assets/img/serve/s1-img-5.png" alt="">
                        </div>
                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/auditoria-e-inspecoes" aria-label="name">Auditorias e Inspeções</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/auditoria-e-inspecoes" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                     <div class="fx-serve-1-slider-item">
                        <div class="item-img fix img-cover">
                            <img src="assets/img/contact/c2-img-1.png" alt="">
                        </div>
                        <div class="content">
                            <h5 class="item-title fx-heading-1 fx-font-500">
                                <a href="{{ url('/') }}/redes-de-ar" aria-label="name">Projetos e Manutenção em Redes de Ar</a>
                            </h5>
                            
                            <a class="item-btn" href="{{ url('/') }}/redes-de-ar" aria-label="name">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z" fill="#FC5220"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


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

		

        <!-- services-start -->
        <div class="fx-services-2-area bg-default pt-120 pb-120 p-relative " data-background="assets/img/services/s2-bg-1.png">
            <div class="container fx-container-1">
                <!-- section-title -->
                <div class="fx-services-2-scn-title mb-55">
                    <h6 class="fx-subtitle-1 has-mb-28 has-clr-white">
                        <span>02</span>
                        <span class="txaa-split-text-2 txaa-split-text-2-ani"  >Quem Somos</span>
                    </h6>
                    <h2 class="fx-scn-title-2 txaa-split-text-3 txaa-split-text-3-ani has-clr-white">POR QUE ESCOLHER A MANSTEC COMO PARCEIRO DE MANUTENÇÃO?</h2>
                </div>

                <div class="fx-services-2-wrap mb-55">

                    <!-- single-card -->
                    <div class="fx-services-2-card">
                        <img src="assets/img/services/s2-card-illus.png" alt="" class="card-shape">
                        <div class="card-bg img-cover fix">
                            <img src="assets/img/services/s2-card-bg.png" alt="">
                        </div>
                       
                        <h5 class="card-title fx-heading-2 fx-font-600 has-clr-white">
                            Cobertura em São Paulo
                        </h5>
                        <p class="card-disc fx-para-1 has-opacity-7 has-clr-white has-opacity-7">Confie na nossa equipe de técnicos de manutenção com formação na fábrica para garantir que o seu ar comprimido tem 100% de disponibilidade.</p>
                        
                    </div>

                    <!-- single-card -->
                    <div class="fx-services-2-card">
                        <img src="assets/img/services/s2-card-illus.png" alt="" class="card-shape">
                        <div class="card-bg img-cover fix">
                            <img src="assets/img/services/s2-card-bg.png" alt="">
                        </div>
                        
                        <h5 class="card-title fx-heading-2 fx-font-600 has-clr-white">
                           Peças Originais para Compressores de Ar
                        </h5>
                        <p class="card-disc fx-para-1 has-opacity-7 has-clr-white has-opacity-7">Peças originais para compressores mantém a sua instalação de ar comprimido nas melhores condições durante todo o ciclo de vida.</p>
                       
                    </div>

                    <!-- single-card -->
                    <div class="fx-services-2-card">
                        <img src="assets/img/services/s2-card-illus.png" alt="" class="card-shape">
                        
                         <div class="card-bg img-cover fix">
                            <img src="assets/img/services/s2-card-bg.png" alt="">
                        </div>
                        <h5 class="card-title fx-heading-2 fx-font-600 has-clr-white">
                            Suporte ao Cliente
                        </h5>
                        <p class="card-disc fx-para-1 has-opacity-7 has-clr-white has-opacity-7">Com técnicos qualificados e experientes, estamos sempre atentos ao seu equipamento para detectar anomalias e corrigi-las, se necessário.</p>
                        
                    </div>

                    <!-- single-card -->
                    <div class="fx-services-2-card">
                        <img src="assets/img/services/s2-card-illus.png" alt="" class="card-shape">
                        <div class="card-bg img-cover fix">
                            <img src="assets/img/services/s2-card-bg.png" alt="">
                        </div>
                        
                        <h5 class="card-title fx-heading-2 fx-font-600 has-clr-white">
                            Time Qualificado para a sua Demanda
                        </h5>
                        <p class="card-disc fx-para-1 has-opacity-7 has-clr-white has-opacity-7">Trabalhamos com um time extremamente qualificado e com anos de experiência para resolver o seu problema.</p>
                        
                    </div>

                </div>

                <div class="text-center txxaslideup fix">
                    <p class="fx-services-2-para fx-para-1 has-clr-white">Saiba mais sobre nossa área de atuação</p>
                    <span class="txxaslideup-item ">
                        <a href="{{ url('/') }}/compressores-de-ar" aria-label="name" class="fx-services-2-btn" style="color:white">Veja nossa área de atuação</a>
                    </span>
                </div>
            </div>
            <div class="fx-services-2-bg-img fix">
                <img class="txaaslideright fx-cube-1" src="assets/img/services/s2-img-1.png" alt="">
            </div>
        </div>
        <!-- services-end -->

        <!-- core-services-start -->
        <div class="fx-core-1-area pt-120 pb-120 fix p-relative">
            <div class="container fx-container-1">

                <!-- slider -->
                <div class="fx-core-1-slider p-relative ">
                    <div class="swiper-container fix fx-core-1-active mb-35">
                        <div class="swiper-wrapper">

                            <!-- single-slider -->
                            <div class="swiper-slide">
                                <div class="fx-core-1-slider-item">

                                    <!-- left -->
                                    <div class="fx-core-1-slider-item-content">
                
                                        <div class="subtitle-flex">
                                            <h6 class="fx-hero-2-slider-item-number fx-heading-1">
                                                <span>01</span>
                                                <span>/</span>
                                                <span>04</span>
                                            </h6>
                                            <h6 class="fx-subtitle-1 ">
                                                <span class="txaa-split-text-2 "  >Nossos Serviços</span>
                                            </h6>
                                        </div>
    
                                        <div class="title-wrap">
                                            <h2 class="fx-scn-title-2">Peças para </h2>
                                            <h2 class="fx-scn-title-2">Compressores de Ar</h2>
                                        </div>
    
                                        <p class="fx-para-1 disc">Trabahamos com as melhores marcas de compressores de ar para melhor atender a sua empresa.</p>
    
                                        <div class="btn-wrap fix">
                                            <span class="d-inline-block fx-core-1-slideinup" >
                                                <a href="https://wa.me/351969558556?text=Olá,%20gostaria%20de%20falar%20com%20você!" aria-label="name" class="fx-pr-btn-1">
                                                    <span class="text" data-back="Entre em Contato" data-front="Entre em Contato"></span>
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                            </span>
                                        </div>
            
                                    </div>
    
                                    <div class="fx-core-1-slider-item-img fix img-cover">
                                        <img src="{{ URL('/') }}/assets/img/services/s2-img-1.png" alt="">
                                    </div>
    
                                    <div class="fx-core-1-slider-item-feature">
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Peças Genuínas, Resultados Garantidos</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Utilize somente peças originais e mantenha o máximo desempenho e vida útil do seu compressor.</p>
                                        </div>
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Compatibilidade Total com Seu Equipamento</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Soluções desenvolvidas para todas as marcas, garantindo perfeita integração.</p>
                                        </div>
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Menos Paradas, Mais Produção</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Reduza o tempo de inatividade com peças de reposição de rápida aplicação e alta durabilidade.</p>
                                        </div>
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Confiança em Cada Intervenção</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Tenha a tranquilidade de saber que seu equipamento está protegido com peças aprovadas pela fabricante.</p>
                                        </div>
                                    </div>
    
                                </div>
                            </div>

                            <!-- single-slider -->
                            <div class="swiper-slide">
                                <div class="fx-core-1-slider-item">

                                    <!-- left -->
                                    <div class="fx-core-1-slider-item-content">
                
                                        <div class="subtitle-flex">
                                            <h6 class="fx-hero-2-slider-item-number fx-heading-1">
                                                <span>02</span>
                                                <span>/</span>
                                                <span>04</span>
                                            </h6>
                                            <h6 class="fx-subtitle-1 ">
                                                <span class="txaa-split-text-2 "  >Nossos Serviços</span>
                                            </h6>
                                        </div>
    
                                        <div class="title-wrap">
                                            <h2 class="fx-scn-title-2">MANUTENÇÃO DE </h2>
                                            <h2 class="fx-scn-title-2">COMPRESSORES DE AR</h2>
                                        </div>
    
                                        <p class="fx-para-1 disc">Reduza o custo total de propriedade e beneficie de um desempenho ideal dos seus compressores com um plano de manutenção de compressores de ar.</p>
    
                                        <div class="btn-wrap fix">
                                            <span class="d-inline-block fx-core-1-slideinup" >
                                                <a href="https://wa.me/351969558556?text=Olá,%20gostaria%20de%20falar%20com%20você!" aria-label="name" class="fx-pr-btn-1">
                                                    <span class="text" data-back="Entre em Contato" data-front="Entre em Contato"></span>
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                            </span>
                                        </div>
            
                                    </div>
    
                                    <div class="fx-core-1-slider-item-img fix img-cover">
                                        <img src="assets/img/services/core-1-img-2.png" alt="">
                                    </div>
    
                                    <div class="fx-core-1-slider-item-feature">
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Plano Personalizado para Sua Operação</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Criamos rotinas de manutenção sob medida para manter seus compressores sempre operando no máximo.</p>
                                        </div>
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Reduza Custos com Eficiência</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Evite surpresas e gastos excessivos com manutenções corretivas — cuide antes e economize depois.</p>
                                        </div>
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Equipe Técnica Especializada</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Contamos com profissionais treinados para atender qualquer necessidade com agilidade e precisão.</p>
                                        </div>
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Manutenção Preventiva Inteligente</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Com tecnologia e planejamento, garantimos mais segurança e longevidade para seus compressores.</p>
                                        </div>
                                    </div>
    
                                </div>
                            </div>

                            <!-- single-slider -->
                            <div class="swiper-slide">
                                <div class="fx-core-1-slider-item">

                                    <!-- left -->
                                    <div class="fx-core-1-slider-item-content">
                
                                        <div class="subtitle-flex">
                                            <h6 class="fx-hero-2-slider-item-number fx-heading-1">
                                                <span>03</span>
                                                <span>/</span>
                                                <span>04</span>
                                            </h6>
                                            <h6 class="fx-subtitle-1 ">
                                                <span class="txaa-split-text-2 "  >Nossos Serviços</span>
                                            </h6>
                                        </div>
    
                                        <div class="title-wrap">
                                            <h2 class="fx-scn-title-2">Eficiência do</h2>
                                            <h2 class="fx-scn-title-2">Ar Comprimido</h2>
                                        </div>
    
                                        <p class="fx-para-1 disc">Poupe no consumo de energia e usufrua de um tempo operacional máximo, através da análise, monitorização e otimização da sua sala do compressor.</p>
    
                                        <div class="btn-wrap fix">
                                            <span class="d-inline-block fx-core-1-slideinup" >
                                                <a href="https://wa.me/351969558556?text=Olá,%20gostaria%20de%20falar%20com%20você!" aria-label="name" class="fx-pr-btn-1">
                                                    <span class="text" data-back="Entre em Contato" data-front="Entre em Contato"></span>
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                            </span>
                                        </div>
            
                                    </div>
    
                                    <div class="fx-core-1-slider-item-img fix img-cover">
                                        <img src="assets/img/services/core-1-img-3.png" alt="">
                                    </div>
    
                                    <div class="fx-core-1-slider-item-feature">
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Diagnóstico Energético Avançado</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Analisamos o desempenho do seu sistema e indicamos melhorias reais na eficiência energética.</p>
                                        </div>
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Economia Sustentável</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Reduza sua conta de energia com soluções que respeitam o meio ambiente e o seu orçamento.</p>
                                        </div>
    
                                      
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Otimização Contínua da Sala de Ar</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Identificamos gargalos e ajustamos seu sistema para um rendimento máximo e contínuo.</p>
                                        </div>
                                    </div>
    
                                </div>
                            </div>

							                            <!-- single-slider -->
                            <div class="swiper-slide">
                                <div class="fx-core-1-slider-item">

                                    <!-- left -->
                                    <div class="fx-core-1-slider-item-content">
                
                                        <div class="subtitle-flex">
                                            <h6 class="fx-hero-2-slider-item-number fx-heading-1">
                                                <span>04</span>
                                                <span>/</span>
                                                <span>04</span>
                                            </h6>
                                            <h6 class="fx-subtitle-1 ">
                                                <span class="txaa-split-text-2 "  >Nossos Serviços</span>
                                            </h6>
                                        </div>
    
                                        <div class="title-wrap">
                                            <h2 class="fx-scn-title-2">SERVIÇOS PARA</h2>
                                            <h2 class="fx-scn-title-2"> Compressores de Ar</h2>
                                        </div>
    
                                        <p class="fx-para-1 disc">Serviço confiável para compressores de ar. As reparações, a manutenção e as inspeções podem ser agendadas rapidamente para manter as suas instalações operacionais e produtivas.</p>
    
                                        <div class="btn-wrap fix">
                                            <span class="d-inline-block fx-core-1-slideinup" >
                                                <a href="https://wa.me/351969558556?text=Olá,%20gostaria%20de%20falar%20com%20você!" aria-label="name" class="fx-pr-btn-1">
                                                    <span class="text" data-back="Entre em Contato" data-front="Entre em Contato"></span>
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                            </span>
                                        </div>
            
                                    </div>
    
                                    <div class="fx-core-1-slider-item-img fix img-cover">
                                        <img src="assets/img/services/core-1-img-3.png" alt="">
                                    </div>
    
                                    <div class="fx-core-1-slider-item-feature">
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Agilidade no Atendimento Técnico</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Respostas rápidas e agendamentos flexíveis para manter sua produção em funcionamento.</p>
                                        </div>
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Manutenção Especializada em Grandes Equipamentos</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Nossos especialistas cuidam do seu compressor de ar com precisão e segurança.</p>
                                        </div>
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Reparos de Alta Performance</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Utilizamos tecnologia de ponta e peças de qualidade para restaurar o desempenho original.</p>
                                        </div>
    
                                        <!-- single-item -->
                                        <div class="fx-core-1-slider-item-feature-single">
                                            <h5 class="item-title fx-heading-2 fx-font-600 fix">
                                                <span class="fx-core-1-slideinup">Confiabilidade para Seu Processo Produtivo</span>
                                            </h5>
                                            <p class="item-disc fx-para-1 has-opacity-7">Minimize riscos e maximize resultados com serviços certificados para compressores de ar industriais.</p>
                                        </div>
                                    </div>
    
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="fx-core-1-slider-pagination text-center fix">
                        <div class="fx-slider-pagi-1 fx-core1-pagination">

                        </div>
                    </div>

                    <div class="fx-core-1-slider-btn">
                        <div class="fx-slider-btn-1">
                            <div class="fx-slider-btn-1-item  fx-core1-slider-prev">
                                <i class="fa-solid fa-angle-left"></i>
                                <i class="fa-solid fa-angle-left"></i>
                            </div>
                            <div class="fx-slider-btn-1-item  fx-core1-slider-next">
                                <i class="fa-solid fa-angle-right"></i>
                                <i class="fa-solid fa-angle-right"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="fx-core-1-bg img-cover fix">
                <img src="assets/img/services/core1-bg.png" alt="">
            </div>            
        </div>
        <!-- core-services-end -->
       
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
                                <img src="assets/img/contact/c2-img-1.png" alt="">
                            </div>

                            <div class="fx-contact-us-1-content fix">

                                <!-- single-box -->
                                <div class="fx-contact-us-1-info-box fix txxaslideup bg-default" data-background="assets/img/contact/c2-box-bg-1.png">
                                    <h6 class="box-title fx-heading-1 fx-font-400">Endereço:</h6>
                                    <p class="address fx-para-1 has-clr-white">
                                        <span class="txxaslideup-item fx-cube-1">Rua Arapiraca, 311 - Jardim Napoli Itaquaquecetuba - SP 08595-620 - Brasil</span>
                                    </p>
                                </div>

                                <!-- single-box -->
                                <div class="fx-contact-us-1-info-box txxaslideup fix bg-default"  data-background="assets/img/contact/c2-box-bg-2.png">
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
       
<script>
    (function () {
        var popupElement = document.getElementById('manstec-contact-popup');
        if (!popupElement) {
            return;
        }

        var storageKey = 'manstec_contact_popup_closed_until';
        var openDelay = 2200;
        var closeHours = 8;
        var initDone = false;

        function rememberClose() {
            try {
                var blockedUntil = Date.now() + (closeHours * 60 * 60 * 1000);
                localStorage.setItem(storageKey, String(blockedUntil));
            } catch (error) {}
        }

        function canAutoOpen() {
            try {
                var blockedUntil = parseInt(localStorage.getItem(storageKey), 10);
                if (isNaN(blockedUntil)) {
                    return true;
                }
                return Date.now() > blockedUntil;
            } catch (error) {
                return true;
            }
        }

        var closeButtons = document.querySelectorAll('[data-manstec-popup-close]');

        function initPopupWithBootstrap(retryCount) {
            if (initDone) {
                return;
            }

            if (typeof window.bootstrap === 'undefined' || !window.bootstrap.Modal) {
                if (retryCount < 40) {
                    window.setTimeout(function () {
                        initPopupWithBootstrap(retryCount + 1);
                    }, 150);
                }
                return;
            }

            initDone = true;
            var popupInstance = window.bootstrap.Modal.getOrCreateInstance(popupElement);

            closeButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    rememberClose();
                });
            });

            popupElement.addEventListener('shown.bs.modal', function () {
                document.body.classList.add('manstec-popup-open');
            });

            popupElement.addEventListener('hidden.bs.modal', function () {
                document.body.classList.remove('manstec-popup-open');
                rememberClose();
            });

            if (canAutoOpen()) {
                window.setTimeout(function () {
                    popupInstance.show();
                }, openDelay);
            }
        }

        initPopupWithBootstrap(0);
    })();
</script>

@include('includes.footer')

