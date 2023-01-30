<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Sheets;
use App\Sheets3;
use App\C1answers;

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
        $maleCount = C1answers::where('sex', '0')->count();

        $femaleCount = C1answers::where('sex', '1')->count();



        return view('home', compact('femaleCount', 'maleCount'));
    }

    public function pdf()
    {
        return view('print_forms.pdftemplate');
    }
    public function forms(){
        return view('form_blades.formss');
    }
}
