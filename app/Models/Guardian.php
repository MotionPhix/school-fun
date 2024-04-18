<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Guardian extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id',
        'guardian_first_name',
        'guardian_last_name',
        'relationship',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function phones(): MorphMany
    {
      return $this->morphMany(Phone::class, 'phoneable');
    }

    public function emails(): MorphMany
    {
      return $this->morphMany(Email::class, 'emailable');
    }

    public function address(): MorphOne
    {
      return $this->morphOne(Address::class, 'addressable');
    }
}
