<?php

namespace App\Repositories;

use App\Models\asistencias;
use App\Repositories\BaseRepository;

/**
 * Class asistenciasRepository
 * @package App\Repositories
 * @version December 29, 2019, 5:03 am UTC
*/

class asistenciasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_alumno',
        'asistencia'
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
        return asistencias::class;
    }
}
