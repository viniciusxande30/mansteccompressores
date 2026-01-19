<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class TransporteController extends Controller
{
    public function mostrarRota($destino)
    {
        $path = url('/');
        $jsonPath = base_path('public/js/cidades-brasileiras.json');
        if (!File::exists($jsonPath)) {
            abort(500, 'Arquivo de cidades não encontrado.');
        }

        $cidades = json_decode(File::get($jsonPath), true);

        // $origemCidade = collect($cidades)->firstWhere('slug', $origem);
        $destinoCidade = collect($cidades)->firstWhere('slug', $destino);

        if (!$destinoCidade) {
            abort(404, 'Cidade de origem ou destino não encontrada.');
        }

        return view('rotas.compressores_de_ar_em', [
            'destino' => $destinoCidade['cidade'],
        ]);
    }
    public function contato(){
        return view('contato');
    }
        public function sobreNos(){
        return view('sobre-nos');
    }
        public function servicos(){
        return view('nossos-servicos');
    }
            public function auditoria(){
        return view('auditoria');
    }
            public function contratos(){
        return view('contratos-de-servico');
    }
            public function kits(){
        return view('kits-de-servicos');
    }
            public function manutencaoCorretiva(){
        return view('manutencao-corretiva');
    }

    public function redes(){
        return view('redes');
    }
            public function manutencaoPreventiva(){
        return view('manutencao-preventiva');
    }
            public function monitoramento(){
        return view('monitoramento');
    }
            public function politicas(){
        return view('politicas-de-privacidade');
    }
            public function termos(){
        return view('termos-de-uso');
    }
    public function blog(){
        return view('blog');
    }

        public function custoOperacional(){
        return view('artigos.custo-operacional');
    }
    public function manutencaoPreventivaCompressores(){
        return view('artigos.manutencao-preventiva');
    }
        public function vazamentosdeArComprimido(){
        return view('artigos.vazamentos-de-ar-comprimido');
    }

//LISTA TODAS AS
private function removerAcentos($string)
{
    return preg_replace(
        [
            '/á|à|ã|â|ä/i',
            '/é|è|ê|ë/i',
            '/í|ì|î|ï/i',
            '/ó|ò|õ|ô|ö/i',
            '/ú|ù|û|ü/i',
            '/ç/i'
        ],
        ['a', 'e', 'i', 'o', 'u', 'c'],
        $string
    );
}

private function normalizarSlug($string)
{
    $string = $this->removerAcentos($string);
    $string = str_replace([' ', '_'], '-', strtolower($string));
    return $string;
}

public function listarRotas(Request $request)
{
    $jsonPath = base_path('public/js/cidades-brasileiras.json');

    if (!file_exists($jsonPath)) {
        return response('Arquivo de cidades não encontrado.', 500);
    }

    $cidades = json_decode(file_get_contents($jsonPath), true);

    // Captura e normaliza o valor do destino/origem
    $slugOrigemInput = strtolower($request->input('destino', 'sao-paulo-sp'));
    $slugOrigem = $this->normalizarSlug($slugOrigemInput);

    // Captura e normaliza o termo de busca (filtro)
    $filtroBusca = strtolower($request->input('q'));
    $filtroBuscaNormalizado = $this->removerAcentos($filtroBusca);

    $pagina = (int) $request->input('page', 1);
    $porPagina = 21;

    // Busca a cidade de origem com slug normalizado
    $cidadeOrigem = collect($cidades)->firstWhere('slug', $slugOrigem);
    if (!$cidadeOrigem) {
        return response('Cidade de origem inválida.', 404);
    }

    $rotas = [];
    foreach ($cidades as $destino) {
        if ($destino['slug'] !== $cidadeOrigem['slug']) {
            $cidadeDestinoNormalizado = $this->removerAcentos(strtolower($destino['cidade']));

            if (!$filtroBusca || str_contains($cidadeDestinoNormalizado, $filtroBuscaNormalizado)) {
                $rotas[] = [
                    'origem' => $cidadeOrigem['cidade'],
                    'origem_slug' => $cidadeOrigem['slug'],
                    'destino' => $destino['cidade'],
                    'destino_slug' => $destino['slug'],
                ];
            }
        }
    }

    $totalPaginas = ceil(count($rotas) / $porPagina);
    $offset = ($pagina - 1) * $porPagina;
    $rotasPaginadas = array_slice($rotas, $offset, $porPagina);

    return view('rotas.lista', [
        'rotas' => $rotasPaginadas,
        'paginaAtual' => $pagina,
        'totalPaginas' => $totalPaginas,
        'filtro' => $filtroBusca,
        'origemAtual' => $cidadeOrigem['cidade'],
        'origemSlug' => $cidadeOrigem['slug'],
    ]);
}

}