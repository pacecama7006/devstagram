<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
    ];

    // Relaciones

    // Relación con User. Un post pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class)->select(['name', 'username']);
    }

    //Relación con comments. Un post tiene uno o muchos comentarios, un comentario
    // Pertenece a un post
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
