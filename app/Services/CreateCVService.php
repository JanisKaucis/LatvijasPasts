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
    private GetCVSession $getCVSession;

    public function __construct(Request $request,GetCVSession $getCVSession)
    {
        $this->request = $request;
        $this->getCVSession = $getCVSession;
    }

    public function showCVFormData():array
    {
        return $this->getCVSession->getSessionData();
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
