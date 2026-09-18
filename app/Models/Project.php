<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Menentukan kolom mana saja yang boleh diisi pengguna
    protected $fillable = [
        'title',
        'description',
    ];
}