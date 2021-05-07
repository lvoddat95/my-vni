<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    // Fill danh sach bien name request
    protected $fillable = ['name', 'parent_id', 'slug'];
}
