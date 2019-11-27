<?php

namespace App\Repositories;

use App\Models\Periodos;
use App\Repositories\BaseRepository;

/**
 * Class PeriodosRepository
 * @package App\Repositories
 * @version November 23, 2019, 5:55 am UTC
*/

class PeriodosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
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
        return Periodos::class;
    }
}
