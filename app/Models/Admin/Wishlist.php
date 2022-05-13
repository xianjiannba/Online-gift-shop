<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'list';

    protected $primaryKey = 'Listnumber';
    public $timestamps = false;
    protected $fillable=['Listnumber','Listuserid','Festival','Deliverydate'];

    use HasFactory;
}
