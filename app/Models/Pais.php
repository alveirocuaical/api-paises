<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'paises';

    /**
     * relation hasMany Departamento
     */

    public function departamentos() : HasMany
    {
        return $this->hasMany(Departamento::class);
    }
}
