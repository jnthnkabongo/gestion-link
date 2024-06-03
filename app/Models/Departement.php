<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    /**
     * Get the Responsable that owns the Departement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Responsable()
    {
        return $this->belongsTo(Responsable::class, 'responsable_id', 'id');
    }
}


