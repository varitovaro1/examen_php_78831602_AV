<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamos;
use App\Http\Resources\PrestamosCollection;
use App\Filters\PrestamosFilter;
use App\http\Requests\StorePrestamosRequest;
use App\Http\Resources\PrestamosResource;


class PrestamosController extends Controller
{
    public function index(Request $request){
 
        $filter =  new PrestamosFilter();
        $queryItems = $filter->transform($request);

        $prestamos = Prestamos::where($queryItems);
        return new prestamosCollection($prestamos->paginate()->appends($request->query()));    
    }
    public function store(StorePrestamosRequest $request)  {
        //
        return new PrestamosResource(Prestamos::create($request->all()));
    }
}
