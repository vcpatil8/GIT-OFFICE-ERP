<?php

namespace App\Models\student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimonials extends Model
{
    use HasFactory;
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
