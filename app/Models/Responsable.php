<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'intitule'
    ];


    /**
     * Get the Departement that owns the Responsable
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id', 'id');
    }
}
