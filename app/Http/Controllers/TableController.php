<?php

namespace App\Http\Controllers;
use App\Sheets;
use App\Sheets2;
use App\Sheets3;
use App\Sheets4;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use App\C1answers;
use Illuminate\Support\Facades\App;

use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {

        $products = C1answers::all();
        return view('datatables.datatables',compact('products'));

    }
    public function edit(Sheets $sheets)
    {
        return view('datatables.editer',compact('sheets'));
    }

    public function destroy($id)
    {
        $data1 = Sheets::find($id);
        $data2 = Sheets2::find($id);
        $data3 = Sheets3::find($id);
        $data4 = Sheets4::find($id);

        $data1->delete();
        $data2->delete();
        $data3->delete();
        $data4->delete();


        return back()->with('message', 'successfully deleted');
    }
    // public function pdf_print(){
    //     $id = $_GET['formid'];
    //     $data1 = Sheets::find($id);

    //     $pdf = App::make('snappy.pdf.wrapper');
    //     $pdf = PDF::loadView('pdf.pds', $data1);
    //     activity()->log('PDF Form Downloaded');

    //     return $pdf->download('c1form.pdf');
    // }
    public function pdf_print(){
        $id = $_GET['formid'];

        $form = C1answers::where('id', $id)->first();

        $answersc1 = json_decode($form->c1answers, true);
        $answersc2 = json_decode($form->c2answers, true);
        $answersc3 = json_decode($form->c3answers, true);
        $answersc4 = json_decode($form->c4answers, true);
        $surname = $form->surname;
        $firstname = $form->surname;
        $sex = $form->sex;

        $pdf = App::make('snappy.pdf.wrapper');
        $pdf = PDF::loadvIEW('pdf.pdftemplate', compact('answersc1', 'answersc2', 'answersc3', 'answersc4', 'firstname', 'surname', 'sex'));

        return $pdf->stream('pdsform.pdf');
    }
}
