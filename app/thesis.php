<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thesis extends Model
{
	 protected $table="thesis";
	  public function customer(){
    	return $this->belongsTo(Personal::class);
    }
   }
