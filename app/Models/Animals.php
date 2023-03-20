<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    use HasFactory;

    protected $table = "animals";
    protected $fillable = ["name", "breed", "age", "center_id", "image"];

    public function center(){
        return $this->belongsTo(Centers::class);
    }
}
