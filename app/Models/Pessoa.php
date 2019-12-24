<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Pessoa extends Model
{

    public $table = 'pessoas';



    public $fillable = [
        'nome',
        'cpf',
        'idmembro',
        'dataafiliacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nome' => 'string',
        'cpf' => 'string',
        'idmembro' => 'string',
        'dataafiliacao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
