<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Model\Costumer_tbl;

class costumer extends Controller
{
    public function show($id)
    {

    	$table = Costumer_tbl::where('id',$id)->get()->first();
   
    	return view('otherpage\costumer',['table'=>$table]);
    }

    
}
