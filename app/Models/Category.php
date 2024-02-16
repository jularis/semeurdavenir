<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory; 
    public function scopeSubcategories($query){
        return $query->where('parent_id', '=' , 9);
    }

    public function scopePostcategories($query){
        return $query->where('parent_id', '!=' , 9);
    }

    public function scopeAproposcategories($query){
        return $query->where([['parent_id',17]])->whereNotIn('id',[24,33]);
    }
    public function scopeActivitecategories($query){
        return $query->where([['parent_id',18]]);
    }
    public function scopeEquipecategories($query){
        return $query->where('parent_id', 24);
    }

    public function listeEquipe(){
        return $this->hasMany(Equipe::class, 'category_id');
    }
    public function scopeEspacecategories($query){
        return $query->where('parent_id', 20);
    }
    public function scopeNewscategories($query){
        return $query->where([['parent_id', 21],['id','!=',31]]);
    }
    
     
}
