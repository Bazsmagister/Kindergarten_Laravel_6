<?php

namespace App\Models;

use App\Student;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false;
    protected $fillable = ['$student_id', '$streetname', 'streetnumber', 'zip', 'city', 'siblings_num'];

    public function student()
    {
        return $this->belongsTo(Student::class);
        //return $this->belongsTo('App\Student', 'student_id');

        /*

            If you would like to make all attributes mass assignable, you may define the $guarded property as an empty array:

            * The attributes that aren't mass assignable.
            *
            * @var array
            protected $guarded = [];

        */
    }
}
