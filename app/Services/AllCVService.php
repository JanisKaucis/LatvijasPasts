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

    public function deleteCV()
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
    public function editCV()
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
        $this->request->session()->put('vards', $cv->vards);
        $this->request->session()->put('uzvards', $cv->uzvards);
        $this->request->session()->put('talrunis', $cv->talrunis);
        $this->request->session()->put('epasts', $cv->epasts);
        $this->request->session()->put('valsts', $cv->valsts);
        $this->request->session()->put('indekss', $cv->indekss);
        $this->request->session()->put('pilseta', $cv->pilseta);
        $this->request->session()->put('iela', $cv->iela);
        $this->request->session()->put('izglitiba', $cv->izglitiba);
        $this->request->session()->put('fakultate', $cv->fakultate);
        $this->request->session()->put('izglitibas_limenis', $cv->izglitibas_limenis);
        $this->request->session()->put('statuss', $cv->statuss);
        $this->request->session()->put('par_izglitibu', $cv->par_izglitibu);
        $this->request->session()->put('darbs', $cv->darbs);
        $this->request->session()->put('amats', $cv->amats);
        $this->request->session()->put('slodze', $cv->slodze);
        $this->request->session()->put('stazs', $cv->stazs);
        $this->request->session()->put('par_darbu', $cv->par_darbu);
        $this->request->session()->put('prasmes', $cv->prasmes);
        $this->request->session()->put('valoda', $cv->valoda);
        $this->request->session()->put('valodas_limenis', $cv->valodas_limenis);
        $this->request->session()->put('citas_prasmes', $cv->citas_prasmes);
        $this->request->session()->put('intereses', $cv->intereses);
        $this->request->session()->put('papildus_info', $cv->papildus_info);
    }

    public function getResult()
    {
        return $this->result;
    }

    private function getAllCVFromDB()
    {
        $allCV = personCV::all();
        return $allCV;
    }
}
