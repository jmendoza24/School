<?php

namespace App\Repositories;

use App\Models\alumnos_documentos;
use App\Repositories\BaseRepository;

/**
 * Class alumnos_documentosRepository
 * @package App\Repositories
 * @version November 30, 2019, 7:42 am UTC
*/

class alumnos_documentosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_alumno',
        'id_documento',
        'documento'
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
        return alumnos_documentos::class;
    }
}
