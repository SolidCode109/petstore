<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = ['name','category_id',];

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function owner(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }


}
