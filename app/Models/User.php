<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'uuid',
        'email',
        'password',
        'gender',
        'nationality',
        'birthday',
        'religion',
        'blood_type',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function fullName() : Attribute {
      return Attribute::make(
        get: fn ($value, $attributes) => "{$attributes['first_name']} {$attributes['last_name']}"
      );
    }

    /**
     * Get guardians information
     */
    public function guardians()
    {
      return $this->hasMany(Guardian::class, 'student_id', 'id');
    }

    /**
     * Get student information
     */
    public function student()
    {
        return $this->hasOne(Student::class, 'student_id', 'id');
    }

    /**
     * Get the marks.
     */
    public function marks()
    {
        return $this->hasMany(Mark::class, 'student_id', 'id');
    }

    protected static function boot()
    {
      parent::boot();

      static::creating(function ($user) {
        $user->uid = Str::orderedUuid();
      });

      static::created(function ($user) {

        if (static::count() === 1) {

            $user->role = 'admin';

            $user->save();

        }

      });

    }
}
