<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departamento extends Model
{
    use HasFactory;
    protected $table = 'departamentos';

    /**
     * relation BelongsTo Pais
     */

    public function pais() : BelongsTo
    {
        return  $this->belongsTo(Pais::class);
    }

    /**
     * relation hasMany Ciudad
     */
    public function ciudades() : HasMany
    {
        return $this->hasMany(Ciudad::class);
    }
}
