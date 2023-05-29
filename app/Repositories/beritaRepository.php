<?php

namespace App\Repositories;

use App\Models\berita;
use App\Repositories\BaseRepository;

/**
 * Class beritaRepository
 * @package App\Repositories
 * @version May 29, 2023, 6:21 am UTC
*/

class beritaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'judul',
        'keterangan',
        'gambar'
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
        return berita::class;
    }
}
