<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Editora extends Model
{

    public $table = 'editoras';



    public $fillable = [
        'nome'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nome' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
