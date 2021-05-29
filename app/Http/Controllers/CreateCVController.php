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
        $this->createCVService->handleCreateCV();
        return view('CreateCV');
    }
}
