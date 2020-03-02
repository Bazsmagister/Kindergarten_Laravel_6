<?php

namespace App;

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
    }
}
