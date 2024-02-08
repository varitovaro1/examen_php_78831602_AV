<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Resources\ClienteCollection;
use App\Filters\ClienteFilter;

class ClienteController extends Controller
{
    //
    public function index(Request $request){
 
        $filter =  new ClienteFilter();
        $queryItems = $filter->transform($request);

        $cliente = Cliente::where($queryItems);
        return new clienteCollection($cliente->paginate()->appends($request->query()));

        // $cliente = Cliente::paginate();
        // return new clienteCollection($cliente);
    
    }
}
