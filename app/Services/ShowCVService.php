<?php
namespace App\Services;

use Illuminate\Http\Request;

class ShowCVService
{
    private Request $request;
    private GetCVSession $getCVSession;

    public function __construct(Request $request,GetCVSession $getCVSession)
    {
        $this->request = $request;
        $this->getCVSession = $getCVSession;
    }
    public function showCVData():array
    {
        return $this->getCVSession->getSessionData();
    }

}
