<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicator extends Model
{
    use HasFactory;
    protected $table = 'applicator';
    protected $fillable = ['name', 'cpf', 'coren'];

}
