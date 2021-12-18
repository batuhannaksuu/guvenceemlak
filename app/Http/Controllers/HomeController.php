<?php

namespace App\Http\Controllers;

use App\Services\OfficeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $officeService;
    public function __construct(OfficeService $officeService)
    {
        $this->officeService = $officeService;
    }

    public function index()
    {
        $office = $this->officeService->getOffice();
        return view('home.index',compact('office'));
    }
}
