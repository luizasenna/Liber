<?php

namespace App\Repositories;

use App\Models\Emprestimo;
use InfyOm\Generator\Common\BaseRepository;

class EmprestimoRepository extends BaseRepository
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
        return Emprestimo::class;
    }
}
