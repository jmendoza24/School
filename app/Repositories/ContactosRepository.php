<?php

namespace App\Repositories;

use App\Models\Contactos;
use App\Repositories\BaseRepository;

/**
 * Class ContactosRepository
 * @package App\Repositories
 * @version November 23, 2019, 5:50 am UTC
*/

class ContactosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_alumno',
        'nombre_contacto',
        'telefonoc',
        'correo',
        'direccion_contacto',
        'cpc',
        'id_estadoc',
        'id_municipioc',
        'comentariosc',
        'telefono_adicional'
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
        return Contactos::class;
    }
}
