<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ita extends Model
{
    use HasFactory;
            /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'sub_id',
        'title_name',
        'content',
        'title_menu',
        'sub_menu',
        'image_ita',
        'duc_file'
    ];
}
