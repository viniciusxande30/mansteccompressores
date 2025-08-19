<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;


class RotaController extends Controller
{
    private $cidades;

    public function __construct()
    {
        // Carregar o JSON com a estrutura 'cidade' e 'slug'
        $this->cidades = json_decode(file_get_contents(base_path('public/assets/js/cidades-brasileiras.json')), true);
    }



    



    

    // Função para buscar a cidade pelo slug
    private function recuperarCidadePeloSlug($slug)
    {
        foreach ($this->cidades as $cidade) {
            if ($cidade['slug'] === $slug) {
                return $cidade; // Retorna a cidade completa (slug e nome)
            }
        }
        return false; // Retorna falso se a cidade não for encontrada
    }

    // Função para gerar rotas relacionadas dentro do mesmo estado
    private function gerarRotasRelacionadas($origem, $quantidade = 10)
    {
        $estadoOrigem = substr($origem['slug'], -2); // Pega a sigla do estado (últimos dois caracteres do slug)
        $cidadesMesmoEstado = array_filter($this->cidades, function ($cidade) use ($estadoOrigem) {
            return substr($cidade['slug'], -2) === $estadoOrigem;
        });

        $rotasRelacionadas = [];
        $cidadesMesmoEstado = array_values($cidadesMesmoEstado); // Reorganiza os índices

        // Gera rotas relacionadas aleatórias do mesmo estado
        while (count($rotasRelacionadas) < $quantidade && count($cidadesMesmoEstado) > 1) {
            $destinoAleatorio = $cidadesMesmoEstado[array_rand($cidadesMesmoEstado)];

            // Evitar que a origem e o destino sejam iguais
            if ($origem['slug'] !== $destinoAleatorio['slug']) {
                $rotasRelacionadas[] = [
                    'origem' => $origem['cidade'],
                    'destino' => $destinoAleatorio['cidade'],
                    'url' => url("/rotas/{$origem['slug']}/{$destinoAleatorio['slug']}")
                ];
            }
        }

        return $rotasRelacionadas;
    }

    public function exibirCotacao($origem_slug, $destino_slug)
    {
        $origem = $this->recuperarCidadePeloSlug($origem_slug);
        $destino = $this->recuperarCidadePeloSlug($destino_slug);

        // Se a origem ou destino não for encontrada, exibe a página de erro
        if (!$origem || !$destino) {
            return view('cidade_nao_encontrada', [
                'origem_slug' => $origem_slug,
                'destino_slug' => $destino_slug,
            ]);
        }

        // Gerar o título e descrição para SEO
        $titulo_seo = "Frete de {$origem['cidade']} para {$destino['cidade']} - Faça sua Cotação de Frete";
        $descricao_seo = "Consulte o valor do frete de {$origem['cidade']} para {$destino['cidade']}. Obtenha a melhor cotação de transporte de cargas no estado de " . substr($origem['cidade'], -2) . ".";

        // Gerar rotas relacionadas dentro do mesmo estado
        $rotasRelacionadas = $this->gerarRotasRelacionadas($origem);

        return view('cotacao', [
            'titulo_seo' => $titulo_seo,
            'descricao_seo' => $descricao_seo,
            'origem' => $origem['cidade'],
            'destino' => $destino['cidade'],
            'rotasRelacionadas' => $rotasRelacionadas,
        ]);
    }








    public function listarRotas(Request $request)
    {
        // Carregar o arquivo JSON com as rotas
        $path = base_path('public/assets/js/cidades-brasileiras.json');
        $rotas = json_decode(file_get_contents($path), true);

        // Adicionar URL base para as rotas
        foreach ($rotas as &$rota) {
            $rota['url'] = url('/rotas/' . $rota['slug'] . '/'.$rota['slug']);
        }

        // Definir o número de itens por página
        $perPage = 51;
        $currentPage = $request->get('page', 1);

        // Criar o paginator
        $paginator = new LengthAwarePaginator(
            array_slice($rotas, ($currentPage - 1) * $perPage, $perPage),
            count($rotas),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        // Definir a URL base para a paginação
        $paginator->setPath($request->url());

        return view('rotas', ['rotas' => $paginator]);
    }







}