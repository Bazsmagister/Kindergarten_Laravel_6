<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    protected $fillable = ['first_name', 'last_name', 'sign', 'age'];


    /*

If you would like to make all attributes mass assignable, you may define the $guarded property as an empty array:

 * The attributes that aren't mass assignable.
 *
 * @var array
protected $guarded = [];

*/


    public function adress()
    {
        return $this->hasOne('App\Address');
        //same:
        //return $this->hasOne(Address::class);
    }
}
