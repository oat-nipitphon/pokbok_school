<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datacontent extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title_name',
        'content',
        'img_content',
        'duc_file',
        'icon',
        'type',
        'link',
        'link_sub'
    ];
}
