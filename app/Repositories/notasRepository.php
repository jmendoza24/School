<?php

namespace App\Repositories;

use App\Models\notas;
use App\Repositories\BaseRepository;

/**
 * Class notasRepository
 * @package App\Repositories
 * @version December 15, 2019, 11:08 pm UTC
*/

class notasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_alumno',
        'nota'
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
        return notas::class;
    }
}
