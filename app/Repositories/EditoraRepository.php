<?php

namespace App\Repositories;

use App\Models\Editora;
use InfyOm\Generator\Common\BaseRepository;

class EditoraRepository extends BaseRepository
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
        return Editora::class;
    }
}
