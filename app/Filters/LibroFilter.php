<?php   
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class LibroFilter extends ApiFilter
{
    
    protected $safeParams = [
        'id'=>['eq'],
        'titulo'=>['eq'],
        'autor_id'=>['eq'],
        'lote'=>['eq'],
        'description'=>['eq'],
        'updated_at'=>['eq'],
        'created_at'=>['eq'],

    ];
    protected $columnMap = [];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '<',
        'gte' => '=>',
    ];
}