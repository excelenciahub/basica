<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'ip_address', 'message'];
}
