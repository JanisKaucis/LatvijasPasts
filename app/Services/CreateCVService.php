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

    public function handleCreateCV() {
        if (empty($this->request->input('create'))){
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
        $izglitibasNosaukums = $this->request->input('izglitibasNosaukums');
        $fakultate = $this->request->input('fakultate');
        $izglitibasLimenis = $this->request->input('izglitibasLimenis');
        $statuss = $this->request->input('statuss');
        $parIzglitibu = $this->request->input('parIzglitibu');
        $darbaNosaukums = $this->request->input('darbaNosaukums');
        $amats = $this->request->input('amats');
        $slodze = $this->request->input('slodze');
        $stazs = $this->request->input('stazs');
        $parDarbu = $this->request->input('parDarbu');
        $prasmes = $this->request->input('prasmes');
        $valoda = $this->request->input('valoda');
        $valodasLimenis = $this->request->input('valodasLimenis');
        $citasPrasmes = $this->request->input('citasPrasmes');
        $intereses = $this->request->input('intereses');
        $papildusInfo = $this->request->input('papildusInfo');
        personCV::create([
            'vards' => $vards,'uzvards' => $uzvards,'talrunis' => $talrunis,
            'epasts' => $epasts, 'valsts' => $valsts,'indekss' => $indekss,
            'pilseta' => $pilseta,'iela' => $iela,'izglitiba' => $izglitibasNosaukums,
            'fakultate' => $fakultate,'izglitibas_limenis' => $izglitibasLimenis,
            'statuss' => $statuss,'par_izglitibu'=>$parIzglitibu,'darbs'=>$darbaNosaukums,
            'amats'=>$amats,'slodze'=>$slodze,'stazs'=>$stazs,'par_darbu'=>$parDarbu,
            'prasmes'=>$prasmes,'valoda'=>$valoda,'valodas_limenis'=>$valodasLimenis,
            'citas_prasmes'=>$citasPrasmes,'intereses'=>$intereses,'papildus_info'=>$papildusInfo,
            ]);
    }
}
