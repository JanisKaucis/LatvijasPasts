<?php
namespace App\Http\Controllers;

use App\Services\AllCVService;
use Illuminate\Http\Request;

class AllCVController
{
    private AllCVService $allCVService;
    private Request $request;

    public function __construct(AllCVService $allCVService, Request $request)
    {
        $this->allCVService = $allCVService;
        $this->request = $request;
    }

    public function allCVShow() {
        $this->allCVService->handleSeeAllCV();
        $this->allCVService->handleMultiple();
        $results = $this->allCVService->getResult();
        return view('allCVs', $results);
    }
    public function allCVManage() {
        $this->allCVService->deleteCV();
        $this->allCVService->editCV();
        $this->allCVService->showCV();
        if (!empty($this->request->input('edit'))) {
            return redirect()->route('create');
        }elseif (!empty($this->request->input('show'))){
            return redirect()->route('show');
        }else
        return redirect()->route('view');
    }
}
