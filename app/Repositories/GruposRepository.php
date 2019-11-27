<?php

namespace App\Repositories;

use App\Models\Grupos;
use App\Repositories\BaseRepository;

/**
 * Class GruposRepository
 * @package App\Repositories
 * @version November 23, 2019, 5:56 am UTC
*/

class GruposRepository extends BaseRepository
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
        return Grupos::class;
    }
}
