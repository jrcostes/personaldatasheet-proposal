<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        // return view('home');
        // $genderCount_form1 = DB::select("SELECT * FROM sheets WHERE sex = 'male'")->count();

        $genderCount = DB::table('sheets')
                ->where('sex', 'male')
                ->count();


        return view('home', compact('genderCount'));
    }

    public function pdf()
    {
        return view('print_forms.pdftemplate');
    }
    public function forms(){
        return view('form_blades.formss');
    }
}
