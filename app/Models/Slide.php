<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;
use App\Traits\QueryScopes;
class Slide extends Model
{
    use HasFactory, QueryScopes,SoftDeletes ;

    protected $fillable = [
        'name',
        'keyword',
        'description',
        'item',
        'setting',
        'short_code',
        'publish',
    ];

    protected $table = 'slides';
    protected $casts = [
        'item' => 'json',
        'setting' => 'json',
    ];
}
