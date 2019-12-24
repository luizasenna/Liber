<?php

namespace App\Repositories;

use App\Models\Pessoa;
use InfyOm\Generator\Common\BaseRepository;

class PessoaRepository extends BaseRepository
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
        return Pessoa::class;
    }
}
