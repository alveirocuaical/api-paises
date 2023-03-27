<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ciudad extends Model
{
    use HasFactory;
    protected $table = 'ciudades';

    /**
     * relation BelongsTo Departamento
     */

    public function departamento() : BelongsTo
    {
        return $this->belongsTo(Departamento::class);
    }
}
