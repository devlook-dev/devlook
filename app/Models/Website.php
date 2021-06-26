<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Website extends Model
{
    use HasFactory;

    public function getData()
    {
        return DB::all();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
