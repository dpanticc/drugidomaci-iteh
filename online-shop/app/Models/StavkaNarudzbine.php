<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StavkaNarudzbine extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['proizvod_id', 'narudzbina_id'];

    public function proizvod(){
        return $this->belongsTo(Proizvod::class);
    }
    public function narudzbina(){
        return $this->belongsTo(Narudzbina::class);
    }
}
