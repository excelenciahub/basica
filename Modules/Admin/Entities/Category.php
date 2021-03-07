<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'title', 'description', 'keyword', 'parent_id', 'status'];

    public function products(){
        return $this->hasMany(Product::class);
    }
    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
    public function getImageUrlAttribute(){
        return $this->image==''?'':url(CATEGORY_STORAGE_URL.$this->image);
    }
}
