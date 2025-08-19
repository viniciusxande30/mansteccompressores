@include('includes.top')
        <div class="breadcrumb-area bg-default " data-background="assets/img/hero/h2-bg-1.png">
            <div class="container fx-container-1">
                <div class="breadcrumb-wrap">

                    <!-- left-content -->
                    <div class="breadcrumb-content">

                        <div class="breadcrumb-list " >
                            <a href="{{URL('/')}}">Home</a>
                            <span>Compressores de Ar</span>
                        </div>

                        <h1 class="breadcrumb-title fx-heading-1 text-uppercase " data-txaa-split-text-1 >Compressores de Ar Áreas que atuamos</h1>
                        

                    </div>

                </div>
            </div>
        </div>

<section class="fx-page-routes">
  <div class="fx-serve-1-area">
    <div class="section-head">

      {{-- BUSCA / FILTRO --}}
      <form method="GET"
            action="{{ url('/') }}/compressores-de-ar"
            class="search-bar"
            role="search"
            aria-label="Buscar rotas">
        <input type="hidden" name="origem" value="{{ $origemSlug ?? '' }}">
        <div class="input-group">
          <input
            type="text"
            name="q"
            value="{{ isset($filtro) ? htmlspecialchars($filtro) : '' }}"
            placeholder="Buscar cidade de destino..."
            class="form-control"
            aria-label="Digite a cidade de destino"
          >
          <button type="submit" class="btn btn-primary" aria-label="Executar busca">Buscar</button>
        </div>
      </form>
    </div>

    <div class="fx-services-wrap">
      {{-- LISTA DINÂMICA NO PRIMEIRO LAYOUT DE ÍCONES --}}
      <div class="fx-services-page-item">
        @forelse ($rotas as $rota)
          <div class="fx-serve-1-slider-item">
            <div class="content">
              <h5 class="item-title fx-heading-1 fx-font-500">
                <a
                  href="{{ url('/compressores-de-ar' . '/' . $rota['destino_slug']) }}"
                  aria-label="{{ $rota['destino'] }}"
                >
                  {{ $rota['destino'] }}
                </a>
              </h5>

              <a
                class="item-btn"
                href="{{ url('/compressores-de-ar' . '/' . $rota['destino_slug']) }}"
                aria-label="{{ $rota['destino'] }}"
              >
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                     xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false">
                  <path d="M40 20C40 8.97219 31.0278 -3.92187e-07 20 -8.74228e-07C8.97219 -1.35627e-06 -3.92187e-07 8.97219 -8.74228e-07 20C-1.35627e-06 31.0278 8.97219 40 20 40C31.0278 40 40 31.0278 40 20ZM2.5 20C2.5 10.3503 10.3503 2.5 20 2.5C29.6497 2.5 37.5 10.3503 37.5 20C37.5 29.6497 29.6497 37.5 20 37.5C10.3503 37.5 2.5 29.6497 2.5 20ZM22.1337 27.1338C21.6453 27.6222 20.8544 27.6222 20.3662 27.1338C20.1222 26.8897 20 26.5697 20 26.25C20 25.9303 20.1222 25.6103 20.3662 25.3662L24.4825 21.25L12.5 21.25C11.8091 21.25 11.25 20.6903 11.25 20C11.25 19.3097 11.8091 18.75 12.5 18.75L24.4825 18.75L20.3663 14.6337C19.8778 14.1453 19.8778 13.3544 20.3663 12.8662C20.8547 12.3781 21.6456 12.3778 22.1337 12.8662L28.3837 19.1163C28.8722 19.6047 28.8722 20.3956 28.3837 20.8838L22.1337 27.1338Z"
                        fill="#FC5220"></path>
                </svg>
              </a>
            </div>
          </div>
        @empty
          <p class="text-center mt-2 w-100">Nenhuma rota encontrada para o filtro aplicado.</p>
        @endforelse
      </div>

      {{-- PAGINAÇÃO --}}
      <div class="pager-wrap">
        @php
          $paginaAtual = $paginaAtual ?? 1;
          $totalPaginas = $totalPaginas ?? 1;
          $filtroValor = isset($filtro) ? $filtro : '';
          $origemValor = $origemSlug ?? '';
        @endphp

        @if ($paginaAtual > 1)
          <a
            href="?origem={{ $origemValor }}&q={{ urlencode($filtroValor) }}&page={{ $paginaAtual - 1 }}"
            class="btn btn-outline-primary me-2"
            aria-label="Página anterior"
            rel="prev"
          >← Anterior</a>
        @endif

        <span class="mx-2">Página {{ $paginaAtual }} de {{ $totalPaginas }}</span>

        @if ($paginaAtual < $totalPaginas)
          <a
            href="?origem={{ $origemValor }}&q={{ urlencode($filtroValor) }}&page={{ $paginaAtual + 1 }}"
            class="btn btn-outline-primary ms-2"
            aria-label="Próxima página"
            rel="next"
          >Próxima →</a>
        @endif
      </div>
    </div>
  </div>
</section>

@include('includes.footer')
