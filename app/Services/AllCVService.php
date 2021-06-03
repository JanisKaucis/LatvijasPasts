<?php

namespace App\Services;

use App\Models\personCV;
use Illuminate\Http\Request;
use function Symfony\Component\Translation\t;

class AllCVService
{
    private $result;
    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function handleSeeAllCV()
    {
        $this->result['results'] = personCV::orderBy('id')->simplePaginate(1);
    }

    public function handleMultiple()
    {
        foreach ($this->result['results'] as $result) {
            $izglitibasNosaukumsArray = explode('/', $result->izglitiba);
            $fakultateArray = explode('/', $result->fakultate);
            $izglitibasLimenisArray = explode('/', $result->izglitibas_limenis);
            $statussArray = explode('/', $result->statuss);
            $parIzglitibuArray = explode('/', $result->par_izglitibu);
            $darbsArray = explode('/', $result->darbs);
            $amatsArray = explode('/', $result->amats);
            $slodzeArray = explode('/', $result->slodze);
            $stazsArray = explode('/', $result->stazs);
            $parDarbuArray = explode('/', $result->par_darbu);
            $valodaArray = explode('/', $result->valoda);
            $valodasLimenisArray = explode('/', $result->valodas_limenis);
        }

            $this->result['nosaukums'] = $izglitibasNosaukumsArray;
            $this->result['fakultate'] = $fakultateArray;
            $this->result['izglitibasLimenis'] = $izglitibasLimenisArray;
            $this->result['statuss'] = $statussArray;
            $this->result['parIzglitibu'] = $parIzglitibuArray;
            $this->result['darbs'] = $darbsArray;
            $this->result['amats'] = $amatsArray;
            $this->result['slodze'] = $slodzeArray;
            $this->result['stazs'] = $stazsArray;
            $this->result['parDarbu'] = $parDarbuArray;
            $this->result['valoda'] = $valodaArray;
            $this->result['valodasLimenis'] = $valodasLimenisArray;

    }

    public
    function deleteCV()
    {
        if (empty($this->request->input('delete'))) {
            return;
        }
        $allCV = $this->getAllCVFromDB();
        foreach ($allCV as $cv) {
            if ($cv->id = $this->request->input('delete_id')) {
                personCV::where(['id' => $this->request->input('delete_id')])->delete();
            }
        }
    }

    public
    function editCV()
    {
        if (empty($this->request->input('edit'))) {
            return;
        }
        $allCV = $this->getAllCVFromDB();
        foreach ($allCV as $cv) {
            if ($cv->id = $this->request->input('edit_id')) {
                $cv = personCV::where(['id' => $this->request->input('edit_id')])->first();
            }
        }
        $this->handleSeeAllCV();
        $this->handleMultiple();
        $this->request->session()->put('vards', $cv->vards);
        $this->request->session()->put('uzvards', $cv->uzvards);
        $this->request->session()->put('talrunis', $cv->talrunis);
        $this->request->session()->put('epasts', $cv->epasts);
        $this->request->session()->put('valsts', $cv->valsts);
        $this->request->session()->put('indekss', $cv->indekss);
        $this->request->session()->put('pilseta', $cv->pilseta);
        $this->request->session()->put('iela', $cv->iela);
        $this->request->session()->put('izglitiba', $this->result['nosaukums']);
        $this->request->session()->put('fakultate', $this->result['fakultate']);
        $this->request->session()->put('izglitibas_limenis', $this->result['izglitibasLimenis']);
        $this->request->session()->put('statuss', $this->result['statuss']);
        $this->request->session()->put('par_izglitibu', $this->result['parIzglitibu']);
        $this->request->session()->put('darbs', $this->result['darbs']);
        $this->request->session()->put('amats', $this->result['amats']);
        $this->request->session()->put('slodze', $this->result['slodze']);
        $this->request->session()->put('stazs', $this->result['stazs']);
        $this->request->session()->put('par_darbu', $this->result['parDarbu']);
        $this->request->session()->put('prasmes', $cv->prasmes);
        $this->request->session()->put('valoda', $this->result['valoda']);
        $this->request->session()->put('valodas_limenis', $this->result['valodasLimenis']);
        $this->request->session()->put('citas_prasmes', $cv->citas_prasmes);
        $this->request->session()->put('intereses', $cv->intereses);
        $this->request->session()->put('papildus_info', $cv->papildus_info);
    }

    public
    function getResult()
    {
        return $this->result;
    }

    private
    function getAllCVFromDB()
    {
        $allCV = personCV::all();
        return $allCV;
    }
}
