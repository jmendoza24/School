<?php

namespace App\Repositories;

use App\Models\alumnos;
use App\Repositories\BaseRepository;

/**
 * Class alumnosRepository
 * @package App\Repositories
 * @version November 21, 2019, 5:11 am UTC
*/

class alumnosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'direccion',
        'grado',
        'grupo',
        'salon'
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
        return alumnos::class;
    }
}
