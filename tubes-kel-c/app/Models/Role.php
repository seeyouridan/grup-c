<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use spatie\Permission\Models\Permission as ModelsRole;

class Role extends ModelsRole
{
    use HasFactory;
}
