<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class liens extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'descriptions',
        'departement_id',
        'responsable_id'
    ];

    /**
     * Get the user that owns the liens
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id', 'id');
    }

    /**
     * Get the Responsable that owns the liens
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Responsable()
    {

        return $this->belongsTo(Responsable::class, 'responsable_id', 'id');
    }
}
