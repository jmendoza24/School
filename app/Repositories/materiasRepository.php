<?php

namespace App\Repositories;

use App\Models\materias;
use App\Repositories\BaseRepository;

/**
 * Class materiasRepository
 * @package App\Repositories
 * @version November 27, 2019, 4:39 am UTC
*/

class materiasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nivel',
        'grado',
        'materia'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return materias::class;
    }
}
