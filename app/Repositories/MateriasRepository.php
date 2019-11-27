<?php

namespace App\Repositories;

use App\Models\Materias;
use App\Repositories\BaseRepository;

/**
 * Class MateriasRepository
 * @package App\Repositories
 * @version November 23, 2019, 5:54 am UTC
*/

class MateriasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'activo'
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
        return Materias::class;
    }
}
