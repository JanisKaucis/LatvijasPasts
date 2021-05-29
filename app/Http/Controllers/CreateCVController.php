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
        return view('CreateCV');
    }
    public function createCVStore() {
        $this->createCVService->handleCreateCV();
        return redirect()->route('create');
    }
}
