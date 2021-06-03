<?php
namespace App\Http\Controllers;

use App\Services\ShowCVService;

class ShowCVController
{
    private ShowCVService $showCVService;

    public function __construct(ShowCVService $showCVService)
    {
        $this->showCVService = $showCVService;
    }

    public function showCV()
    {
     $result = $this->showCVService->showCVData();
        return view('CV',$result);
    }
}
