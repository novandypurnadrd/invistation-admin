<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Model\Source_tbl;

class source extends Controller
{
    public function show($source_id)
    {
    	$table = Source_tbl::where('source_id',$source_id)->get()->first();
   
    	return view('otherpage\source',['table'=>$table]);
    }

    
}
