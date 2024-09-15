<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mnu extends Model
{
    protected $table='menu';

    public function rest()
    {
    	return $this->belongsTo('App\Rest');
    }
    public function cat()
    {
    	return $this->belongsTo('App\Cat');
    }
     
    
}
