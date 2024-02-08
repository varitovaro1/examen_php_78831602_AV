<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Http\Resources\LibroCollection;
use App\Filters\LibroFilter;

class LibroController extends Controller
{
    public function index(Request $request){
 
        $filter =  new LibroFilter();
        $queryItems = $filter->transform($request);

        $libro = Libro::where($queryItems);
        return new LibroCollection($libro->paginate()->appends($request->query()));    
    }
}
