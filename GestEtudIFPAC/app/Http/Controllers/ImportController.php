<?php

namespace App\Http\Controllers;

use App\Imports\CampusImport ;
use App\Models\EtudiantImport;
use App\Imports\FilieresImport;
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

    public function importCampus(Request $request)
    {
        // dd("importing....");

        // $request->validate([
        //     'file' => 'required|mimes:xlsx,xls,csv',
        // ]);

        // Excel::import(new CampusImport, $request->file('file'));
        
        // return redirect()->route('Campus.index')->with('success', 'Student imported successfully.');


        try {
            Excel::import(new CampusImport, $request->file('file'));
            return redirect()->route('Campus.index')->with('success', 'Campus importés avec succès.');
        } catch (\Exception $e) {
            return back()->withErrors(['file' => 'Erreur lors de l\'importation : ' . $e->getMessage()]);
        }
        

    }

    public function importFiliere(Request $request){
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

       Excel::import(new FilieresImport, $request->file('file'));
    
        return redirect()->route('filiere.index')->with('success', 'Student imported successfully.');
    }
}
