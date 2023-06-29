<?php

namespace App\Models\student;

use App\Models\Admission;
use App\Models\Caste;
use App\Models\Religion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use PhpParser\Node\Expr\Cast;

class Student extends Model
{
    use HasFactory;
    public function parents(): HasMany
    {
        return $this->hasMany(parents::class);
    }
    public function education(): HasMany
    {
        return $this->hasMany(Education::class);
    }
    public function address(): HasMany
    {
        return $this->hasMany(Address::class);
    }
    public function admission(): HasMany
    {
        return $this->hasMany(Admission::class);
    }
    public function emergency_details(): HasMany
    {
        return $this->hasMany(Emergency_Details::class);
    }
    public function testimonials(): HasMany
    {
        return $this->hasMany(Testimonials::class);
    }
    public function religion(): HasOne
    {
        return $this->hasOne(Religion::class);
    }
    public function caste(): HasOne
    {
        return $this->hasOne(Caste::class);
    }
    public function subcaste(): HasOne
    {
        return $this->hasOne(Subcaste::class);
    }
}
