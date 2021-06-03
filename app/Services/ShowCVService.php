<?php
namespace App\Services;

use Illuminate\Http\Request;

class ShowCVService
{
    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function showCVData():array
    {
        $result = [
            'vards' => $this->request->session()->get('vards'),
            'uzvards' => $this->request->session()->get('uzvards'),
            'talrunis' => $this->request->session()->get('talrunis'),
            'epasts' => $this->request->session()->get('epasts'),
            'valsts' => $this->request->session()->get('valsts'),
            'indekss' => $this->request->session()->get('indekss'),
            'pilseta' => $this->request->session()->get('pilseta'),
            'iela' => $this->request->session()->get('iela'),
            'izglitiba' => $this->request->session()->get('izglitiba'),
            'fakultate' => $this->request->session()->get('fakultate'),
            'izglitibasLimenis' => $this->request->session()->get('izglitibas_limenis'),
            'statuss' => $this->request->session()->get('statuss'),
            'parIzglitibu' => $this->request->session()->get('par_izglitibu'),
            'darbs' => $this->request->session()->get('darbs'),
            'amats' => $this->request->session()->get('amats'),
            'slodze' => $this->request->session()->get('slodze'),
            'stazs' => $this->request->session()->get('stazs'),
            'parDarbu' => $this->request->session()->get('par_darbu'),
            'prasmes' => $this->request->session()->get('prasmes'),
            'valoda' => $this->request->session()->get('valoda'),
            'valodasLimenis' => $this->request->session()->get('valodas_limenis'),
            'citasPrasmes' => $this->request->session()->get('citas_prasmes'),
            'intereses' => $this->request->session()->get('intereses'),
            'papildusInfo' => $this->request->session()->get('papildus_info'),
        ];
        return $result;
    }
    
}
