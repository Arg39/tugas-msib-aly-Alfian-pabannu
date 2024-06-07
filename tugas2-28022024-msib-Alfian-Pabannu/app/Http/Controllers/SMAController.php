<?php

namespace App\Http\Controllers;

use App\Models\SMA;
use App\Http\Requests\StoreSMARequest;
use App\Http\Requests\UpdateSMARequest;

class SMAController extends Controller
{
    public function index()
    {
        return view('home',[
            'page' => 'home',
        ]);
    }
    public function about()
    {
        return view('about',[
            'page' => 'about',
        ]);
    }
    public function pendaftaran()
    {
        return view('input-data',[
            'page' => 'pendaftaran',
        ]);
    }
}
