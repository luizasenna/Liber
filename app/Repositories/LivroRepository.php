<?php

namespace App\Repositories;

use App\Models\Livro;
use InfyOm\Generator\Common\BaseRepository;

class LivroRepository extends BaseRepository
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
        return Livro::class;
    }
}
