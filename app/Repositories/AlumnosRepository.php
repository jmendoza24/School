<?php

namespace App\Repositories;

use App\Models\Alumnos;
use App\Repositories\BaseRepository;

/**
 * Class AlumnosRepository
 * @package App\Repositories
 * @version November 23, 2019, 5:25 am UTC
*/

class AlumnosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_grado',
        'id_grupo',
        'id_ciclo',
        'nombre_alumno',
        'apellidos_alumno',
        'fecha_nacimiento',
        'id_estado',
        'id_municipio',
        'direccion',
        'cp',
        'id_tipo_sangre',
        'num_control',
        'nivel_estudio',
        'comentarios',
        'foto',
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
        return Alumnos::class;
    }
}
