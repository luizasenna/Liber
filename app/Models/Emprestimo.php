<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Emprestimo extends Model
{

    public $table = 'emprestimos';



    public $fillable = [
        'iduser',
        'idlivro',
        'datacriacao',
        'datadevolucao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iduser' => 'string',
        'idlivro' => 'string',
        'datacriacao' => 'string',
        'datadevolucao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
