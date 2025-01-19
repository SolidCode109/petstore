<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pet';
    protected $primaryKey = 'id';
    protected $fillable = ['name','category_id','user_id','photoUrls','tags'];


    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function owner(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function tags(){
        return $this->hasMany(Tag::class);
    }


    protected $casts = [
        'photoUrls' => 'array', // Store as JSON in the database
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


}
