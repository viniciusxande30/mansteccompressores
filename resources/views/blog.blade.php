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

                    <!-- single-item -->
                    <div class="fx-serve-1-slider-item">
                        <div class="item-img fix img-cover">
                            <img src="assets/img/serve/s1-img-1.png" alt="">
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
                    <div class="fx-serve-1-slider-item">
                        <div class="item-img fix img-cover">
                            <img src="assets/img/serve/s1-img-1.png" alt="">
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
       
@include('includes.footer')

