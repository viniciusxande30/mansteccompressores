@include('includes.top')

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
         
       <div class="fx-serve-1-area fix p-relative pt-120 pb-120">

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

                </div>
            </div>
        </div>

		

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
       
@include('includes.footer')

