<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiniInformation extends Model
{
    use HasFactory;

    protected $table = 'homepage_informations';
    protected $guarded = [];
}
