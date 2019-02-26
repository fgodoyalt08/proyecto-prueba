<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\SortableTrait;

class File extends Model
{
    use SortableTrait;

    protected $fillable = [
        'title', 'description', 'path'
    ];

	public function scopeSearch($q)
    {
        return empty(request()->search) ? $q : $q->where('title', 'like', '%'.request()->search.'%')->orWhere('description', 'like', '%'.request()->search.'%');
    }
}
