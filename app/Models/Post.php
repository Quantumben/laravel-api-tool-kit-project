<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Filters\PostFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory,Filterable;

protected $default_filters = PostFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description'
    ];
}