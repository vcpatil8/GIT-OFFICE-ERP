<?php

namespace App\Models;

use App\Models\student\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Districts extends Model
{
    use HasFactory;
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
