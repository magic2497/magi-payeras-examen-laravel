<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    public $table = 'post';
    protected $fillable = ['title', 'extract', 'description', 'expiry', 'commentable', 'publication', 'acces', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
