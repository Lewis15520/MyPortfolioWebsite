<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;

class ViewController extends Controller
{
    public function getIndexView()
    {
        return view('pages.home');
    }

    public function getCvView()
    {
        $pdf = app()->make('dompdf.wrapper');
        $pdf->loadHTML(view('pdf.resume')->render());
        return $pdf->stream();
    }
}
