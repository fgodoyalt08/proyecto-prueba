<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\SortableTrait;

class Role extends Model
{
	use SortableTrait;

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];
    
    public function users()
	{
	  return $this->belongsToMany(User::class);
	}

	public function scopeSearch($q)
    {
        return empty(request()->search) ? $q : $q->where('name', 'like', '%'.request()->search.'%')->orWhere('description', 'like', '%'.request()->search.'%');
    }
}
