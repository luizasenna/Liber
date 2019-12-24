<?php

namespace App\Repositories;

use App\Models\Classificacao;
use InfyOm\Generator\Common\BaseRepository;

class ClassificacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Classificacao::class;
    }
}
