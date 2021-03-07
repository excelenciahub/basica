<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'detail', 'title', 'keyword', 'description', 'category_id', 'status'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
    public function getImageUrlAttribute(){
        return $this->image==''?'':url(PRODUCT_STORAGE_URL.$this->image);
    }
}
