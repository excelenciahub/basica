<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'image', 'title', 'description', 'keyword', 'parent_id', 'status'];

    public function products(){
        return $this->hasMany(Product::class);
    }
    public function getImageUrlAttribute(){
        return $this->image==''?'':url(CATEGORY_STORAGE_URL.$this->image);
    }
}
