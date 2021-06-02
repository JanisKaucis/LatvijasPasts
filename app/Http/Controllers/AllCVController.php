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
        $this->allCVService->handleShowIzglitiba();
        $results = $this->allCVService->getResult();
        return view('allCVs', $results);
    }
    public function allCVManage() {
        $this->allCVService->deleteCV();
        $this->allCVService->editCV();

        if (empty($this->request->input('edit'))) {
            return redirect()->route('view');
        }
        return redirect()->route('create');
    }
}
