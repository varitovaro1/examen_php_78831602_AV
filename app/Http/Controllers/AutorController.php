<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use App\Http\Resources\AutorCollection;
use App\Filters\Autorfilter;

class AutorController extends Controller
{
    //
    public function index(Request $request){
        //$autor = Autor::all();
        $filter =  new AutorFilter();
        $queryItems = $filter->transform($request);

        $autor = Autor::where($queryItems);
        return new autorCollection($autor->paginate()->appends($request->query()));
        //return Autor::all();
    }
}
