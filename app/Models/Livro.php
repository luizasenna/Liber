<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Livro extends Model
{

    public $table = 'livros';



    public $fillable = [
        'titulo',
        'idautor',
        'idtipo',
        'descricao',
        'codigobarras',
        'isbn',
        'edicao',
        'ideditora',
        'ano'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'titulo' => 'string',
        'idautor' => 'string',
        'idtipo' => 'string',
        'descricao' => 'string',
        'codigobarras' => 'string',
        'isbn' => 'string',
        'edicao' => 'string',
        'ideditora' => 'string',
        'ano' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function autor() {
        return $this->belongsTo('App\Models\Autor', 'idautor');
    }

    public function tipo() {
        return $this->belongsTo('App\Models\Tipos', 'idtipo');
    }

    public function editora() {
        return $this->belongsTo('App\Models\Editora', 'ideditora');
    }

    public function classificação() {
        return $this->belongsTo('App\Models\Classificacao', 'idclassificacao');
    }



}
