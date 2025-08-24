@include('includes.top')



<div class="breadcrumb-area bg-default " data-background="{{URL('/')}}/assets/img/hero/h2-bg-1.png">
            <div class="container fx-container-1">
                <div class="breadcrumb-wrap">

                    <!-- left-content -->
                    <div class="breadcrumb-content">

                        <div class="breadcrumb-list " >
                            <a href="{{URL('/')}}">Home</a>
                            <a href="{{URL('/')}}/compressores-de-ar">Compressores de Ar</a>
							<span>{{ $destino }}</span>
                        </div>

                        <h1 class="breadcrumb-title fx-heading-1 text-uppercase " data-txaa-split-text-1 >Compressores de Ar em {{ $destino }}</h1>
                        

                    </div>

                </div>
            </div>
        </div>





 <!-- contact-us-start -->
        <div class="fx-contact-us-1-area">
            <div class="container fx-container-1">
                <div class="row align-items-center">
                    <!-- left-side -->
                    <div class="col-lg-6">
                        <div class="fx-contact-us-1-left">
                            <!-- section-title -->
                            <div class="fx-blog-1-scn-title mb-35 mt-35">
                                <h2 class="fx-scn-title-1 txaa-split-text-3 txaa-split-text-3-ani" style="font-size:30px">Fazemos a Manutenção de Compressores de Ar em {{ $destino }}</h2>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1829.8445369099181!2d-46.30377363585612!3d-23.47167742070201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7b683d89a3a9%3A0x9b86b94c333764a0!2sManstec%20Compressores!5e0!3m2!1spt-BR!2sbr!4v1755444602361!5m2!1spt-BR!2sbr"width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>								
                            </div>
                            <div class="fx-contact-us-1-content fix">
                                <div class="fx-contact-us-1-info-box fix txxaslideup">
                                    <h6 class="box-title fx-heading-1 fx-font-400">Endereço</h6>
                                    <p class="address fx-para-1 has-clr-white">
                                        <span class="txxaslideup-item fx-cube-1">R. Arapiraca, 311 - Jardim Napoli, Itaquaquecetuba - SP, 08595-620</span>
                                    </p>
                                </div>
                                <div class="fx-contact-us-1-info-box txxaslideup fix">
                                    <h6 class="box-title fx-heading-1 fx-font-400">Entre em Contato</h6>
                                    <ul class="info-list txxaslideup-item fx-cube-1" >
                                        <li>
                                            <a href="#" aria-label="name">
                                                <i class="fa-regular fa-envelope"></i>
                                                comercial@mansteccompressores.com.br
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="name">
                                                <i class="fa-light fa-phone-volume"></i>
                                                +351 969 558 556
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact-us-end -->

        <div class="fx-gap-12"></div>

        <div class="fx-gap-12"></div>

@include('includes.footer')
