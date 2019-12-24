<?php

namespace App\Repositories;

use App\Models\Tipos;
use InfyOm\Generator\Common\BaseRepository;

class TiposRepository extends BaseRepository
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
        return Tipos::class;
    }
}
