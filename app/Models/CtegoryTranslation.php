<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CtegoryTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['id','post_id','locale','title','content','smallDesc','address'];
}
