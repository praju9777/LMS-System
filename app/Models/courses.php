<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class courses extends Eloquent
{ 
    public $timestamps=false;
     protected $primaryKey='_id';
    use HasFactory;
}
