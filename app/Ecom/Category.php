<?php

namespace Ecom;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];

    /**
     * Set Title attribute
     *
     * @param string
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['firstName'] = ucfirst(strtolower($value));
    }

}
