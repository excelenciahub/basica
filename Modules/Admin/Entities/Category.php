<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'title', 'description', 'keyword', 'parent_id', 'status'];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
