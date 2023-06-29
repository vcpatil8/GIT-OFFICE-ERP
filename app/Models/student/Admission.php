<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Admission extends Model
{
    use HasFactory;
    public function student(): BelongsTo
    {
        return $this->belongsTo(student::class);
    }
    public function countries(): BelongsTo
    {
        return $this->belongsTo(countries::class);
    }
    public function districts(): BelongsTo
    {
        return $this->belongsTo(Districts::class);
    }
    public function taluks(): BelongsTo
    {
        return $this->belongsTo(Taluks::class);
    }
    public function states(): BelongsTo
    {
        return $this->belongsTo(States::class);
    }
}
