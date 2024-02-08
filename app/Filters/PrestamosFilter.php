<?php   
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class PrestamosFilter extends ApiFilter
{
    
    protected $safeParams = [
        'id'=>['eq'],
        'libro_id'=>['eq'],
        'cliente_id'=>['eq'],
        'fecha_prestamo'=>['eq'],
        'dias_prestamo'=>['eq'],
        'estado'=>['eq'],
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