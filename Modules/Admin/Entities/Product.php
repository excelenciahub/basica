<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'detail', 'title', 'keyword', 'description', 'category_id', 'status'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function setSlugAttribute(){
        $this->slug = str_slug($this->name);
    }
    public function getImageUrlAttribute(){
        return $this->image==''?'':url(PRODUCT_STORAGE_URL.$this->image);
    }
}
