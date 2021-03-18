<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    use \Askedio\SoftCascade\Traits\SoftCascadeTrait;

    protected $softCascade = ['images'];

    protected $fillable =  [
        'category_id',
        'code',
        'name',
        'discription',
        'price',
        'is_top',
        'on_sale'
    ];

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
