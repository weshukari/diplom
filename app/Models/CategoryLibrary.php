<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLibrary extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function book(){
        return $this->hasMany(Library::class, 'id_category');
    }
}
