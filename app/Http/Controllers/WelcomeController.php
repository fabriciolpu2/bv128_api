<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Filial;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Show the application landing.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        return view('welcome');
    }
}
