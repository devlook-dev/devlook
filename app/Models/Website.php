<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Website extends Model
{
    use HasFactory;
    protected $table = 'websites';

    public function getData()
    {
        return DB::all();
    }
    public function detailData($id)
    {
        return DB::where('id', $id)->first();
    }

    public function insertData($data)
    {
        DB::insert($data);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
