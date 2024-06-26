<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'student_id',
       'school_class_id',
       'section_id',
       'school_year_id',
       'id_card_number',
   ];

   /**
    * Get the sections for the blog post.
    */
   public function student()
   {
       return $this->belongsTo(User::class, 'student_id');
   }

   /**
    * Get the schoolClass.
    */
   public function schoolClass() {
       return $this->belongsTo(SchoolClass::class, 'school_class_id');
   }

   /**
    * Get the section.
    */
   public function section() {
       return $this->belongsTo(Section::class, 'section_id');
   }
}
