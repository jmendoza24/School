<?php

namespace App\Repositories;

use App\Models\documentacion;
use App\Repositories\BaseRepository;

/**
 * Class documentacionRepository
 * @package App\Repositories
 * @version November 26, 2019, 9:51 pm UTC
*/

class documentacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_alumno',
        'acta_nacimiento',
        'curp',
        'comentarios'
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
        return documentacion::class;
    }
}
