<?php
namespace App\Services;
use Illuminate\Http\Request;

class GetCVSession
{
    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getSessionData()
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
        $this->request->session()->forget('vards');
        $this->request->session()->forget('uzvards');
        $this->request->session()->forget('talrunis');
        $this->request->session()->forget('epasts');
        $this->request->session()->forget('valsts');
        $this->request->session()->forget('indekss');
        $this->request->session()->forget('pilseta');
        $this->request->session()->forget('iela');
        $this->request->session()->forget('izglitiba');
        $this->request->session()->forget('fakultate');
        $this->request->session()->forget('izglitibas_limenis');
        $this->request->session()->forget('statuss');
        $this->request->session()->forget('par_izglitibu');
        $this->request->session()->forget('darbs');
        $this->request->session()->forget('amats');
        $this->request->session()->forget('slodze');
        $this->request->session()->forget('stazs');
        $this->request->session()->forget('par_darbu');
        $this->request->session()->forget('prasmes');
        $this->request->session()->forget('valoda');
        $this->request->session()->forget('valodas_limenis');
        $this->request->session()->forget('citas_prasmes');
        $this->request->session()->forget('intereses');
        $this->request->session()->forget('papildus_info');
        return $result;
    }
}
