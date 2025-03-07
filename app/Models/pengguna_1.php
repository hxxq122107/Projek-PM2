<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna_1 extends Model
{
    use HasFactory; 
    protected $fillable = ['id', 'email', 'nama', 'password'];
    protected $table = 'pengguna_1'; 
}

?>
