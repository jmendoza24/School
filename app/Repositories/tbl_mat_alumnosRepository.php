<?php

namespace App\Repositories;

use App\Models\tbl_mat_alumnos;
use App\Repositories\BaseRepository;

/**
 * Class tbl_mat_alumnosRepository
 * @package App\Repositories
 * @version December 12, 2019, 5:45 am UTC
*/

class tbl_mat_alumnosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_alumno',
        'id_materia',
        'calificacion',
        'comentarios',
        'school_cycle',
        'grade'
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
        return tbl_mat_alumnos::class;
    }
}
