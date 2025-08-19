<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function homeIndex(){
        return view('site');
    }
    public function teste(){
        return view('teste');
    }
    // public function servicoSites(){
    //     return view('desenvolvimento-de-sites');
    // }
    // public function portfolio(){
    //     return view('portfolio');
    // }
    public function sobreNos(){
        return view('sobre-nos');
    }

    public function servicoSeo(){
        return view('consultoria-de-seo');
    }
    public function servicoSites(){
        return view('desenvolvimento-de-sites');
    }
    public function servicoDesign(){
        return view('design-grafico');
    }
    public function servicoSocialMedia(){
        return view('social-media');
    }
    public function servicoTrafegoPago(){
        return view('trafego-pago');
    }
    public function servicoSistemas(){
        return view('desenvolvimento-de-sistemas');
    }

    public function contato(){
        return view('contato');
    }
    public function sitesPremium(){
        return view('sites-premium');
    }
    
}

