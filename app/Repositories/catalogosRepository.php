<?php

namespace App\Repositories;

use App\Models\catalogos;
use App\Repositories\BaseRepository;

/**
 * Class catalogosRepository
 * @package App\Repositories
 * @version November 23, 2019, 5:16 am UTC
*/

class catalogosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'catalogo',
        'valor'
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
        return catalogos::class;
    }
}
