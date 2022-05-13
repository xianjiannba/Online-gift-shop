<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';

    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $fillable=['Item','Id','Price','Pic'];



    use HasFactory;
}
