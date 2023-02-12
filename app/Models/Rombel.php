<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    use HasFactory;

    public function asdos()
    {
        return $this->belongsTo(User::class, 'asdos_id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function assmt()
    {
        return $this->hasMany(Assessment::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }
}
