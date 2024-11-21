<?php

namespace App\Http\Controllers;


use App\Models\EtudiantImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class ImportController extends Controller
{
    //
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        Excel::import(new EtudiantImport, $request->file('file'));

        return redirect()->route('Etudiant.index')->with('success', 'Student imported successfully.');
    }

//    public function importPeriod(Request $request){
//        $request->validate([
//            'file' => 'required|mimes:xlsx,xls,csv',
//        ]);
//
//        Excel::import(new PeriodsImports, $request->file('file'));
//
//        return redirect()->route('periods.index')->with('success', 'Student imported successfully.');
//    }
}
