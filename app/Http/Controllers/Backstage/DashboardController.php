<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backstage.dashboard.index');
    }
}
