<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','post','title'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
