<?php

namespace App\Http\Controllers;

use App\Services\CreateCVService;
use Illuminate\Http\Request;

class CreateCVController extends Controller
{
    private $createCVService;

    public function __construct(CreateCVService $createCVService)
    {
        $this->createCVService = $createCVService;
    }

    public function createCVShow() {
        $result = $this->createCVService->showCVFormData();
        return view('CreateCV', $result);
    }
    public function createCVStore() {
        $this->createCVService->handleCreateCV();
        return redirect()->route('create');
//        return view('CreateCV');
    }
}
