<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model implements TranslatableContract
{

    use Translatable;
    use HasFactory;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['id','image','parent','created_at','updated_at','deleted_at'];
    protected $table = 'categories';

}
