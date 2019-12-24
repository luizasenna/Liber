<?php

namespace App\Repositories;

use App\Models\Autor;
use InfyOm\Generator\Common\BaseRepository;

class AutorRepository extends BaseRepository
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
        return Autor::class;
    }
}
