<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\Import;
use App\Exports\Export;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\testModel as MainModel;

class testController extends Controller
{
    public function import(Request $request){
        $path = $request->file->getRealPath();
        Excel::import(new Import , $path);
        return back();
    }

    public function export(){
    
        return Excel::download(new Export , 'test.xlsx');
     
    }
}
