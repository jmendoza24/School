<?php

namespace App\Repositories;

use App\Models\personal_info_alumno;
use App\Repositories\BaseRepository;

/**
 * Class personal_info_alumnoRepository
 * @package App\Repositories
 * @version November 28, 2019, 5:33 pm UTC
*/

class personal_info_alumnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'date_birth',
        'place_birth',
        'gender',
        'native_language',
        'ethnicity',
        'race',
        'special_ed',
        'gifted_talented',
        'address',
        'city',
        'state',
        'zipcode',
        'country',
        'tel',
        'parents_cell',
        'id_personal',
        'personal_info',
        'email',
        'parents_email',
        'name_parent',
        'last_school',
        'phone_school',
        'school_address',
        'last_date_attended',
        'last_complete_level',
        'comments',
        'photo_alumno',
        'grade',
        'level',
        'group',
        'school_cycle',
        'num_control'

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
        return personal_info_alumno::class;
    }
}
