<?php

namespace App\Http\Controllers;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\App;
use App\Form;
use App\Sheets;
use App\Sheets2;
use App\Sheets3;
use App\Sheets4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class PostController extends Controller
{
    //storing functions
    public function c1form(Request $request){
        $request->all();

        Sheets::create($request->all());

        return redirect('/')
            ->with('success','Entry Saved');
    }

    public function c2form(Request $request){
        $request->all();

        Sheets2::create($request->all());

        return redirect('/')
            ->with('success','Entry Saved');
    }

    public function c3form(Request $request)
    {
        $request->all();

        Sheets3::create($request->all());

        return redirect('/')
            ->with('success','Entry Saved');
    }

    public function c4form(Request $request){

        $request->all();

        Sheets4::create($request->all());

        return redirect('/')
            ->with('success','Entry Saved');
    }

}
