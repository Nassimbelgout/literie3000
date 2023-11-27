<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matelas extends Model
{
    use HasFactory;
    protected $table = 'matelas';
    protected $fillable = ['taille', 'modele', 'prix', 'marque','image'];
}
