<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    //
    public function pdfView(){
        $employee = Employee::all();
        return view('pdf',[
            'employee'=>$employee
        ]);
    }
    public function downloadPDF(){
        $employee = Employee::all();
//        $data = [
//
//            "full_name"=> "john do",
//
//            "email"=> "john@example.com",
//
//            "age"=>"23",
//
//            "phone"=>"998877XXXX",
//
//        ];
        view()->share('employee',$employee);

        $pdf = PDF::loadView('pdf',[
            'employee'=>$employee
        ])->setPaper('A4', 'landscape');

        return $pdf->download('teknowize.pdf');

    }
}
