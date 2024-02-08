<?php   
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class ClienteFilter extends ApiFilter
{
    
    protected $safeParams = [
        'id'=>['eq'],
        'name'=>['eq'],
        'email'=>['eq'],
        'celular'=>['eq'],
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