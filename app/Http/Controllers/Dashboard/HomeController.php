<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public string $homeView = 'dashboard.home.';

    public function index()
    {
        $homeView = $this->homeView;
        return \view($homeView . 'index');
    }
}
