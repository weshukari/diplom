<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;
    protected $fillable =[
        'file',
    ];
   

    public function category(){
        return $this->belongsTo(CategoryLibrary::class, 'id_category');
    }
/////связь книга - пользователь
    public function users(){
        return $this->belongsToMany(User::class, 'user_books', 'book_id', 'user_id');
    }
}
