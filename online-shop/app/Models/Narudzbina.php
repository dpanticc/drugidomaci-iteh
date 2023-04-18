<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Narudzbina extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['ime', 'prezime', 'grad', 'adresa', 'telefon','email', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
