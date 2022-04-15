<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comment(){
        return $this->hasmany(comment::class);
    }
    public function catagory(){
        return $this->belongsTomany(catagory::class);
    }
}
