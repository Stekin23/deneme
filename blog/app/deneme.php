<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deneme extends Model
{
protected  $table = 'new';

protected $fillable = ['name', 'address', 'phone', 'email', 'logo'];

protected $guarded = ['id'];
}
