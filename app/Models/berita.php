<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class berita
 * @package App\Models
 * @version May 29, 2023, 6:21 am UTC
 *
 * @property string $judul
 * @property string $keterangan
 * @property string $gambar
 */
class berita extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'beritas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'judul',
        'keterangan',
        'gambar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'judul' => 'string',
        'keterangan' => 'string',
        'gambar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'judul' => 'required'
    ];

    
}
