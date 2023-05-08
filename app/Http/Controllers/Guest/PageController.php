<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $trains = Trains::all();
        $trains = Trains::where('orario_di_partenza', '>=', Carbon::now('Europe/Rome'))->get();

        return view('home', compact('trains'));
    }
}
