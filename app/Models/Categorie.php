<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;  
    protected $table="categories";

    public function scopePostcategories($query){
        return $query->where('parent_id', '!=' , 9)->orWhereNull('parent_id');
    }
}
