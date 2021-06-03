<?php

namespace App\Services;


use App\Models\personCV;
use Illuminate\Http\Request;

class CreateCVService
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function showCVFormData():array
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

    public function handleCreateCV()
    {
        if (empty($this->request->input('create'))) {
            return;
        }
        $vards = $this->request->input('vards');
        $uzvards = $this->request->input('uzvards');
        $talrunis = $this->request->input('talrunis');
        $epasts = $this->request->input('epasts');
        $valsts = $this->request->input('valsts');
        $indekss = $this->request->input('indekss');
        $pilseta = $this->request->input('pilseta');
        $iela = $this->request->input('iela');
        $izglitibasNosaukums = '';
        $fakultate = '';
        $izglitibasLimenis = '';
        $statuss = '';
        $parIzglitibu = '';
        $darbaNosaukums = '';
        $amats = '';
        $slodze = '';
        $stazs = '';
        $parDarbu = '';
        $valoda = '';
        $valodasLimenis = '';
        for ($i = 1; $i <= 8; $i++) {
            $izglitibasNosaukums .= $this->request->input('izglitibasNosaukums' . $i) . '/';
            $fakultate .= $this->request->input('fakultate' . $i) . '/';
            $izglitibasLimenis .= $this->request->input('izglitibasLimenis' . $i) . '/';
            $statuss .= $this->request->input('statuss' . $i) . '/';
            $parIzglitibu .= $this->request->input('parIzglitibu' . $i) . '/';
            $darbaNosaukums .= $this->request->input('darbaNosaukums' . $i) . '/';
            $amats .= $this->request->input('amats' . $i) . '/';
            $slodze .= $this->request->input('slodze' . $i) . '/';
            $stazs .= $this->request->input('stazs' . $i) . '/';
            $parDarbu .= $this->request->input('parDarbu' . $i) . '/';
            $valoda .= $this->request->input('valoda' . $i) . '/';
            $valodasLimenis .= $this->request->input('valodasLimenis' . $i) . '/';
        }

        $prasmes = $this->request->input('prasmes');

        $citasPrasmes = $this->request->input('citasPrasmes');
        $intereses = $this->request->input('intereses');
        $papildusInfo = $this->request->input('papildusInfo');
        personCV::create([
            'vards' => $vards, 'uzvards' => $uzvards, 'talrunis' => $talrunis,
            'epasts' => $epasts, 'valsts' => $valsts, 'indekss' => $indekss,
            'pilseta' => $pilseta, 'iela' => $iela, 'izglitiba' => $izglitibasNosaukums,
            'fakultate' => $fakultate, 'izglitibas_limenis' => $izglitibasLimenis,
            'statuss' => $statuss, 'par_izglitibu' => $parIzglitibu, 'darbs' => $darbaNosaukums,
            'amats' => $amats, 'slodze' => $slodze, 'stazs' => $stazs, 'par_darbu' => $parDarbu,
            'prasmes' => $prasmes, 'valoda' => $valoda, 'valodas_limenis' => $valodasLimenis,
            'citas_prasmes' => $citasPrasmes, 'intereses' => $intereses, 'papildus_info' => $papildusInfo,
        ]);
    }
}
