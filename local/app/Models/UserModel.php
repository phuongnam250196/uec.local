<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'uec_user';
    protected $guarded=[];

    public function Enterprises() {
    	return $this->belongsTo('App/Models/EnterprisesModel', 'enterprise_id');
    }
}
