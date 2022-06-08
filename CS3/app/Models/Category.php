<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
//    public function sub_categories(){
//        return $this->hasMany(self::class,'parent_id','id');
//    }
    use SoftDeletes;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'parent_id',
        'slug',
        'status'
    ];
}
