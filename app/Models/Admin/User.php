<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    protected $primaryKey = 'ID';

    public $timestamps = false;
    protected $fillable=['Name','ID','Username','Password','Addresss','Email','log'];


    use HasFactory;
}
