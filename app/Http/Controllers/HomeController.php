<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $logins = DB::table('logins')
        ->select(DB::raw('MONTH(created_at) as month'), 'type', DB::raw('COUNT(id) as total'))
        ->groupBy('month', 'type')
        ->orderBy('month')
        ->get();

    $months = [];
    $loginData = [];
    $registerData = [];

    foreach ($logins as $login) {
        $monthName = Carbon::create()->month($login->month)->format('F');

        if (!in_array($monthName, $months)) {
            $months[] = $monthName;
        }

        if ($login->type == 'login') {
            $loginData[] = $login->total;
        } else {
            $registerData[] = $login->total;
        }
    }
    return view('home', compact('months', 'loginData', 'registerData'));
    }
}
